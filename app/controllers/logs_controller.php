<?php
/**
 * LogsController
 *
 * PHP version 5
 *
 * @author      Vitor Pacheco    <vitor.pacheco@ifbaiano.edu.br>
 * @package     Controller
 * @property    Log              $Log
 */
class LogsController extends AppController {

	public $name = 'Logs';

	public function admin_index() {
		$this->Log->recursive = 0;
		$this->set('logs', $this->paginate());
	}

	public function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid log', true), 'flash');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('log', $this->Log->read(null, $id));
	}

	public function admin_add() {
		if (!empty($this->data)) {
			$this->Log->create();
			if ($this->Log->save($this->data)) {
				$this->Session->setFlash(__('The log has been saved', true), 'flash');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The log could not be saved. Please, try again.', true), 'flash');
			}
		}
	}

	public function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid log', true), 'flash');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Log->save($this->data)) {
				$this->Session->setFlash(__('The log has been saved', true), 'flash');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The log could not be saved. Please, try again.', true), 'flash');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Log->read(null, $id);
		}
	}

	public function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for log', true), 'flash');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Log->delete($id)) {
			$this->Session->setFlash(__('Log deleted', true), 'flash');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Log was not deleted', true), 'flash');
		$this->redirect(array('action' => 'index'));
	}

}
