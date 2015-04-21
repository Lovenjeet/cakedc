<?php
class SubscriptionPlansController extends AppController {

	var $name = 'SubscriptionPlans';

	function index() {
		$this->SubscriptionPlan->recursive = 0;
		$this->set('subscriptionPlans', $this->paginate());
	}
	
	function beforeFilter() {
		parent::beforeFilter(); 
		$this->layout='dashboard';
		$this->Auth->allow(array('*'));
	}
	

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid subscription plan'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->set('subscriptionPlan', $this->SubscriptionPlan->read(null, $id));
	}

	function add() {
		if (!empty($this->request->data)) {
			$this->SubscriptionPlan->create();
			if ($this->SubscriptionPlan->save($this->request->data)) {
				$this->Session->setFlash(__('The subscription plan has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subscription plan could not be saved. Please, try again.'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->request->data)) {
			$this->Session->setFlash(__('Invalid subscription plan'));
			return $this->redirect(array('action' => 'index'));
		}
		if (!empty($this->request->data)) {
			if ($this->SubscriptionPlan->save($this->request->data)) {
				$this->Session->setFlash(__('The subscription plan has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subscription plan could not be saved. Please, try again.'));
			}
		}
		if (empty($this->request->data)) {
			$this->request->data = $this->SubscriptionPlan->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for subscription plan'));
			return $this->redirect(array('action'=>'index'));
		}
		if ($this->SubscriptionPlan->delete($id)) {
			$this->Session->setFlash(__('Subscription plan deleted'));
			return $this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Subscription plan was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
