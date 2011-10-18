<?php
class LocalProva extends AppModel {

	public $name = 'LocalProva';
	public $useTable = 'local_prova';

	public $hasAndBelongsToMany = array(
		'Selecao' => array(
			'className' => 'Selecao',
			'joinTable' => 'local_prova_selecao',
			'foreignKey' => 'local_prova_id',
			'associationForeignKey' => 'selecao_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
