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
//			'debug' => true,
			'orientation' => 'landscape',
		),
	);

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
		$paises = $this->Candidato->Pai->find('list');
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
}