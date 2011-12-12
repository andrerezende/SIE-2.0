<?php
/* LocalProvaSelecao Test cases generated on: 2011-12-09 22:51:19 : 1323478279*/
App::import('Model', 'LocalProvaSelecao');

class LocalProvaSelecaoTestCase extends CakeTestCase {
	var $fixtures = array('app.local_prova_selecao');

	function startTest() {
		$this->LocalProvaSelecao =& ClassRegistry::init('LocalProvaSelecao');
	}

	function endTest() {
		unset($this->LocalProvaSelecao);
		ClassRegistry::flush();
	}

}
