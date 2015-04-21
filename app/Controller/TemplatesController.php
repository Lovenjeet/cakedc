<?php
class TemplatesController extends AppController {

	var $name = 'Templates';

	function beforeFilter() {
		$this->layout='dashboard'; 
	}
	
	function index() {
		$this->Template->recursive = 0;
		$this->set('templates', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid template'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->set('template', $this->Template->read(null, $id));
	}

	function add() {
		if (!empty($this->request->data)) {
			$this->Template->create();
			if ($this->Template->save($this->request->data)) {
				$this->Session->setFlash(__('The template has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The template could not be saved. Please, try again.'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->request->data)) {
			$this->Session->setFlash(__('Invalid template'));
			return $this->redirect(array('action' => 'index'));
		}
		if (!empty($this->request->data)) {
			if ($this->Template->save($this->request->data)) {
				$this->Session->setFlash(__('The template has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The template could not be saved. Please, try again.'));
			}
		}
		if (empty($this->request->data)) {
			$this->request->data = $this->Template->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for template'));
			return $this->redirect(array('action'=>'index'));
		}
		if ($this->Template->delete($id)) {
			$this->Session->setFlash(__('Template deleted'));
			return $this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Template was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
