<?php
class EstadoCivil extends AppModel {
	var $name = 'EstadoCivil';
	var $useTable = 'estado_civil';
	var $displayField = 'descricao';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Candidato' => array(
			'className' => 'Candidato',
			'foreignKey' => 'estado_civil_id',
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
