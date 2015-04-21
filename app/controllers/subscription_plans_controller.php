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
			$this->Session->setFlash(__('Invalid subscription plan', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('subscriptionPlan', $this->SubscriptionPlan->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SubscriptionPlan->create();
			if ($this->SubscriptionPlan->save($this->data)) {
				$this->Session->setFlash(__('The subscription plan has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subscription plan could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid subscription plan', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SubscriptionPlan->save($this->data)) {
				$this->Session->setFlash(__('The subscription plan has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subscription plan could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SubscriptionPlan->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for subscription plan', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SubscriptionPlan->delete($id)) {
			$this->Session->setFlash(__('Subscription plan deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Subscription plan was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
