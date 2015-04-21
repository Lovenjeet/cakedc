<?php
class ArosAcosController extends AppController {

	var $name = 'ArosAcos';
	
	function beforeFilter() {
		parent::beforeFilter(); 
		$this->Auth->allow(array('*'));
	}
	
	function index() {
		$this->ArosAco->recursive = 0;
		$this->set('arosAcos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid aros aco', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('arosAco', $this->ArosAco->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ArosAco->create();
			if ($this->ArosAco->save($this->data)) {
				$this->Session->setFlash(__('The aros aco has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aros aco could not be saved. Please, try again.', true));
			}
		}
		$aros = $this->ArosAco->Aro->find('list');
		$acos = $this->ArosAco->Aco->find('list');
		$this->set(compact('aros', 'acos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid aros aco', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ArosAco->save($this->data)) {
				$this->Session->setFlash(__('The aros aco has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aros aco could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ArosAco->read(null, $id);
		}
		$aros = $this->ArosAco->Aro->find('list');
		$acos = $this->ArosAco->Aco->find('list');
		$this->set(compact('aros', 'acos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for aros aco', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ArosAco->delete($id)) {
			$this->Session->setFlash(__('Aros aco deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Aros aco was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
