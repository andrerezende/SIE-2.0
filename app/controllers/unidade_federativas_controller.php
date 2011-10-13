<?php
class UnidadeFederativasController extends AppController {

	var $name = 'UnidadeFederativas';

	function index() {
		$this->UnidadeFederativa->recursive = 0;
		$this->set('unidadeFederativas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid unidade federativa', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('unidadeFederativa', $this->UnidadeFederativa->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->UnidadeFederativa->create();
			if ($this->UnidadeFederativa->save($this->data)) {
				$this->Session->setFlash(__('The unidade federativa has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The unidade federativa could not be saved. Please, try again.', true));
			}
		}
		$paises = $this->UnidadeFederativa->Pai->find('list');
		$this->set(compact('paises'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid unidade federativa', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->UnidadeFederativa->save($this->data)) {
				$this->Session->setFlash(__('The unidade federativa has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The unidade federativa could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->UnidadeFederativa->read(null, $id);
		}
		$paises = $this->UnidadeFederativa->Pai->find('list');
		$this->set(compact('paises'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for unidade federativa', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->UnidadeFederativa->delete($id)) {
			$this->Session->setFlash(__('Unidade federativa deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Unidade federativa was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
