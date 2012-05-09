<?php
/**
 * SelecoesController
 *
 * PHP version 5
 *
 * @author      Vitor Pacheco    <vitor.pacheco@ifbaiano.edu.br>
 * @package     Controller
 * @property    Selecao          $Selecao
 */
class SelecoesController extends AppController {

	public $name = 'Selecoes';

	public function admin_index() {
		$this->Selecao->recursive = 0;
		$this->set('selecoes', $this->paginate());
	}

	public function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash('Seleção inválida', 'flash', array('class' => 'error'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('selecao', $this->Selecao->read(null, $id));
	}

	public function admin_add($processo_seletivo_id = null) {
		if (!empty($this->data)) {
			$this->Selecao->create();
			if ($this->Selecao->save($this->data)) {
				$this->Session->setFlash('Seleção salva', 'flash', array('class' => 'success'));
				$this->redirect(array('controller' => 'boletos', 'action' => 'add', $this->Selecao->id));
			} else {
				$this->Session->setFlash('Não foi possível salvar, tente novamente.', 'flash', array('class' => 'error'));
			}
		}
		$campus = $this->Selecao->Campus->find('list');
		$cursos = $this->Selecao->Curso->find('list');
		$processoSeletivos = $this->Selecao->ProcessoSeletivo->find('list');
		$localProvas = $this->Selecao->LocalProva->find('list');
		$this->set(compact('campus', 'cursos', 'processoSeletivos', 'localProvas', 'processo_seletivo_id'));
	}

	public function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Seleção inválida', 'flash', array('class' => 'error'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Selecao->save($this->data)) {
				$this->Session->setFlash('Seleção atualizada', 'flash', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Não foi possível salvar, tente novamente.', 'flash', array('class' => 'error'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Selecao->read(null, $id);
		}
		$campus = $this->Selecao->Campus->find('list');
		$cursos = $this->Selecao->Curso->find('list');
		$processoSeletivos = $this->Selecao->ProcessoSeletivo->find('list');
		$localProvas = $this->Selecao->LocalProva->find('list');
		$this->set(compact('campus', 'cursos', 'processoSeletivos', 'localProvas'));
	}

	public function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('Seleção inválida', 'flash', array('class' => 'error'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Selecao->delete($id)) {
			$this->Session->setFlash('Seleção excluída', 'flash', array('class' => 'success'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash('Seleção não foi excluída', 'flash', array('class' => 'error'));
		$this->redirect(array('action' => 'index'));
	}

}
