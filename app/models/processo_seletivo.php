<?php
class ProcessoSeletivo extends AppModel {
	var $name = 'ProcessoSeletivo';
	var $useTable = 'processo_seletivo';
	var $displayField = 'id';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Edital' => array(
			'className' => 'Edital',
			'foreignKey' => 'edital_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Selecao' => array(
			'className' => 'Selecao',
			'foreignKey' => 'processo_seletivo_id',
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
