<?php
/* Grupos Test cases generated on: 2011-09-27 13:53:09 : 1317142389*/
App::import('Controller', 'Grupos');

class TestGruposController extends GruposController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class GruposControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.grupo', 'app.usuario');

	function startTest() {
		$this->Grupos =& new TestGruposController();
		$this->Grupos->constructClasses();
	}

	function endTest() {
		unset($this->Grupos);
		ClassRegistry::flush();
	}

}
