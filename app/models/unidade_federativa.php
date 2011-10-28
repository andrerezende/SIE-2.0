<?php
class UnidadeFederativa extends AppModel {

	public $name = 'UnidadeFederativa';
	public $useTable = 'unidade_federativa';
	public $displayField = 'sigla';

	public $belongsTo = array(
		'Pais' => array(
			'className' => 'Pais',
			'foreignKey' => 'pais_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public $hasMany = array(
		'Municipio' => array(
			'className' => 'Municipio',
			'foreignKey' => 'unidade_federativa_id',
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
		'Candidato' => array(
			'className' => 'Candidato',
			'foreignKey' => 'unidade_federativa_id',
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

}
