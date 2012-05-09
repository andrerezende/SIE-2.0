<?php
/**
 * PaisesController
 *
 * PHP version 5
 *
 * @author      Vitor Pacheco    <vitor.pacheco@ifbaiano.edu.br>
 * @package     Controller
 * @property    Pais             $Pais
 */
class PaisesController extends AppController {

	public $name = 'Paises';

	public $uses = array('Pais');

	public function admin_index() {
		$this->Pais->recursive = 0;
		$this->set('paises', $this->paginate());
	}

	public function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid pais', true), 'flash');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('pais', $this->Pais->read(null, $id));
	}

	public function admin_add() {
		if (!empty($this->data)) {
			$this->Pais->create();
			if ($this->Pais->save($this->data)) {
				$this->Session->setFlash(__('The pais has been saved', true), 'flash');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pais could not be saved. Please, try again.', true), 'flash');
			}
		}
	}

	public function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid pais', true), 'flash');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Pais->save($this->data)) {
				$this->Session->setFlash(__('The pais has been saved', true), 'flash');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pais could not be saved. Please, try again.', true), 'flash');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Pais->read(null, $id);
		}
	}

	public function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for pais', true), 'flash');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Pais->delete($id)) {
			$this->Session->setFlash(__('Pais deleted', true), 'flash');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Pais was not deleted', true), 'flash');
		$this->redirect(array('action' => 'index'));
	}

}
