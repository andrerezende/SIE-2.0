<?php
class ProcessoSeletivo extends AppModel {

	public $name = 'ProcessoSeletivo';
	public $useTable = 'processo_seletivo';
	public $displayField = 'id';

	public $belongsTo = array(
		'Edital' => array(
			'className' => 'Edital',
			'foreignKey' => 'edital_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public $hasMany = array(
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
