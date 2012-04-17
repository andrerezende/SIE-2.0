<?php
/**
 * NotasController
 *
 * PHP version 5
 *
 * @author      Vitor Pacheco    <vitor.pacheco@ifbaiano.edu.br>
 * @package     Controller
 * @property    Nota             $Nota
 */
class NotasController extends AppController {

	public $name = 'Notas';

	public $paginate = array(
		'contain' => array(
			'Prova',
			'Inscricao',
		)
	);

	public function admin_index() {
		$this->Nota->recursive = -1;
		$this->set('notas', $this->paginate());
	}

	public function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid nota', true), 'flash');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('nota', $this->Nota->read(null, $id));
	}

	public function admin_add() {
		if (!empty($this->data)) {
			$this->Nota->create();
			if ($this->Nota->save($this->data)) {
				$this->Session->setFlash(__('The nota has been saved', true), 'flash');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nota could not be saved. Please, try again.', true), 'flash');
			}
		}
		$provas = $this->Nota->Prova->find('list');
		$inscricoes = $this->Nota->Inscricao->find('all', array('fields' => array('Inscricao.id', 'Inscricao.nome'), 'recursive' => 0), 'flash');
		$inscricoes = Set::combine($inscricoes, '{n}.Inscricao.id', '{n}.Inscricao.nome');
	
		$this->set(compact('provas', 'inscricoes'));
	}

	public function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid nota', true), 'flash');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Nota->save($this->data)) {
				$this->Session->setFlash(__('The nota has been saved', true), 'flash');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nota could not be saved. Please, try again.', true), 'flash');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Nota->read(null, $id);
		}
		$provas = $this->Nota->Prova->find('list');
		$inscricoes = $this->Nota->Inscricao->find('list');
		$this->set(compact('provas', 'inscricoes'));
	}

	public function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for nota', true), 'flash');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Nota->delete($id)) {
			$this->Session->setFlash(__('Nota deleted', true), 'flash');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Nota was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	public function ajax_update_nota() {
		Configure::write('debug', 0);
		$this->layout = 'ajax';
		$this->autoRender = false;
		if ($this->RequestHandler->isAjax()) {
			FireCake::dump('data', $this->data);
			if ($this->Nota->save($this->data)) {
				return 'success';
			} else {
				return 'failure';
			}
		}
	}

}
