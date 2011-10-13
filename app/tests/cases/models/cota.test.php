<?php
/* Cota Test cases generated on: 2011-10-13 11:11:52 : 1318515112*/
App::import('Model', 'Cota');

class CotaTestCase extends CakeTestCase {
	var $fixtures = array('app.cota', 'app.selecao', 'app.classificacao');

	function startTest() {
		$this->Cota =& ClassRegistry::init('Cota');
	}

	function endTest() {
		unset($this->Cota);
		ClassRegistry::flush();
	}

}
