<?php
class NecessidadeEspecial extends AppModel {
	var $name = 'NecessidadeEspecial';
	var $useTable = 'necessidade_especial';
	var $displayField = 'descricao';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Candidato' => array(
			'className' => 'Candidato',
			'foreignKey' => 'necessidade_especial_id',
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
