<?php
class LocalProvasController extends AppController {

	public $name = 'LocalProvas';

	public function admin_index() {
		$this->LocalProva->recursive = 0;
		$this->set('localProvas', $this->paginate());
	}

	public function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid local prova', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('localProva', $this->LocalProva->read(null, $id));
	}

	public function admin_add() {
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

	public function admin_edit($id = null) {
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

	public function admin_delete($id = null) {
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
			$this->LocalProva->recursive = 0;
			$this->LocalProva->bindModel(array('hasOne' => array('LocalProvaSelecao')));
			$localProvas = $this->LocalProva->find('all', array(
				'conditions' => array('LocalProvaSelecao.selecao_id' => $this->data['id']),
				'fields' => array('LocalProva.id', 'LocalProva.descricao'),
			));
			$localProvas = Set::combine($localProvas, '{n}.LocalProva.id', '{n}.LocalProva.descricao');
			$this->set(compact('localProvas'));
		}
	}

}