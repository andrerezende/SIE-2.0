<?php
class Grupo extends AppModel {
	var $name = 'Grupo';
	var $useTable = 'grupo';
	var $displayField = 'descricao';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'grupo_id',
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
