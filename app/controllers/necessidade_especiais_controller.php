<?php
class NecessidadeEspeciaisController extends AppController {

	public $name = 'NecessidadeEspeciais';

	public function admin_index() {
		$this->NecessidadeEspecial->recursive = 0;
		$this->set('necessidadeEspeciais', $this->paginate());
	}

	public function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid necessidade especial', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('necessidadeEspecial', $this->NecessidadeEspecial->read(null, $id));
	}

	public function admin_add() {
		if (!empty($this->data)) {
			$this->NecessidadeEspecial->create();
			if ($this->NecessidadeEspecial->save($this->data)) {
				$this->Session->setFlash(__('The necessidade especial has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The necessidade especial could not be saved. Please, try again.', true));
			}
		}
	}

	public function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid necessidade especial', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->NecessidadeEspecial->save($this->data)) {
				$this->Session->setFlash(__('The necessidade especial has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The necessidade especial could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->NecessidadeEspecial->read(null, $id);
		}
	}

	public function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for necessidade especial', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->NecessidadeEspecial->delete($id)) {
			$this->Session->setFlash(__('Necessidade especial deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Necessidade especial was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
