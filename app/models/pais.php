<?php
class Pais extends AppModel {

	public $name = 'Pais';
	public $useTable = 'pais';
	public $displayField = 'nome';

	public $hasMany = array(
		'UnidadeFederativa' => array(
			'className' => 'UnidadeFederativa',
			'foreignKey' => 'pais_id',
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
			'foreignKey' => 'pais_id',
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
