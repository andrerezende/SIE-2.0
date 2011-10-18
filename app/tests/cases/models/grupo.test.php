<?php
/* Grupo Test cases generated on: 2011-10-13 11:12:02 : 1318515122*/
App::import('Model', 'Grupo');

class GrupoTestCase extends CakeTestCase {
	var $fixtures = array('app.grupo', 'app.usuario');

	function startTest() {
		$this->Grupo =& ClassRegistry::init('Grupo');
	}

	function endTest() {
		unset($this->Grupo);
		ClassRegistry::flush();
	}

}
