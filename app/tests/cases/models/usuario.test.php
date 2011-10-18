<?php
/* Usuario Test cases generated on: 2011-10-13 11:23:56 : 1318515836*/
App::import('Model', 'Usuario');

class UsuarioTestCase extends CakeTestCase {
	var $fixtures = array('app.usuario', 'app.grupo');

	function startTest() {
		$this->Usuario =& ClassRegistry::init('Usuario');
	}

	function endTest() {
		unset($this->Usuario);
		ClassRegistry::flush();
	}

}
