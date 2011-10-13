<?php
/* EstadoCivil Test cases generated on: 2011-10-13 11:11:58 : 1318515118*/
App::import('Model', 'EstadoCivil');

class EstadoCivilTestCase extends CakeTestCase {
	var $fixtures = array('app.estado_civil', 'app.candidato');

	function startTest() {
		$this->EstadoCivil =& ClassRegistry::init('EstadoCivil');
	}

	function endTest() {
		unset($this->EstadoCivil);
		ClassRegistry::flush();
	}

}
