<?php
class Prova extends AppModel {

	public $name = 'Prova';
	public $useTable = 'prova';

	public $hasMany = array(
		'Nota' => array(
			'className' => 'Nota',
			'foreignKey' => 'prova_id',
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
