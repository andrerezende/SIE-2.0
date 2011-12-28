<?php
class GruposController extends AppController {

	public $name = 'Grupos';

	public function admin_index() {
		$this->Grupo->recursive = 0;
		$this->set('grupos', $this->paginate());
	}

	public function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid grupo', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('grupo', $this->Grupo->read(null, $id));
	}

	public function admin_add() {
		if (!empty($this->data)) {
			$this->Grupo->create();
			if ($this->Grupo->save($this->data)) {
				$this->Session->setFlash(__('The grupo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grupo could not be saved. Please, try again.', true));
			}
		}
	}

	public function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid grupo', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Grupo->save($this->data)) {
				$this->Session->setFlash(__('The grupo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grupo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Grupo->read(null, $id);
		}
	}

	public function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for grupo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Grupo->delete($id)) {
			$this->Session->setFlash(__('Grupo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Grupo was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

}