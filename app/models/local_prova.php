<?php
class LocalProva extends AppModel {
	var $name = 'LocalProva';
	var $useTable = 'local_prova';
	var $displayField = 'descricao';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'Selecao' => array(
			'className' => 'Selecao',
			'joinTable' => 'selecao_local_prova',
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
