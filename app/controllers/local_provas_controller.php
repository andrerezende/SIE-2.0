<?php
class LocalProvasController extends AppController {

	var $name = 'LocalProvas';

	function index() {
		$this->LocalProva->recursive = 0;
		$this->set('localProvas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid local prova', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('localProva', $this->LocalProva->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->LocalProva->create();
			if ($this->LocalProva->save($this->data)) {
				$this->Session->setFlash(__('The local prova has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The local prova could not be saved. Please, try again.', true));
			}
		}
		$selecoes = $this->LocalProva->Selecao->find('list');
		$this->set(compact('selecoes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid local prova', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->LocalProva->save($this->data)) {
				$this->Session->setFlash(__('The local prova has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The local prova could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->LocalProva->read(null, $id);
		}
		$selecoes = $this->LocalProva->Selecao->find('list');
		$this->set(compact('selecoes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for local prova', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->LocalProva->delete($id)) {
			$this->Session->setFlash(__('Local prova deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Local prova was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	public function ajax_get_local_prova() {
		Configure::write('debug', 0);
		$this->layout = 'ajax';
		if ($this->RequestHandler->isAjax()) {
			FireCake::dump('data', $this->data);
			$this->LocalProva->contain();
			$localProvas = $this->LocalProva->find('list', array('conditions' => array('Selecao.id' => $this->data['Selecao']['id'])));
			FireCake::dump('localProvas', $municipios);
			$this->set(compact('localProvas'));
		}
	}
}
