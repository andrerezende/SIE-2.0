<?php
/**
 * ProcessoSeletivosController
 *
 * PHP version 5
 *
 * @author      Vitor Pacheco       <vitor.pacheco@ifbaiano.edu.br>
 * @package     Controller
 * @property    ProcessoSeletivo    $ProcessoSeletivo
 */
class ProcessoSeletivosController extends AppController {

	public $name = 'ProcessoSeletivos';

	public function admin_index() {
		$this->ProcessoSeletivo->recursive = 0;
		$this->set('processoSeletivos', $this->paginate());
	}

	public function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid processo seletivo', true), 'flash');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('processoSeletivo', $this->ProcessoSeletivo->read(null, $id));
	}

	public function admin_add() {
		if (!empty($this->data)) {
			$this->ProcessoSeletivo->create();
			if ($this->ProcessoSeletivo->save($this->data)) {
				$this->Session->setFlash(__('The processo seletivo has been saved', true), 'flash');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The processo seletivo could not be saved. Please, try again.', true), 'flash');
			}
		}
		$editais = $this->ProcessoSeletivo->Edital->find('list');
		$this->set(compact('editais'));
	}

	public function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid processo seletivo', true), 'flash');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ProcessoSeletivo->save($this->data)) {
				$this->Session->setFlash(__('The processo seletivo has been saved', true), 'flash');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The processo seletivo could not be saved. Please, try again.', true), 'flash');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ProcessoSeletivo->read(null, $id);
		}
		$editais = $this->ProcessoSeletivo->Edital->find('list');
		$this->set(compact('editais'));
	}

	public function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for processo seletivo', true), 'flash');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ProcessoSeletivo->delete($id)) {
			$this->Session->setFlash(__('Processo seletivo deleted', true), 'flash');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Processo seletivo was not deleted', true), 'flash');
		$this->redirect(array('action' => 'index'));
	}

	public function candidato_listar() {
		$this->loadModel('Candidato');
		$this->paginate = array(
			'conditions' => array(
				'ProcessoSeletivo.data_inicio_inscricoes <=' => date('Y-m-d H:i:s'),
				'ProcessoSeletivo.data_fim_inscricoes >=' => date('Y-m-d H:i:s'),
				'ProcessoSeletivo.ativo_web' => 1,
			),
		);
		$processoSeletivos = $this->paginate();
		$campus = $this->ProcessoSeletivo->Selecao->Campus->find('list');
		$cursos = $this->ProcessoSeletivo->Selecao->Curso->find('list');
		$this->Candidato->Inscricao->recursive = 0;
		$inscricoes = $this->Candidato->Inscricao->find('all', array(
			'fields' => array('Inscricao.selecao_id'),
			'conditions' => array('Candidato.id' => $this->Auth->user('candidato_id'))
		));
		$inscricoes = Set::extract('/Inscricao/selecao_id', $inscricoes);
		$this->set(compact('processoSeletivos', 'campus', 'cursos', 'inscricoes'));
	}

}
