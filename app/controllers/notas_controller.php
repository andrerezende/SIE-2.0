<?php
class NotasController extends AppController {

	var $name = 'Notas';

	function index() {
		$this->Nota->recursive = 0;
		$this->set('notas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid nota', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('nota', $this->Nota->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Nota->create();
			if ($this->Nota->save($this->data)) {
				$this->Session->setFlash(__('The nota has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nota could not be saved. Please, try again.', true));
			}
		}
		$provas = $this->Nota->Prova->find('list');
		$inscricoes = $this->Nota->Inscricao->find('list');
		$this->set(compact('provas', 'inscricoes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid nota', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Nota->save($this->data)) {
				$this->Session->setFlash(__('The nota has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nota could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Nota->read(null, $id);
		}
		$provas = $this->Nota->Prova->find('list');
		$inscricoes = $this->Nota->Inscricao->find('list');
		$this->set(compact('provas', 'inscricoes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for nota', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Nota->delete($id)) {
			$this->Session->setFlash(__('Nota deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Nota was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
