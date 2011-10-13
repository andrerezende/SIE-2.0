<?php
class ClassificacoesListasController extends AppController {

	var $name = 'ClassificacoesListas';

	function index() {
		$this->ClassificacoesLista->recursive = 0;
		$this->set('classificacoesListas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid classificacoes lista', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('classificacoesLista', $this->ClassificacoesLista->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ClassificacoesLista->create();
			if ($this->ClassificacoesLista->save($this->data)) {
				$this->Session->setFlash(__('The classificacoes lista has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The classificacoes lista could not be saved. Please, try again.', true));
			}
		}
		$classificacoes = $this->ClassificacoesLista->Classificacao->find('list');
		$listas = $this->ClassificacoesLista->Lista->find('list');
		$this->set(compact('classificacoes', 'listas'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid classificacoes lista', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ClassificacoesLista->save($this->data)) {
				$this->Session->setFlash(__('The classificacoes lista has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The classificacoes lista could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ClassificacoesLista->read(null, $id);
		}
		$classificacoes = $this->ClassificacoesLista->Classificacao->find('list');
		$listas = $this->ClassificacoesLista->Lista->find('list');
		$this->set(compact('classificacoes', 'listas'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for classificacoes lista', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ClassificacoesLista->delete($id)) {
			$this->Session->setFlash(__('Classificacoes lista deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Classificacoes lista was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
