<?php
/**
 * MunicipiosController
 *
 * PHP version 5
 *
 * @author      Vitor Pacheco    <vitor.pacheco@ifbaiano.edu.br>
 * @package     Controller
 * @property    Municipio        $Municipio
 */
class MunicipiosController extends AppController {

	public $name = 'Municipios';

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('ajax_get_municipios');
	}

	public function admin_index() {
		$this->Municipio->recursive = 0;
		$this->set('municipios', $this->paginate());
	}

	public function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid municipio', true), 'flash');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('municipio', $this->Municipio->read(null, $id));
	}

	public function admin_add() {
		if (!empty($this->data)) {
			$this->Municipio->create();
			if ($this->Municipio->save($this->data)) {
				$this->Session->setFlash(__('The municipio has been saved', true), 'flash');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The municipio could not be saved. Please, try again.', true), 'flash');
			}
		}
		$unidadeFederativas = $this->Municipio->UnidadeFederativa->find('list');
		$this->set(compact('unidadeFederativas'));
	}

	public function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid municipio', true), 'flash');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Municipio->save($this->data)) {
				$this->Session->setFlash(__('The municipio has been saved', true), 'flash');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The municipio could not be saved. Please, try again.', true), 'flash');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Municipio->read(null, $id);
		}
		$unidadeFederativas = $this->Municipio->UnidadeFederativa->find('list');
		$this->set(compact('unidadeFederativas'));
	}

	public function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for municipio', true), 'flash');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Municipio->delete($id)) {
			$this->Session->setFlash(__('Municipio deleted', true), 'flash');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Municipio was not deleted', true), 'flash');
		$this->redirect(array('action' => 'index'));
	}

	public function ajax_get_municipios() {
		Configure::write('debug', 0);
		$this->layout = 'ajax';
		if ($this->RequestHandler->isAjax()) {
			FireCake::dump('data', $this->data);
			$this->Municipio->contain();
			$municipios = $this->Municipio->find('list', array('conditions' => array('unidade_federativa_id' => $this->data['Candidato']['unidade_federativa_id'])));
			FireCake::dump('minucipios', $municipios);
			$this->set(compact('municipios'));
		}
	}

}
