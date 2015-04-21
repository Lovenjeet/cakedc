<?php
class PagesController extends AppController {

	var $name = 'Pages';

	function beforeFilter() {
		parent::beforeFilter(); 
		$this->layout='dashboard';
	}
	
	function index() {
		$this->Page->recursive = 0;
		$this->set('pages', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid page', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('page', $this->Page->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			if(!isset($this->data['Page']['store_id'])): 
					$user_id=$this->Session->read('Auth.User.id');
					$this->loadModel('Store');
					$store=$this->Store->findByuserId($user_id);
					$this->data['Page']['store_id'] = $store['Store']['id'];
			endif;
			$this->Page->create();
			if ($this->Page->save($this->data)) {
				$this->Session->setFlash(__('The page has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The page could not be saved. Please, try again.', true));
			}
		}
		$stores = $this->Page->Store->find('list',array('fields'=>'id,store_name'));
		$this->set(compact('stores'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid page', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			
			if(!isset($this->data['Page']['store_id'])): 
					$user_id=$this->Session->read('Auth.User.id');
					$this->loadModel('Store');
					$store=$this->Store->findByuserId($user_id);
					$this->data['Page']['store_id'] = $store['Store']['id'];
			endif;
					
			if ($this->Page->save($this->data)) {
				$this->Session->setFlash(__('The page has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The page could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Page->read(null, $id);
		}
		$stores = $this->Page->Store->find('list',array('fields'=>'id,store_name'));
		$this->set(compact('stores'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for page', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Page->delete($id)) {
			$this->Session->setFlash(__('Page deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Page was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
