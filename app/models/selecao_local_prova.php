<?php
class SelecaoLocalProva extends AppModel {
	var $name = 'SelecaoLocalProva';
	var $useTable = 'selecao_local_prova';
	var $displayField = 'id';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Selecao' => array(
			'className' => 'Selecao',
			'foreignKey' => 'selecao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'LocalProva' => array(
			'className' => 'LocalProva',
			'foreignKey' => 'local_prova_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Selecao' => array(
			'className' => 'Selecao',
			'foreignKey' => 'selecao_local_prova_id',
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
