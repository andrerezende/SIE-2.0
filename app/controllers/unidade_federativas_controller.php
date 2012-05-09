<?php
/**
 * UnidadeFederativasController
 *
 * PHP version 5
 *
 * @author      Vitor Pacheco        <vitor.pacheco@ifbaiano.edu.br>
 * @package     Controller
 * @property    UnidadeFederativa    $UnidadeFederativa
 */
class UnidadeFederativasController extends AppController {

	public $name = 'UnidadeFederativas';

	public function admin_index() {
		$this->UnidadeFederativa->recursive = 0;
		$this->set('unidadeFederativas', $this->paginate());
	}

	public function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid unidade federativa', true), 'flash');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('unidadeFederativa', $this->UnidadeFederativa->read(null, $id));
	}

	public function admin_add() {
		if (!empty($this->data)) {
			$this->UnidadeFederativa->create();
			if ($this->UnidadeFederativa->save($this->data)) {
				$this->Session->setFlash(__('The unidade federativa has been saved', true), 'flash');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The unidade federativa could not be saved. Please, try again.', true), 'flash');
			}
		}
		$paises = $this->UnidadeFederativa->Pai->find('list');
		$this->set(compact('paises'));
	}

	public function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid unidade federativa', true), 'flash');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->UnidadeFederativa->save($this->data)) {
				$this->Session->setFlash(__('The unidade federativa has been saved', true), 'flash');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The unidade federativa could not be saved. Please, try again.', true), 'flash');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->UnidadeFederativa->read(null, $id);
		}
		$paises = $this->UnidadeFederativa->Pai->find('list');
		$this->set(compact('paises'));
	}

	public function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for unidade federativa', true), 'flash');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->UnidadeFederativa->delete($id)) {
			$this->Session->setFlash(__('Unidade federativa deleted', true), 'flash');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Unidade federativa was not deleted', true), 'flash');
		$this->redirect(array('action' => 'index'));
	}

}
