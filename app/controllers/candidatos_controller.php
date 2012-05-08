<?php
/**
 * CandidatosController
 *
 * PHP version 5
 *
 * @author      Vitor Pacheco    <vitor.pacheco@ifbaiano.edu.br>
 * @package     Controller
 * @property    Candidato        $Candidato
 */
class CandidatosController extends AppController {

	public $name = 'Candidatos';

	public $components = array(
		'CakePdf.CakePdf' => array(
			'debug' => false,
			'orientation' => 'landscape',
		),
	);

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('cadastro');
	}

	public function admin_index() {
		$this->Candidato->recursive = 0;
		$this->set('candidatos', $this->paginate());
	}

	public function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid candidato', true), 'flash');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('candidato', $this->Candidato->read(null, $id));
	}

	public function admin_add() {
		if (!empty($this->data)) {
			$this->Candidato->create();
			if ($this->Candidato->save($this->data)) {
				$this->Session->setFlash(__('The candidato has been saved', true), 'flash');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The candidato could not be saved. Please, try again.', true), 'flash');
			}
		}
		$unidadeFederativas = $this->Candidato->UnidadeFederativa->find('list');
		$paises = $this->Candidato->Pais->find('list');
		$sexos = $this->Candidato->Sexo->find('list');
		$nacionalidadePaises = $this->Candidato->NacionalidadePais->find('list');
		$necessidadeEspeciais = $this->Candidato->NecessidadeEspecial->find('list');
		$estadoCivis = $this->Candidato->EstadoCivil->find('list');
		$this->set(compact('unidadeFederativas', 'paises', 'sexos', 'nacionalidadePaises', 'necessidadeEspeciais', 'estadoCivis'));
	}

	public function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid candidato', true), 'flash');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Candidato->save($this->data)) {
				$this->Session->setFlash(__('The candidato has been saved', true), 'flash');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The candidato could not be saved. Please, try again.', true), 'flash');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Candidato->read(null, $id);
		}
		$unidadeFederativas = $this->Candidato->UnidadeFederativa->find('list');
		$paises = $this->Candidato->Pais->find('list');
		$sexos = $this->Candidato->Sexo->find('list');
		$nacionalidadePaises = $this->Candidato->NacionalidadePais->find('list');
		$necessidadeEspeciais = $this->Candidato->NecessidadeEspecial->find('list');
		$estadoCivis = $this->Candidato->EstadoCivil->find('list');
		$this->set(compact('unidadeFederativas', 'paises', 'sexos', 'nacionalidadePaises', 'necessidadeEspeciais', 'estadoCivis'));
	}

	public function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for candidato', true), 'flash');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Candidato->delete($id)) {
			$this->Session->setFlash(__('Candidato deleted', true), 'flash');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Candidato was not deleted', true), 'flash');
		$this->redirect(array('action' => 'index'));
	}

	public function pdf_relatorio_geral() {
		$this->layout = 'pdf';
		Configure::write('debug', 0);
		$this->Candidato->recursive = -1;
		$candidatos = $this->Candidato->find('all', array(
			'contain' => array(
				'Sexo',
				'NecessidadeEspecial',
				'Inscricao' => array(
					'Selecao' => array(
						'Campus',
						'Curso',
					),
					'LocalProva',
				),
			)
		));
		$this->set(compact('candidatos'));
	}

	public function cadastro() {
		if (!$this->Auth->user()) {
			if (!empty($this->data)) {
				$this->Candidato->begin();
				$this->Candidato->create();
				$this->data['Usuario']['login'] = $this->data['Candidato']['cpf'];
				$this->data['Usuario']['nome'] = $this->data['Candidato']['nome'];
				$this->data['Usuario']['email'] = $this->data['Candidato']['email'];
				if ($this->Candidato->save($this->data)) {
					$this->data['Usuario']['candidato_id'] = $this->Candidato->id;
					$this->data['Usuario']['grupo_id'] = 1;
					if ($this->Candidato->Usuario->save($this->data['Usuario'])) {
						$this->Candidato->commit();
						$this->Session->setFlash(__('Inscrição concluída', true), 'flash');
						$this->redirect('/');
					}
				} else {
					$this->Candidato->rollback();
					$this->Session->setFlash(__('A inscrição não pôde ser efetuada. Por favor, tente novamente.', true), 'flash');
				}
			}
			$sexos = $this->Candidato->Sexo->find('list');
			$unidadeFederativas = $this->Candidato->UnidadeFederativa->find('list');
			$paises = $this->Candidato->Pais->find('list');
			$estadoCivis = $this->Candidato->EstadoCivil->find('list');
			$necessidadeEspeciais = $this->Candidato->NecessidadeEspecial->find('list');
			$this->set(compact('unidadeFederativas', 'sexos', 'paises', 'estadoCivis', 'necessidadeEspeciais'));
		} else {
			$this->redirect(array('controller' => 'inscricoes', 'action' => 'add'));
		}
	}

	public function candidato_editar($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Candidato inválido', true), 'flash');
			$this->redirect(array('/'));
		}
		if (!empty($this->data)) {
			if ($this->Candidato->save($this->data)) {
				$this->Session->setFlash(__('The candidato has been saved', true), 'flash');
				$this->redirect(array('/'));
			} else {
				$this->Session->setFlash(__('The candidato could not be saved. Please, try again.', true), 'flash');
			}
		}
		if (empty($this->data)) {
			$this->Candidato->recursive = -1;
			$this->data = $this->Candidato->read(null, $id);
		}
		$sexos = $this->Candidato->Sexo->find('list');
		$unidadeFederativas = $this->Candidato->UnidadeFederativa->find('list');
		$paises = $this->Candidato->Pais->find('list');
		$estadoCivis = $this->Candidato->EstadoCivil->find('list');
		$necessidadeEspeciais = $this->Candidato->NecessidadeEspecial->find('list');
		$municipios = $this->Candidato->Municipio->find('list', array('Municipio.unidade_federativa_id' => $this->data['Candidato']['unidade_federativa_id']));
		$naturalidadeMunicipios = $this->Candidato->Municipio->find('list', array('Municipio.unidade_federativa_id' => $this->data['Candidato']['naturalidade_unidade_federativa_id']));
		$this->set(compact('unidadeFederativas', 'sexos', 'paises', 'estadoCivis', 'necessidadeEspeciais', 'municipios', 'naturalidadeMunicipios'));
	}

	public function candidato_gerar_boleto($processoSeletivo_id = null, $selecao_id = null) {
		Configure::write('debug', 0);
		$this->autoRender = false;
		$this->Candidato->Inscricao->Selecao->Boleto->recursive = 2;
		$candidato = $this->Candidato->find('first', array(
			'contain' => array(
				'Municipio' => array(
					'UnidadeFederativa',
				),
				'Inscricao' => array(
					'conditions' => array('Inscricao.selecao_id' => $selecao_id),
					'Selecao' => array(
						'conditions' => array('Selecao.id' => $selecao_id),
						'Campus',
						'Curso',
						'ProcessoSeletivo' => array(
							'conditions' => array('ProcessoSeletivo.id' => $processoSeletivo_id),
						),
					),
					'LocalProva',
				),
			),
			'conditions' => array('Candidato.id' => $this->Auth->user('candidato_id')),
		));
		$boleto = $this->Candidato->Inscricao->Selecao->Boleto->find('first', array('conditions' => array('Selecao.id' => $selecao_id)));
		$boleto['Boleto']['sacado'] = $candidato['Candidato']['nome'];
		$boleto['Boleto']['demonstrativo1'] .= $candidato['Inscricao'][0]['Selecao']['ProcessoSeletivo']['descricao'];
		$boleto['Boleto']['demonstrativo2'] .= $candidato['Candidato']['cpf'];
		$boleto['Boleto']['demonstrativo3'] .= $candidato['Candidato']['numero_inscricao'];
		$boleto['Boleto']['endereco1'] = $candidato['Candidato']['endereco'];
		$boleto['Boleto']['endereco2'] = $candidato['Municipio']['nome'] . ' / ' . $candidato['Municipio']['UnidadeFederativa']['sigla'];
		$boleto['Boleto']['valor_cobrado'] = $boleto['Selecao']['valor_inscricao'];
		$boleto['Boleto']['instrucoes1'] .= $boleto['Selecao']['Curso']['descricao'];
		$boleto['Boleto']['instrucoes2'] .= $candidato['Inscricao'][0]['LocalProva']['descricao'];
		$boleto['Boleto']['pedido']	= $candidato['Candidato']['numero_inscricao'];
		$this->BoletoBb->render($boleto['Boleto']);
	}

	public function candidato_imprimir() {
		$this->layout = 'impressao';
		$this->Candidato->recursive = 1;
		$this->set('candidato', $this->Candidato->find('first', array('conditions' => array('Candidato.id' => $this->Auth->user('candidato_id')))));
	}

	public function candidato_imprimir_pdf() {
		Configure::write('debug', 0);
		$this->layout = 'impressao';
		$this->Candidato->recursive = 1;
		$this->set('candidato', $this->Candidato->find('first', array('conditions' => array('Candidato.id' => $this->Auth->user('candidato_id')))));
		
	}

	public function admin_lista_por_notas() {
		$this->set('candidatos', $this->Candidato->find(
			'all', array(
				'contain' => array(
					'Municipio' => array(
						'UnidadeFederativa',
					),
					'Inscricao' => array(
						'Selecao' => array(
							'Campus',
							'Curso',
							'ProcessoSeletivo'
						),
						'Nota' => array(
							'order' => array('Nota.valor'),
							'Prova',
						),
						'LocalProva',
					),
					'Sexo',
				),
//				'order' => array('Nota.valor'),
			)
		));
	}

}
