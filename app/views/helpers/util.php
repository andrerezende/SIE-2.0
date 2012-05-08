<?php
/**
 * UtilHelper
 *
 * PHP version 5
 *
 * @author        Vitor Pacheco    <vitor.pacheco@ifbaiano.edu.br>
 * @package       View
 * @subpackage    Helper
 */
class UtilHelper extends AppHelper {

/**
 * Lista de Helpers.
 *
 * @var array
 */
	public $helpers = array(
		'Html',
	);

/**
 * Imprime 'Sim' ou 'Não' para variáveis de valor '1' ou '0' repectivamente.
 *
 * @access public
 * @param int|boolean $field
 * @return string
 */
	public function boolean($field) {
		if ($field == 0 || $field == false) {
			return $this->Html->tag('span', 'Não', array('class' => 'label label-important'));
		} else {
			return $this->Html->tag('span', 'Sim', array('class' => 'label label-success'));
		}
	}

/**
 * imgFromBoolean
 *
 * @access public
 * @param int|boolean $field
 * @return string
 */
	public function imgFromBoolean($field, array $options) {
		$options += array('class' => 'homologacao', 'val' => (int)$field);
		if ($field == 0 || $field == false) {
			return $this->Html->image('icons' . DS . 'exclamation.png', $options);
		} else {
			return $this->Html->image('icons' . DS . 'accept.png', $options);
		}
	}

}
