<?php
/* Grupos Test cases generated on: 2011-10-13 11:27:55 : 1318516075*/
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

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
