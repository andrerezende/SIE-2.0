<?php
class SelecaoLocalProva extends AppModel {

	public $name = 'SelecaoLocalProva';
	public $useTable = 'selecao_local_prova';
	public $displayField = 'id';

	public $belongsTo = array(
		'Selecao' => array(
			'className' => 'Selecao',
			'foreignKey' => 'selecao_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
		),
		'LocalProva' => array(
			'className' => 'LocalProva',
			'foreignKey' => 'local_prova_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
		)
	);

}
