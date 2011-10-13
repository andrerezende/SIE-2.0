<?php
/* Sexo Test cases generated on: 2011-10-13 11:23:36 : 1318515816*/
App::import('Model', 'Sexo');

class SexoTestCase extends CakeTestCase {
	var $fixtures = array('app.sexo', 'app.candidato');

	function startTest() {
		$this->Sexo =& ClassRegistry::init('Sexo');
	}

	function endTest() {
		unset($this->Sexo);
		ClassRegistry::flush();
	}

}
