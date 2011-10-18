<?php
/* Nota Test cases generated on: 2011-10-13 11:20:07 : 1318515607*/
App::import('Model', 'Nota');

class NotaTestCase extends CakeTestCase {
	var $fixtures = array('app.nota', 'app.prova', 'app.inscricao');

	function startTest() {
		$this->Nota =& ClassRegistry::init('Nota');
	}

	function endTest() {
		unset($this->Nota);
		ClassRegistry::flush();
	}

}
