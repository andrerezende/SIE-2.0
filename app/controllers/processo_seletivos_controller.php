<?php
class ProcessoSeletivosController extends AppController {

	var $name = 'ProcessoSeletivos';

	function index() {
		$this->ProcessoSeletivo->recursive = 0;
		$this->set('processoSeletivos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid processo seletivo', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('processoSeletivo', $this->ProcessoSeletivo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ProcessoSeletivo->create();
			if ($this->ProcessoSeletivo->save($this->data)) {
				$this->Session->setFlash(__('The processo seletivo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The processo seletivo could not be saved. Please, try again.', true));
			}
		}
		$editais = $this->ProcessoSeletivo->Edital->find('list');
		$this->set(compact('editais'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid processo seletivo', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ProcessoSeletivo->save($this->data)) {
				$this->Session->setFlash(__('The processo seletivo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The processo seletivo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ProcessoSeletivo->read(null, $id);
		}
		$editais = $this->ProcessoSeletivo->Edital->find('list');
		$this->set(compact('editais'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for processo seletivo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ProcessoSeletivo->delete($id)) {
			$this->Session->setFlash(__('Processo seletivo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Processo seletivo was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
