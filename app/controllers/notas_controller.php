<?php
class NotasController extends AppController {

	public $name = 'Notas';
	public $paginate = array(
		'contain' => array(
			'Prova',
			'Inscricao',
		)
	);

	public function index() {
		$this->Nota->recursive = -1;
		$this->set('notas', $this->paginate());
	}

	public function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid nota', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('nota', $this->Nota->read(null, $id));
	}

	public function add() {
		if (!empty($this->data)) {
			$this->Nota->create();
			if ($this->Nota->save($this->data)) {
				$this->Session->setFlash(__('The nota has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nota could not be saved. Please, try again.', true));
			}
		}
		$provas = $this->Nota->Prova->find('list');
		$inscricoes = $this->Nota->Inscricao->find('all', array('fields' => array('Inscricao.id', 'Inscricao.nome'), 'recursive' => 0));
		$inscricoes = Set::combine($inscricoes, '{n}.Inscricao.id', '{n}.Inscricao.nome');
	
		$this->set(compact('provas', 'inscricoes'));
	}

	public function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid nota', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Nota->save($this->data)) {
				$this->Session->setFlash(__('The nota has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nota could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Nota->read(null, $id);
		}
		$provas = $this->Nota->Prova->find('list');
		$inscricoes = $this->Nota->Inscricao->find('list');
		$this->set(compact('provas', 'inscricoes'));
	}

	public function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for nota', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Nota->delete($id)) {
			$this->Session->setFlash(__('Nota deleted', true));
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