<?php
/**
 * Controller da aplicação.
 *
 * Adicione seus métodos nesta classe, e seus controllers vão herdá-los.
 *
 * @package       cake
 * @subpackage    cake.app.controllers
 *
 * @property UnidadeFederativa $UnidadeFederativa
 */
class UnidadeFederativasController extends AppController {

	public $name = 'UnidadeFederativas';

	public function index() {
		$this->UnidadeFederativa->recursive = 0;
		$this->set('unidadeFederativas', $this->paginate());
	}

	public function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid unidade federativa', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('unidadeFederativa', $this->UnidadeFederativa->read(null, $id));
	}

	public function add() {
		if (!empty($this->data)) {
			$this->UnidadeFederativa->create();
			if ($this->UnidadeFederativa->save($this->data)) {
				$this->Session->setFlash(__('The unidade federativa has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The unidade federativa could not be saved. Please, try again.', true));
			}
		}
		$paises = $this->UnidadeFederativa->Pai->find('list');
		$this->set(compact('paises'));
	}

	public function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid unidade federativa', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->UnidadeFederativa->save($this->data)) {
				$this->Session->setFlash(__('The unidade federativa has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The unidade federativa could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->UnidadeFederativa->read(null, $id);
		}
		$paises = $this->UnidadeFederativa->Pai->find('list');
		$this->set(compact('paises'));
	}

	public function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for unidade federativa', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->UnidadeFederativa->delete($id)) {
			$this->Session->setFlash(__('Unidade federativa deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Unidade federativa was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

}