<?php
/**
 * EditaisController
 *
 * PHP version 5
 *
 * @author      Vitor Pacheco    <vitor.pacheco@ifbaiano.edu.br>
 * @package     Controller
 * @property    Edital           $Edital
 */
class EditaisController extends AppController {

	public $name = 'Editais';

	public function admin_index() {
		$this->Edital->recursive = 0;
		$this->set('editais', $this->paginate());
	}

	public function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid edital', true), 'flash');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('edital', $this->Edital->read(null, $id));
	}

	public function admin_add() {
		if (!empty($this->data)) {
			$this->Edital->create();
			if ($this->Edital->save($this->data)) {
				$this->Session->setFlash(__('The edital has been saved', true), 'flash');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The edital could not be saved. Please, try again.', true), 'flash');
			}
		}
	}

	public function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid edital', true), 'flash');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Edital->save($this->data)) {
				$this->Session->setFlash(__('The edital has been saved', true), 'flash');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The edital could not be saved. Please, try again.', true), 'flash');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Edital->read(null, $id);
		}
	}

	public function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for edital', true), 'flash');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Edital->delete($id)) {
			$this->Session->setFlash(__('Edital deleted', true), 'flash');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Edital was not deleted', true), 'flash');
		$this->redirect(array('action' => 'index'));
	}

}
