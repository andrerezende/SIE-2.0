<?php
/* Usuarios Test cases generated on: 2011-09-27 13:52:24 : 1317142344*/
App::import('Controller', 'Usuarios');

class TestUsuariosController extends UsuariosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UsuariosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.usuario', 'app.grupo');

	function startTest() {
		$this->Usuarios =& new TestUsuariosController();
		$this->Usuarios->constructClasses();
	}

	function endTest() {
		unset($this->Usuarios);
		ClassRegistry::flush();
	}

}
