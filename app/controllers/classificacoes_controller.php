<?php
class ClassificacoesController extends AppController {

	var $name = 'Classificacoes';

	function index() {
		$this->Classificacao->recursive = 0;
		$this->set('classificacoes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid classificacao', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('classificacao', $this->Classificacao->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Classificacao->create();
			if ($this->Classificacao->save($this->data)) {
				$this->Session->setFlash(__('The classificacao has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The classificacao could not be saved. Please, try again.', true));
			}
		}
		$inscricoes = $this->Classificacao->Inscricao->find('list');
		$cotas = $this->Classificacao->Cota->find('list');
		$listas = $this->Classificacao->Lista->find('list');
		$this->set(compact('inscricoes', 'cotas', 'listas'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid classificacao', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Classificacao->save($this->data)) {
				$this->Session->setFlash(__('The classificacao has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The classificacao could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Classificacao->read(null, $id);
		}
		$inscricoes = $this->Classificacao->Inscricao->find('list');
		$cotas = $this->Classificacao->Cota->find('list');
		$listas = $this->Classificacao->Lista->find('list');
		$this->set(compact('inscricoes', 'cotas', 'listas'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for classificacao', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Classificacao->delete($id)) {
			$this->Session->setFlash(__('Classificacao deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Classificacao was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
