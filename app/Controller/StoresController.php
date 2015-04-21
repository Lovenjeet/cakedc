<?php
class StoresController extends AppController {

	var $name = 'Stores';

	function beforeFilter() {
		parent::beforeFilter();
		$this->layout='dashboard'; 
		//$this->Auth->allow(array('*'));
		$this->Auth->allow(array('*'));
		//$this->Auth->autoRedirect = false;
	}
	
	function index() {
		//$this->Store->recursive = 0;
		$this->set('stores', $this->paginate());
	
	}

	function view($id = null) {
		
		/*if (!$id) {
			$user_id=$this->Session->read('Auth.User.id');
			$store=$this->Store->findByuserId($user_id);
			if(!empty($store)):
				$id=$store['Store']['id'];
			endif;
		}*/
		
		if (!$id) {
			$this->Session->setFlash(__('Invalid store'));
			return $this->redirect(array('action' => 'index'));
		
		}
		$this->set('store', $this->Store->read(null, $id));
	}

	function add() {
		if (!empty($this->request->data)) {
			$this->Store->create();
			if ($this->Store->save($this->request->data)) {
				$this->Session->setFlash(__('The store has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store could not be saved. Please, try again.'));
			}
		}
		$users = $this->Store->User->find('list',array('fields'=>'id,username','conditions'=>'group_id=2'));
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id) {
			$user_id = $this->Session->read('Auth.User.id');
			$this->loadModel('Store');
			$store=$this->Store->findByuserId($user_id);
			if(!empty($store)):
				$store_id=$store['Store']['id'];
				return $this->redirect(array('action' => 'edit/'.$store_id));
			endif;
		}
		
		
		if (!$id && empty($this->request->data)) {
			$this->Session->setFlash(__('Invalid store'));
			return $this->redirect(array('action' => 'index'));
		}
		if (!empty($this->request->data)) {
			if(!isset($this->request->data['Store']['user_id'])): 
				$user_id=$this->Session->read('Auth.User.id');
				$this->request->data['Store']['user_id'] = $user_id;
			endif;
			if ($this->Store->save($this->request->data)) {
				$this->Session->setFlash(__('The store has been saved'));
				if($this->Session->read('Auth.User.group_id') != '2'):
					return $this->redirect(array('action' => 'index'));
				else:
					return $this->redirect(array('action' => 'edit'));
				endif;
			} else {
				$this->Session->setFlash(__('The store could not be saved. Please, try again.'));
			}
		}
		if (empty($this->request->data)) {
			$this->request->data = $this->Store->read(null, $id);
		}
		$users = $this->Store->User->find('list',array('fields'=>'id,username','conditions'=>'group_id=2'));
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for store'));
			return $this->redirect(array('action'=>'index'));
		}
		if ($this->Store->delete($id)) {
			$this->Session->setFlash(__('Store deleted'));
			return $this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Store was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
