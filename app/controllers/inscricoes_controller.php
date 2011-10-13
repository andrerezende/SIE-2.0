<?php
class InscricoesController extends AppController {

	var $name = 'Inscricoes';

	function index() {
		$this->Inscricao->recursive = 0;
		$this->set('inscricoes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid inscricao', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('inscricao', $this->Inscricao->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Inscricao->create();
			if ($this->Inscricao->save($this->data)) {
				$this->Session->setFlash(__('The inscricao has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inscricao could not be saved. Please, try again.', true));
			}
		}
		$candidatos = $this->Inscricao->Candidato->find('list');
		$selecoes = $this->Inscricao->Selecao->find('list');
		$this->set(compact('candidatos', 'selecoes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid inscricao', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Inscricao->save($this->data)) {
				$this->Session->setFlash(__('The inscricao has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inscricao could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Inscricao->read(null, $id);
		}
		$candidatos = $this->Inscricao->Candidato->find('list');
		$selecoes = $this->Inscricao->Selecao->find('list');
		$this->set(compact('candidatos', 'selecoes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for inscricao', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Inscricao->delete($id)) {
			$this->Session->setFlash(__('Inscricao deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Inscricao was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
