<?php
/* Boletos Test cases generated on: 2011-12-15 01:11:58 : 1323918718*/
App::import('Controller', 'Boletos');

class TestBoletosController extends BoletosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class BoletosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.boleto');

	function startTest() {
		$this->Boletos =& new TestBoletosController();
		$this->Boletos->constructClasses();
	}

	function endTest() {
		unset($this->Boletos);
		ClassRegistry::flush();
	}

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}
