<?php
class ListasController extends AppController {

	var $name = 'Listas';

	function index() {
		$this->Lista->recursive = 0;
		$this->set('listas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid lista', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('lista', $this->Lista->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Lista->create();
			if ($this->Lista->save($this->data)) {
				$this->Session->setFlash(__('The lista has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lista could not be saved. Please, try again.', true));
			}
		}
		$classificacoes = $this->Lista->Classificacao->find('list');
		$this->set(compact('classificacoes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid lista', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Lista->save($this->data)) {
				$this->Session->setFlash(__('The lista has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lista could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Lista->read(null, $id);
		}
		$classificacoes = $this->Lista->Classificacao->find('list');
		$this->set(compact('classificacoes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for lista', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Lista->delete($id)) {
			$this->Session->setFlash(__('Lista deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Lista was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
