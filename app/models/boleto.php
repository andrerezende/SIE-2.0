<?php
class Boleto extends AppModel {
	var $name = 'Boleto';
	var $useTable = 'boleto';
	var $displayField = 'identificacao';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Selecao' => array(
			'className' => 'Selecao',
			'foreignKey' => 'selecao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
