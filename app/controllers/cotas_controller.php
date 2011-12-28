<?php
class CotasController extends AppController {

	public $name = 'Cotas';

	public function admin_index() {
		$this->Cota->recursive = 0;
		$this->set('cotas', $this->paginate());
	}

	public function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid cota', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('cota', $this->Cota->read(null, $id));
	}

	public function admin_add() {
		if (!empty($this->data)) {
			$this->Cota->create();
			if ($this->Cota->save($this->data)) {
				$this->Session->setFlash(__('The cota has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cota could not be saved. Please, try again.', true));
			}
		}
		$selecoes = $this->Cota->Selecao->find('list');
		$this->set(compact('selecoes'));
	}

	public function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid cota', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Cota->save($this->data)) {
				$this->Session->setFlash(__('The cota has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cota could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Cota->read(null, $id);
		}
		$selecoes = $this->Cota->Selecao->find('list');
		$this->set(compact('selecoes'));
	}

	public function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for cota', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Cota->delete($id)) {
			$this->Session->setFlash(__('Cota deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Cota was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

}