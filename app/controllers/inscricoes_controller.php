<?php
class InscricoesController extends AppController {

	public $name = 'Inscricoes';

	public $paginate = array(
		'contain' => array(
			'Candidato',
			'Selecao',
			'LocalProva',
			'Nota' => array(
				'Prova'
			),
		)
	);

	public function index() {
		$this->Inscricao->recursive = 0;
		$this->set('provas', $this->Inscricao->Nota->Prova->find('list'));
		$this->set('inscricoes', $this->paginate());
	}

	public function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid inscricao', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('inscricao', $this->Inscricao->read(null, $id));
	}

	public function add() {
		if (!empty($this->data)) {
			$this->Inscricao->create();
			if ($this->Inscricao->save($this->data)) {
				$this->Session->setFlash(__('The inscricao has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inscricao could not be saved. Please, try again.', true));
			}
		}
		$candidatos = $this->Inscricao->Candidato->find('list');
		$selecoes = $this->Inscricao->Selecao->find('list');
		$localProvas = $this->Inscricao->LocalProva->find('list');
		$this->set(compact('candidatos', 'selecoes', 'localProvas'));
	}

	public function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid inscricao', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Inscricao->save($this->data)) {
				$this->Session->setFlash(__('The inscricao has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inscricao could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Inscricao->read(null, $id);
		}
		$candidatos = $this->Inscricao->Candidato->find('list');
		$selecoes = $this->Inscricao->Selecao->find('list');
		$localProvas = $this->Inscricao->LocalProva->find('list');
		$this->set(compact('candidatos', 'selecoes', 'localProvas'));
	}

	public function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for inscricao', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Inscricao->delete($id)) {
			$this->Session->setFlash(__('Inscricao deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Inscricao was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	public function candidato_inscrever($processo_seletivo_id = null, $selecao_id = null) {
		if (!empty($this->data)) {
			$this->Inscricao->create();
			if ($this->Inscricao->save($this->data)) {
				$this->Session->setFlash(__('Inscrição realizada com sucesso', true));
				$this->redirect(array('controller' => 'processo_seletivos', 'action' => 'listar'));
			} else {
				$this->Session->setFlash(__('A inscrição não pôde ser realizada. Tente novamente.', true));
			}
		}
		$candidatos = $this->Inscricao->Candidato->find('list');
//		$selecoes = $this->Inscricao->Selecao->find('list', array('conditions' => array('Selecao.processo_seletivo_id' => $processo_seletivo_id)));
//		$localProvas = $this->Inscricao->LocalProva->find('list');
		$this->set(compact('candidatos', 'selecoes', 'selecao_id'));
	}

}