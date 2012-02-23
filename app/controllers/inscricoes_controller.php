<?php
/**
 * InscricoesController
 *
 * @property Inscricao $Inscricao
 */
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
					'Prova',
					'order' => array('Nota.prova_id'),
				),
			),
		);
		$provas = $this->Inscricao->Nota->Prova->find('list');
		$processoSeletivos = $this->Inscricao->Selecao->ProcessoSeletivo->find('list');
		$inscricoes = $this->paginate();
		$this->set(compact('inscricoes', 'processoSeletivos', 'provas'));
	}

	public function admin_classificacoes() {
		$selecoes = $this->Inscricao->Selecao->find('all', array('contain' => array('ProcessoSeletivo', 'Campus', 'Curso'), 'order' => array('ProcessoSeletivo.id')));
		$this->set(compact('selecoes'));
	}

	public function admin_lista_por_notas($selecao_id = null, $processo_seletivo_id = null) {
		$this->_CriterioDesempate($selecao_id, $processo_seletivo_id);
		$this->Prg->commonProcess();
		$this->Inscricao->recursive = 0;
		$conditionsSelecao = array();
		if (isset($this->passedArgs['processo_seletivo'])) {
			$conditionsSelecao = array('Selecao.processo_seletivo_id' => $this->passedArgs['processo_seletivo']);
		}
		$cotas = $this->__getCotas($selecao_id);
		$inscricoesCotas = $this->__getInscricoesCotas($selecao_id, $processo_seletivo_id, $cotas[0]);
		$order = $this->__getOrderCriteriosDesempate($processo_seletivo_id);
		$orderProvas = $this->__getOrderCriteriosDesempateProva($processo_seletivo_id);
		$this->paginate = array(
			'order' => $order,
			'limit' => isset($this->passedArgs['limite']) ? $this->passedArgs['limite'] : 100,
			'conditions' => array_merge($this->Inscricao->parseCriteria($this->passedArgs), array('Selecao.id' => $selecao_id, 'Selecao.processo_seletivo_id' => $processo_seletivo_id)),
			'contain' => array(
				'Candidato' => array(
					'fields' => array(
						'Candidato.id',
						'Candidato.nome',
						'Candidato.rg',
					)
				),
				'Selecao' => array(
					'conditions' => array('Selecao.processo_seletivo_id' => $processo_seletivo_id),
					'ProcessoSeletivo' => array(
						'conditions' => array('ProcessoSeletivo.id' => $processo_seletivo_id),
					),
					'Campus',
					'Curso',
				),
				'Nota' => array('Prova' => array('order' => 'Prova.id'), 'order' => array('Nota.prova_id')),
			),
		);
		$processoSeletivos = $this->Inscricao->Selecao->ProcessoSeletivo->find('list');
		$inscricoes = $this->paginate();
		$inscricoesClassificacao = array();
		$classificacoes = array();
		foreach ($inscricoes as $inscricao) {
			foreach ($inscricao['Nota'] as $nota) {
				if (isset($orderProvas[$nota['prova_id']]) || array_key_exists($nota['prova_id'], $orderProvas)) {
					$inscricoesClassificacao['id' . $nota['inscricao_id']] = $nota['valor'];
				}
			}
		}
		array_multisort($inscricoesClassificacao, SORT_DESC);
		foreach ($inscricoesClassificacao as $key => $val) {
			$classificacoes[$key] = $this->array_key_index($inscricoesClassificacao, $key) + 1;
		}
		$this->set(compact('inscricoes', 'processoSeletivos', 'criterios', 'classificacoes', 'inscricoesCotas'));
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

	public function admin_homologados_sem_isentos() {
		$this->Prg->commonProcess();
		$this->Inscricao->recursive = 0;
		$conditionsSelecao = array();
		if (isset($this->passedArgs['processo_seletivo'])) {
			$conditionsSelecao = array('Selecao.processo_seletivo_id' => $this->passedArgs['processo_seletivo']);
		}
		$this->paginate = array(
			'limit' => isset($this->passedArgs['limite']) ? $this->passedArgs['limite'] : 100,
			'conditions' => array_merge($this->Inscricao->parseCriteria($this->passedArgs), array('Inscricao.homologado' => true, 'Inscricao.isento' => false)),
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
				'Pagamento',
			),
		);
		$processoSeletivos = $this->Inscricao->Selecao->ProcessoSeletivo->find('list');
		$inscricoes = $this->paginate();
		$this->set(compact('inscricoes', 'processoSeletivos'));
	}

	public function admin_homologados_geral() {
		$this->Prg->commonProcess();
		$this->Inscricao->recursive = 0;
		$conditionsSelecao = array();
		if (isset($this->passedArgs['processo_seletivo'])) {
			$conditionsSelecao = array('Selecao.processo_seletivo_id' => $this->passedArgs['processo_seletivo']);
		}
		$this->paginate = array(
			'limit' => isset($this->passedArgs['limite']) ? $this->passedArgs['limite'] : 100,
			'conditions' => array_merge($this->Inscricao->parseCriteria($this->passedArgs), array('Inscricao.homologado' => true)),
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
				'Pagamento',
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
		$cotas = $this->Inscricao->Cota->find('list', array('conditions' => array('Cota.selecao_id' => $selecao_id)));
		$this->set(compact('cotas', 'selecoes', 'selecao_id'));
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

	protected function __getCotas($selecao_id) {
		return $this->Inscricao->Selecao->Cota->find(
			'all',
			array(
				'conditions' => array(
					'Cota.selecao_id' => $selecao_id
				),
				'contain' => array()
			)
		);
	}

	protected function __getInscricoesCotas($selecao_id, $processo_seletivo_id, $cota) {
		return $this->Inscricao->find('all', array(
			'conditions' => array_merge($this->Inscricao->parseCriteria($this->passedArgs), array('Selecao.id' => $selecao_id, 'NOT' => array('Candidato.necessidade_especial_id' => null))),
			'contain' => array(
				'Candidato' => array(
					'fields' => array(
						'Candidato.id',
						'Candidato.nome',
						'Candidato.rg',
					),
				),
				'Selecao' => array(
					'conditions' => array('Selecao.processo_seletivo_id' => $processo_seletivo_id),
					'ProcessoSeletivo' => array(
						'conditions' => array('ProcessoSeletivo.id' => $processo_seletivo_id),
						'Prova'
					),
					'Campus',
					'Curso',
				),
				'Nota' => array('Prova'),
			),
			'limit' => $cota['Cota']['quantidade'],
			'order' => array('Candidato.data_nascimento'),
		));
	}

	protected function __getOrderCriteriosDesempate($processo_seletivo_id) {
		$criterios = $this->Inscricao->Selecao->ProcessoSeletivo->getCriteriosDesempate($processo_seletivo_id);
		foreach ($criterios as $criterio) {
			$order[] = $criterio['CriterioDesempate']['campo'];
		}
		return $order;
	}

	protected function __getOrderCriteriosDesempateProva($processo_seletivo_id) {
		$criterios = $this->Inscricao->Selecao->ProcessoSeletivo->getCriteriosDesempateProva($processo_seletivo_id);
		foreach ($criterios as $criterio) {
			$order[$criterio['CriterioDesempate']['prova_id']] = $criterio['CriterioDesempate']['campo'];
		}
		return $order;
	}

	private function _CriterioDesempate($selecao_id = null, $processo_seletivo_id = null) {
//		$dbo = $this->Inscricao->getDataSource();
//		$subQuery = $dbo->buildStatement(array(
//				'fields' => array(),
//				'table' => $dbo->fullTableName($this->Inscricao),
//				'alias' => 'Inscricao2',
//				'limit' => null,
//				'offset' => null,
//				'joins' => array(),
//				'conditions' => array('Selecao.id' => $selecao_id, 'ProcessoSeletivo.id' => $processo_seletivo_id),
//				'order' => null,
//				'group' => null,
//			),
//			$this->Inscricao
//		);
//		debug($subQuery);
	}

}