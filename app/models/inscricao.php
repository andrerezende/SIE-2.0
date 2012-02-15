<?php
/**
 * Inscricao
 *
 * @property Candidato $Candidato
 * @property Selecao $Selecao
 * @property LocalProva $LocalProva
 * @property Cota $Cota
 * @property Nota $Nota
 * @property Classificacao $Classificacao
 * @property Pagamento $Pagamento
 */
class Inscricao extends AppModel {

	/**
	 * Nome do model
	 *
	 * @access public
	 * @var string
	 */
	public $name = 'Inscricao';

	/**
	 * Tabela do model
	 *
	 * @access public
	 * @var string
	 */
	public $useTable = 'inscricao';

	/**
	 * Campo de exibição
	 *
	 * @access public
	 * @var string
	 */
	public $displayField = 'id';

	/**
	 * Relacionamentos belongsTo
	 *
	 * @access public
	 * @var array
	 */
	public $belongsTo = array(
		'Candidato' => array(
			'className' => 'Candidato',
			'foreignKey' => 'candidato_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Selecao' => array(
			'className' => 'Selecao',
			'foreignKey' => 'selecao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'LocalProva' => array(
			'className' => 'LocalProva',
			'foreignKey' => 'local_prova_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Cota' => array(
			'className' => 'Cota',
			'foreignKey' => 'cota_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
	);

	/**
	 * Relacionamentos hasMany
	 *
	 * @access public
	 * @var array
	 */
	public $hasMany = array(
		'Nota' => array(
			'className' => 'Nota',
			'foreignKey' => 'inscricao_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Classificacao' => array(
			'className' => 'Classificacao',
			'foreignKey' => 'inscricao_id',
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

	/**
	 * Relacionamentos hasOne
	 *
	 * @access public
	 * @var array
	 */
	public $hasOne = array(
		'Pagamento' => array(
			'className' => 'Pagamento',
			'foreignKey' => 'inscricao_id',
			'fields' => '',
			'conditionas' => '',
			'order' => '',
			'dependent' => true,
		),
	);

	/**
	 * Configurações do behavior Search.Searchable
	 *
	 * @access public
	 * @var array
	 */
	public $filterArgs = array(
		array('name' => 'nome', 'type' => 'query', 'method' => 'iLikeCondition'),
	);

	/**
	 * iLikeCondition
	 *
	 * Cria condição utilizando o 'ILIKE' do PostgreSQL
	 *
	 * @access public
	 * @param array $data
	 * @return array
	 */
	public function iLikeCondition(array $data = array()) {
		$filter = $data['nome'];
		$cond = array(
			'AND' => array(
				'Candidato.nome ILIKE' => '%' . $filter . '%',
			),
		);
		return $cond;
	}

}