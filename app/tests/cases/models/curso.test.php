<?php
/* Curso Test cases generated on: 2011-10-13 11:12:09 : 1318515129*/
App::import('Model', 'Curso');

class CursoTestCase extends CakeTestCase {
	var $fixtures = array('app.curso', 'app.selecao');

	function startTest() {
		$this->Curso =& ClassRegistry::init('Curso');
	}

	function endTest() {
		unset($this->Curso);
		ClassRegistry::flush();
	}

}
