<?php
/**
 * CampusController
 *
 * PHP version 5
 *
 * @author      Vitor Pacheco    <vitor.pacheco@ifbaiano.edu.br>
 * @package     Controller
 * @property    Campus           $Campus
 */
class CampusController extends AppController {

	public $name = 'Campus';

	public function admin_index() {
		$this->Campus->recursive = 0;
		$this->set('campus', $this->paginate());
	}

	public function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid campus', true), 'flash');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('campus', $this->Campus->read(null, $id));
	}

	public function admin_add() {
		if (!empty($this->data)) {
			$this->Campus->create();
			if ($this->Campus->save($this->data)) {
				$this->Session->setFlash(__('The campus has been saved', true), 'flash');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The campus could not be saved. Please, try again.', true), 'flash');
			}
		}
	}

	public function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid campus', true), 'flash');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Campus->save($this->data)) {
				$this->Session->setFlash(__('The campus has been saved', true), 'flash');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The campus could not be saved. Please, try again.', true), 'flash');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Campus->read(null, $id);
		}
	}

	public function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for campus', true), 'flash');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Campus->delete($id)) {
			$this->Session->setFlash(__('Campus deleted', true), 'flash');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Campus was not deleted', true), 'flash');
		$this->redirect(array('action' => 'index'));
	}

}
