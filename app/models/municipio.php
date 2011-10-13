<?php
class Municipio extends AppModel {

	public $name = 'Municipio';
	public $displayField = 'nome';

	public $belongsTo = array(
		'UnidadeFederativa' => array(
			'className' => 'UnidadeFederativa',
			'foreignKey' => 'unidade_federativa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public $hasMany = array(
		'Candidato' => array(
			'className' => 'Candidato',
			'foreignKey' => 'municipio_id',
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
