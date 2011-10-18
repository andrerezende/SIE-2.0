<?php
class ProvasController extends AppController {

	var $name = 'Provas';

	function index() {
		$this->Prova->recursive = 0;
		$this->set('provas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid prova', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('prova', $this->Prova->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Prova->create();
			if ($this->Prova->save($this->data)) {
				$this->Session->setFlash(__('The prova has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prova could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid prova', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Prova->save($this->data)) {
				$this->Session->setFlash(__('The prova has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prova could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Prova->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for prova', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Prova->delete($id)) {
			$this->Session->setFlash(__('Prova deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Prova was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
