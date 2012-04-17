<?php
/**
 * SexosController
 *
 * PHP version 5
 *
 * @author      Vitor Pacheco    <vitor.pacheco@ifbaiano.edu.br>
 * @package     Controller
 * @property    Sexo             $Sexo
 */
class SexosController extends AppController {

	public $name = 'Sexos';

	public function admin_index() {
		$this->Sexo->recursive = 0;
		$this->set('sexos', $this->paginate());
	}

	public function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid sexo', true), 'flash');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('sexo', $this->Sexo->read(null, $id));
	}

	public function admin_add() {
		if (!empty($this->data)) {
			$this->Sexo->create();
			if ($this->Sexo->save($this->data)) {
				$this->Session->setFlash(__('The sexo has been saved', true), 'flash');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sexo could not be saved. Please, try again.', true), 'flash');
			}
		}
	}

	public function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid sexo', true), 'flash');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Sexo->save($this->data)) {
				$this->Session->setFlash(__('The sexo has been saved', true), 'flash');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sexo could not be saved. Please, try again.', true), 'flash');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Sexo->read(null, $id);
		}
	}

	public function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for sexo', true), 'flash');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Sexo->delete($id)) {
			$this->Session->setFlash(__('Sexo deleted', true), 'flash');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Sexo was not deleted', true), 'flash');
		$this->redirect(array('action' => 'index'));
	}

}
