<?php
class Candidato extends AppModel {

	public $name = 'Candidato';
	public $useTable = 'candidato';
	public $displayField = 'nome';
	public $actsAs = array(
		'CakePtbr.AjusteData' => array('data_nascimento', 'data_expedicao'),
	);
	public $validate = array(
		'nome' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cpf' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'rg' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'endereco' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'bairro' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'unidade_federativa_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'municipio_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'pais_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'naturalidade_municipio_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'naturalidade_unidade_federativa_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'orgao_expedidor_unidade_federativa_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'sexo_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'orgao_expedidor' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nacionalidade_pais_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cep' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'telefone' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'celular' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'necessidade_especial_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'estado_civil_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'Digite um e-mail válido',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	public $hasOne = array(
		'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'candidato_id',
		)
	);

	public $belongsTo = array(
		'UnidadeFederativa' => array(
			'className' => 'UnidadeFederativa',
			'foreignKey' => 'unidade_federativa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Municipio' => array(
			'className' => 'Municipio',
			'foreignKey' => 'municipio_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Pais' => array(
			'className' => 'Pais',
			'foreignKey' => 'pais_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'NaturalidadeMunicipio' => array(
			'className' => 'Municipio',
			'foreignKey' => 'naturalidade_municipio_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'NaturalidadeUF' => array(
			'className' => 'UnidadeFederativa',
			'foreignKey' => 'naturalidade_unidade_federativa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'OrgaoExpedidorUnidadeFederativa' => array(
			'className' => 'UnidadeFederativa',
			'foreignKey' => 'orgao_expedidor_unidade_federativa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Sexo' => array(
			'className' => 'Sexo',
			'foreignKey' => 'sexo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'NacionalidadePais' => array(
			'className' => 'Pais',
			'foreignKey' => 'nacionalidade_pais_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'NecessidadeEspecial' => array(
			'className' => 'NecessidadeEspecial',
			'foreignKey' => 'necessidade_especial_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EstadoCivil' => array(
			'className' => 'EstadoCivil',
			'foreignKey' => 'estado_civil_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public $hasMany = array(
		'Inscricao' => array(
			'className' => 'Inscricao',
			'foreignKey' => 'candidato_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

	protected function _removeMascaras() {
		if (isset($this->data['Candidato']['cep'])) {
			$this->data['Candidato']['cep'] = $this->_removeMascaraCep($this->data['Candidato']['cep']);
		}
		if (isset($this->data['Candidato']['telefone'])) {
			$this->data['Candidato']['telefone'] = $this->_removeMascaraTel($this->data['Candidato']['telefone']);
		}
		if (isset($this->data['Candidato']['celular'])) {
			$this->data['Candidato']['celular'] = $this->_removeMascaraTel($this->data['Candidato']['celular']);
		}
	}

	protected function _removeMascaraCep($cep) {
		return str_replace('-', '', $cep);
	}

	protected function _removeMascaraTel($telefone) {
		return str_replace(array('(', ')', '-', ' '), '', $telefone);
	}

	public function afterFind($results, $primary = false) {
		if (array_key_exists(0, $results)) {
			foreach ($results as &$candidato) {
				if (isset($candidato[$this->name]) && !empty($candidato[$this->name])) {
					foreach ($candidato[$this->name] as $key => $field) {
						if (isset($candidato[$this->name][$key]) && preg_match('/\d{2,4}\-\d{1,2}\-\d{1,2}/', $candidato[$this->name][$key])) {
							list($year, $month, $day) = explode('-', $candidato[$this->name][$key]);
							if (strlen($year) == 2) {
								if ($year > 50) {
									$year += 1900;
								} else {
									$year += 2000;
								}
							}
							$candidato[$this->name][$key] = "$day/$month/$year";
						}
					}
				}
			}
		}
		return $results;
	}

}
