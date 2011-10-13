<?php
class Edital extends AppModel {

	public $name = 'Edital';
	public $useTable = 'edital';
	public $displayField = 'descricao';

	public $hasMany = array(
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
