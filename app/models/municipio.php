<?php
class Municipio extends AppModel {
	var $name = 'Municipio';
	var $useTable = 'municipio';
	var $displayField = 'nome';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'UnidadeFederativa' => array(
			'className' => 'UnidadeFederativa',
			'foreignKey' => 'unidade_federativa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
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
