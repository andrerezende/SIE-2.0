<?php
class Edital extends AppModel {
	var $name = 'Edital';
	var $useTable = 'edital';
	var $displayField = 'descricao';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'ProcessoSeletivo' => array(
			'className' => 'ProcessoSeletivo',
			'foreignKey' => 'edital_id',
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
