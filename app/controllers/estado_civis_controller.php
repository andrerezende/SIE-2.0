<?php
/**
 * EstadoCivisController
 *
 * PHP version 5
 *
 * @author      Vitor Pacheco    <vitor.pacheco@ifbaiano.edu.br>
 * @package     Controller
 * @property    EstadoCivil      $EstadoCivil
 */
class EstadoCivisController extends AppController {

	public $name = 'EstadoCivis';

	public function admin_index() {
		$this->EstadoCivil->recursive = 0;
		$this->set('estadoCivis', $this->paginate());
	}

	public function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid estado civil', true), 'flash');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('estadoCivil', $this->EstadoCivil->read(null, $id));
	}

	public function admin_add() {
		if (!empty($this->data)) {
			$this->EstadoCivil->create();
			if ($this->EstadoCivil->save($this->data)) {
				$this->Session->setFlash(__('The estado civil has been saved', true), 'flash');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estado civil could not be saved. Please, try again.', true), 'flash');
			}
		}
	}

	public function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid estado civil', true), 'flash');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->EstadoCivil->save($this->data)) {
				$this->Session->setFlash(__('The estado civil has been saved', true), 'flash');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estado civil could not be saved. Please, try again.', true), 'flash');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EstadoCivil->read(null, $id);
		}
	}

	public function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for estado civil', true), 'flash');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EstadoCivil->delete($id)) {
			$this->Session->setFlash(__('Estado civil deleted', true), 'flash');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Estado civil was not deleted', true), 'flash');
		$this->redirect(array('action' => 'index'));
	}

}
