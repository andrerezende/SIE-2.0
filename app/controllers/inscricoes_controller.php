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

	public $presetVars = array(
		array('field' => 'nome', 'type' => 'value'),
	);

	public function admin_index() {
		$this->Prg->commonProcess();
		$this->Inscricao->recursive = 0;
		$conditionsSelecao = array();
		if (isset($this->passedArgs['processo_seletivo'])) {
			$conditionsSelecao = array('Selecao.processo_seletivo_id' => $this->passedArgs['processo_seletivo']);
		}
		$this->paginate = array(
			'limit' => isset($this->passedArgs['limite']) ? $this->passedArgs['limite'] : 100,
			'conditions' => $this->Inscricao->parseCriteria($this->passedArgs),
			'contain' => array(
				'Candidato' => array(
					'fields' => array(
						'Candidato.id',
						'Candidato.nome',
						'Candidato.rg',
					)
				),
				'Selecao' => array(
					'conditions' => $conditionsSelecao,
					'ProcessoSeletivo',
					'Campus',
					'Curso'
				),
				'LocalProva',
				'Nota' => array(
					'Prova'
				),
			),
		);
		$provas = $this->Inscricao->Nota->Prova->find('list');
		$processoSeletivos = $this->Inscricao->Selecao->ProcessoSeletivo->find('list');
		$inscricoes = $this->paginate();
		$this->set(compact('inscricoes', 'processoSeletivos', 'provas'));
	}

	public function admin_isentos_homologados() {
		$this->Prg->commonProcess();
		$this->Inscricao->recursive = 0;
		$conditionsSelecao = array();
		if (isset($this->passedArgs['processo_seletivo'])) {
			$conditionsSelecao = array('Selecao.processo_seletivo_id' => $this->passedArgs['processo_seletivo']);
		}
		$this->paginate = array(
			'limit' => isset($this->passedArgs['limite']) ? $this->passedArgs['limite'] : 100,
			'conditions' => array_merge($this->Inscricao->parseCriteria($this->passedArgs), array('Inscricao.homologado' => true, 'Inscricao.isento' => true)),
			'contain' => array(
				'Candidato' => array(
					'fields' => array(
						'Candidato.id',
						'Candidato.nome',
						'Candidato.rg',
					)
				),
				'Selecao' => array(
					'conditions' => $conditionsSelecao,
					'ProcessoSeletivo',
					'Campus',
					'Curso'
				),
			),
		);
		$processoSeletivos = $this->Inscricao->Selecao->ProcessoSeletivo->find('list');
		$inscricoes = $this->paginate();
		$this->set(compact('inscricoes', 'processoSeletivos'));
	}

	public function admin_homologar_isentos() {
		if (empty($this->data)) {
			$this->data = array(
				'Inscricao' => array('limite' => 100, 'homologado' => false, 'processo_seletivo_id' => null),
			);
		}
		$this->paginate = array(
			'conditions' => array('Inscricao.isento' => true, 'Inscricao.homologado' => $this->data['Inscricao']['homologado']),
			'limit' => !$this->data['Inscricao']['limite'] ? $this->data['Inscricao']['limite'] : 100,
			'contain' => array(
				'Candidato' => array('fields' => array('Candidato.id', 'Candidato.nome')),
				'Selecao' => array(
					'conditions' => array('Selecao.processo_seletivo_id' => $this->data['Inscricao']['processo_seletivo_id']),
					'ProcessoSeletivo',
				),
			),
		);
		if (!isset($this->data['Inscricao']['homologado']) || $this->data['Inscricao']['homologado'] == null) {
			unset($this->paginate['conditions']['Inscricao.homologado']);
		}
		if (!isset($this->data['Inscricao']['processo_seletivo_id']) || $this->data['Inscricao']['processo_seletivo_id'] == null) {
			unset($this->paginate['contain']['Selecao']['conditions']);
		}
		$processoSeletivos = $this->Inscricao->Selecao->ProcessoSeletivo->find('list');
		$inscricoes = $this->paginate();
		$this->set(compact('inscricoes', 'processoSeletivos'));
	}

	public function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid inscricao', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('inscricao', $this->Inscricao->read(null, $id));
	}

	public function admin_add() {
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

	public function admin_edit($id = null) {
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

	public function admin_delete($id = null) {
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
			$this->Inscricao->begin();
			if ($this->Inscricao->save($this->data)) {
				$this->loadModel('Prova');
				$provas = $this->Prova->find('list');
				$this->Inscricao->saveField('numero_inscricao', $this->Inscricao->id);
				foreach ($provas as $id => $prova) {
					if (!$this->Inscricao->Nota->save(array('Nota' => array('prova_id' => $id, 'inscricao_id' => $this->Inscricao->id)))) {
						$this->Inscricao->rollback();
					}
					$this->Inscricao->Nota->id = null;
				}
				$this->Inscricao->commit();
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

	public function admin_lista_por_notas() {
		$this->set(
			'inscricoes',
			$this->Inscricao->Selecao->find('all', array(
				'contain' => array(
					'Campus',
					'Curso',
					'ProcessoSeletivo' => array('Prova'),
					'Inscricao' => array('Candidato', 'Nota'),
				),
				'order' => array('Campus.nome', 'Curso.descricao'),
			))
		);
	}

	public function admin_alterar_homologacao() {
		$this->autoRender = false;
		$this->layout = 'ajax';
		Configure::write('debug', 0);
		if ($this->RequestHandler->isAjax()) {
			$this->Inscricao->id = $this->data['Inscricao']['id'];
			if ($this->Inscricao->saveField('homologado', $this->data['Inscricao']['homologado'])) {
				return json_encode($this->data['Inscricao']['homologado']);
			}
			return json_encode(false);
		}
	}

}