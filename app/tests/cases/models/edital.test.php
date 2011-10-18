<?php
/* Edital Test cases generated on: 2011-10-13 11:11:55 : 1318515115*/
App::import('Model', 'Edital');

class EditalTestCase extends CakeTestCase {
	var $fixtures = array('app.edital', 'app.processo_seletivo');

	function startTest() {
		$this->Edital =& ClassRegistry::init('Edital');
	}

	function endTest() {
		unset($this->Edital);
		ClassRegistry::flush();
	}

}
