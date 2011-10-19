<?php
class EstadoCivisController extends AppController {

	var $name = 'EstadoCivis';

	function index() {
		$this->EstadoCivil->recursive = 0;
		$this->set('estadoCivis', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid estado civil', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('estadoCivil', $this->EstadoCivil->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->EstadoCivil->create();
			if ($this->EstadoCivil->save($this->data)) {
				$this->Session->setFlash(__('The estado civil has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estado civil could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid estado civil', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->EstadoCivil->save($this->data)) {
				$this->Session->setFlash(__('The estado civil has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estado civil could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EstadoCivil->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for estado civil', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EstadoCivil->delete($id)) {
			$this->Session->setFlash(__('Estado civil deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Estado civil was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}