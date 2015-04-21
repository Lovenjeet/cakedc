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
					$this->redirect(array('action' => 'view/'.$company['Company']['id']));
				else:
					$this->redirect(array('action' => 'add'));
				endif;			
			endif;
		}*/
		
		if (!$id) {
			$this->Session->setFlash(__('Invalid company', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('company', $this->Company->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Company->create();
			if(!isset($this->data['Company']['store_id'])): 
				$user_id=$this->Session->read('Auth.User.id');
				$this->loadModel('Store');
				$store=$this->Store->findByuserId($user_id);
				$this->data['Company']['store_id'] = $store['Store']['id'];
			endif;
			if ($this->Company->save($this->data)) {
				$this->Session->setFlash(__('The company has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company could not be saved. Please, try again.', true));
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
					$this->redirect(array('action' => 'edit/'.$company['Company']['id']));
				endif;			
			endif;
		}
		
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid company', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if(!isset($this->data['Company']['store_id'])): 
				$user_id=$this->Session->read('Auth.User.id');
				$this->loadModel('Store');
				$store=$this->Store->findByuserId($user_id);
				$this->data['Company']['store_id'] = $store['Store']['id'];
			endif;
			if ($this->Company->save($this->data)) {
				$this->Session->setFlash(__('The company has been saved', true));
				if($this->Session->read('Auth.User.group_id') != '2'):
					$this->redirect(array('action' => 'index'));
				else:
					$this->redirect(array('action' => 'edit'));
				endif;
			} else {
				$this->Session->setFlash(__('The company could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Company->read(null, $id);
		}
		$stores = $this->Company->Store->find('list',array('fields'=>'id,store_name'));
		$this->set(compact('stores'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for company', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Company->delete($id)) {
			$this->Session->setFlash(__('Company deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Company was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
