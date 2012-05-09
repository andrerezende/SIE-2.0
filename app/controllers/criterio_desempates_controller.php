<?php
/**
 * CriterioDesempatesController
 *
 * PHP version 5
 *
 * @author      Vitor Pacheco        <vitor.pacheco@ifbaiano.edu.br>
 * @package     Controller
 * @property    CriterioDesempate    $CriterioDesempate
 */
class CriterioDesempatesController extends AppController {

	public $name = 'CriterioDesempates';

	public $paginate = array(
		'order' => array('CriterioDesempate.id'),
	);

	public function admin_index() {
		$this->CriterioDesempate->recursive = 0;
		$this->set('criterioDesempates', $this->paginate());
	}

	public function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid criterio desempate', true), 'flash');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('criterioDesempate', $this->CriterioDesempate->read(null, $id));
	}

	public function admin_add() {
		if (!empty($this->data)) {
			$this->CriterioDesempate->create();
			if ($this->CriterioDesempate->save($this->data)) {
				$this->Session->setFlash(__('The criterio desempate has been saved', true), 'flash');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The criterio desempate could not be saved. Please, try again.', true), 'flash');
			}
		}
		$processoSeletivos = $this->CriterioDesempate->ProcessoSeletivo->find('list');
		$this->set(compact('processoSeletivos', 'provas'));
	}

	public function ajax_get_provas() {
		Configure::write('debug', 0);
		$this->layout = 'ajax';
		if ($this->RequestHandler->isAjax()) {
			$provas = $this->CriterioDesempate->ProcessoSeletivo->Prova->find('list', array('conditions' => array('processo_seletivo_id' => $this->data['processo_seletivo_id'])));
			$this->set(compact('provas'));
		}
	}

	public function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid criterio desempate', true), 'flash');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CriterioDesempate->save($this->data)) {
				$this->Session->setFlash(__('The criterio desempate has been saved', true), 'flash');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The criterio desempate could not be saved. Please, try again.', true), 'flash');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CriterioDesempate->read(null, $id);
		}
		$processoSeletivos = $this->CriterioDesempate->ProcessoSeletivo->find('list');
		$this->set(compact('processoSeletivos'));
	}

	public function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for criterio desempate', true), 'flash');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CriterioDesempate->delete($id)) {
			$this->Session->setFlash(__('Criterio desempate deleted', true), 'flash');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Criterio desempate was not deleted', true), 'flash');
		$this->redirect(array('action' => 'index'));
	}

}
