<?php
class CompaniesController extends AppController {

	var $name = 'Companies';
	
	function beforeFilter() {
		parent::beforeFilter(); 
		$this->layout='dashboard';
	}
	
	function index() {
		$this->Company->recursive = 0;
		$this->set('companies', $this->paginate());
	}

	function view($id = null) {
		/*if (!$id) {
			$user_id=$this->Session->read('Auth.User.id');
			$this->loadModel('Store');
			$store=$this->Store->findByuserId($user_id);
			if(!empty($store)):
				
				$store_id=$store['Store']['id'];
				$company=$this->Company->findBystoreId($store_id);
				if(!empty($company)):
					return $this->redirect(array('action' => 'view/'.$company['Company']['id']));
				else:
					return $this->redirect(array('action' => 'add'));
				endif;			
			endif;
		}*/
		
		if (!$id) {
			$this->Session->setFlash(__('Invalid company'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->set('company', $this->Company->read(null, $id));
	}

	function add() {
		if (!empty($this->request->data)) {
			$this->Company->create();
			if(!isset($this->request->data['Company']['store_id'])): 
				$user_id=$this->Session->read('Auth.User.id');
				$this->loadModel('Store');
				$store=$this->Store->findByuserId($user_id);
				$this->request->data['Company']['store_id'] = $store['Store']['id'];
			endif;
			if ($this->Company->save($this->request->data)) {
				$this->Session->setFlash(__('The company has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company could not be saved. Please, try again.'));
			}
		}
		$stores = $this->Company->Store->find('list',array('fields'=>'id,store_name'));
		
		$this->set(compact('stores'));
	}

	function edit($id = null) {
		
		if (!$id) {
			$user_id=$this->Session->read('Auth.User.id');
			$this->loadModel('Store');
			$store=$this->Store->findByuserId($user_id);
			if(!empty($store)):
				$store_id=$store['Store']['id'];
				$company=$this->Company->findBystoreId($store_id);
				if(!empty($company)):
					return $this->redirect(array('action' => 'edit/'.$company['Company']['id']));
				endif;			
			endif;
		}
		
		if (!$id && empty($this->request->data)) {
			$this->Session->setFlash(__('Invalid company'));
			return $this->redirect(array('action' => 'index'));
		}
		if (!empty($this->request->data)) {
			if(!isset($this->request->data['Company']['store_id'])): 
				$user_id=$this->Session->read('Auth.User.id');
				$this->loadModel('Store');
				$store=$this->Store->findByuserId($user_id);
				$this->request->data['Company']['store_id'] = $store['Store']['id'];
			endif;
			if ($this->Company->save($this->request->data)) {
				$this->Session->setFlash(__('The company has been saved'));
				if($this->Session->read('Auth.User.group_id') != '2'):
					return $this->redirect(array('action' => 'index'));
				else:
					return $this->redirect(array('action' => 'edit'));
				endif;
			} else {
				$this->Session->setFlash(__('The company could not be saved. Please, try again.'));
			}
		}
		if (empty($this->request->data)) {
			$this->request->data = $this->Company->read(null, $id);
		}
		$stores = $this->Company->Store->find('list',array('fields'=>'id,store_name'));
		$this->set(compact('stores'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for company'));
			return $this->redirect(array('action'=>'index'));
		}
		if ($this->Company->delete($id)) {
			$this->Session->setFlash(__('Company deleted'));
			return $this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Company was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
