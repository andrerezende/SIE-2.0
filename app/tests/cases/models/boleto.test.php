<?php
/* Boleto Test cases generated on: 2011-12-15 01:11:37 : 1323918697*/
App::import('Model', 'Boleto');

class BoletoTestCase extends CakeTestCase {
	var $fixtures = array('app.boleto');

	function startTest() {
		$this->Boleto =& ClassRegistry::init('Boleto');
	}

	function endTest() {
		unset($this->Boleto);
		ClassRegistry::flush();
	}

}
