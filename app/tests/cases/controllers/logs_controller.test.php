<?php
/* Logs Test cases generated on: 2011-10-13 11:27:57 : 1318516077*/
App::import('Controller', 'Logs');

class TestLogsController extends LogsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class LogsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.log');

	function startTest() {
		$this->Logs =& new TestLogsController();
		$this->Logs->constructClasses();
	}

	function endTest() {
		unset($this->Logs);
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
