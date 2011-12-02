<?php
/**
 * Candidatos controller.
 *
 * @property Candidato $Candidato
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

	public function index() {
		$this->Candidato->recursive = 0;
		$this->set('candidatos', $this->paginate());
	}

	public function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid candidato', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('candidato', $this->Candidato->read(null, $id));
	}

	public function add() {
		if (!empty($this->data)) {
			$this->Candidato->create();
			if ($this->Candidato->save($this->data)) {
				$this->Session->setFlash(__('The candidato has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The candidato could not be saved. Please, try again.', true));
			}
		}
		$unidadeFederativas = $this->Candidato->UnidadeFederativa->find('list');
		//$municipios = $this->Candidato->Municipio->find('list');
		$paises = $this->Candidato->Pais->find('list');
		//$naturalidadeMunicipios = $this->Candidato->NaturalidadeMunicipio->find('list');
		//$orgaoExpedidorUnidadeFederativas = $this->Candidato->OrgaoExpedidorUnidadeFederativa->find('list');
		$sexos = $this->Candidato->Sexo->find('list');
		$nacionalidadePaises = $this->Candidato->NacionalidadePais->find('list');
		$necessidadeEspeciais = $this->Candidato->NecessidadeEspecial->find('list');
		$estadoCivis = $this->Candidato->EstadoCivil->find('list');
		$this->set(compact('unidadeFederativas', 'paises', 'sexos', 'nacionalidadePaises', 'necessidadeEspeciais', 'estadoCivis'));
	}

	public function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid candidato', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Candidato->save($this->data)) {
				$this->Session->setFlash(__('The candidato has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The candidato could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Candidato->read(null, $id);
		}
		$unidadeFederativas = $this->Candidato->UnidadeFederativa->find('list');
		$municipios = $this->Candidato->Municipio->find('list');
		$paises = $this->Candidato->Pais->find('list');
		$naturalidadeMunicipios = $this->Candidato->NaturalidadeMunicipio->find('list');
		$orgaoExpedidorUnidadeFederativas = $this->Candidato->OrgaoExpedidorUnidadeFederativa->find('list');
		$sexos = $this->Candidato->Sexo->find('list');
		$nacionalidadePaises = $this->Candidato->NacionalidadePal->find('list');
		$necessidadeEspeciais = $this->Candidato->NecessidadeEspecial->find('list');
		$estadoCivis = $this->Candidato->EstadoCivil->find('list');
		$this->set(compact('unidadeFederativas', 'municipios', 'paises', 'naturalidadeMunicipios', 'orgaoExpedidorUnidadeFederativas', 'sexos', 'nacionalidadePaises', 'necessidadeEspeciais', 'estadoCivis'));
	}

	public function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for candidato', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Candidato->delete($id)) {
			$this->Session->setFlash(__('Candidato deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Candidato was not deleted', true));
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
		if (!empty($this->data)) {
			$this->Candidato->create();
			$this->data['Usuario']['login'] = $this->data['Candidato']['cpf'];
			$this->data['Usuario']['nome'] = $this->data['Candidato']['nome'];
			$this->data['Usuario']['email'] = $this->data['Candidato']['email'];
			if ($this->Candidato->save($this->data)) {
				$this->data['Usuario']['candidato_id'] = $this->Candidato->id;
				$this->data['Usuario']['grupo_id'] = 1;
				if ($this->Candidato->Usuario->save($this->data['Usuario'])) {
					$this->Session->setFlash(__('Inscrição concluída', true));
					$this->redirect('/');
				}
			} else {
				$this->Session->setFlash(__('A inscrição não pôde ser efetuada. Por favor, tente novamente.', true));
			}
		}
		$sexos = $this->Candidato->Sexo->find('list');
		$unidadeFederativas = $this->Candidato->UnidadeFederativa->find('list');
		$paises = $this->Candidato->Pais->find('list');
		$estadoCivis = $this->Candidato->EstadoCivil->find('list');
		$necessidadeEspeciais = $this->Candidato->NecessidadeEspecial->find('list');
		$this->set(compact('unidadeFederativas', 'sexos', 'paises', 'estadoCivis', 'necessidadeEspeciais'));
	}

	public function candidato_editar($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Candidato inválido', true));
			$this->redirect(array('/'));
		}
		if (!empty($this->data)) {
			if ($this->Candidato->save($this->data)) {
				$this->Session->setFlash(__('The candidato has been saved', true));
				$this->redirect(array('/'));
			} else {
				$this->Session->setFlash(__('The candidato could not be saved. Please, try again.', true));
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

	public function candidato_gerar_boleto() {
		Configure::write('debug', 0);
		$this->autoRender = false;
		$dados = array(
			'sacado' => 'Fulano de Tal',
			'endereco1' => 'Rua do Fulano de Tal, 88',
			'endereco2' => 'Curitiba/PR',
			'valor_cobrado' => 100.56,
			'pedido' => 5,
		);
		$this->BoletoBb->render($dados);
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

}