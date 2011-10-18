<?php
/* Lista Test cases generated on: 2011-10-13 11:24:29 : 1318515869*/
App::import('Model', 'Lista');

class ListaTestCase extends CakeTestCase {
	var $fixtures = array('app.lista', 'app.classificacao', 'app.classificacoes_lista');

	function startTest() {
		$this->Lista =& ClassRegistry::init('Lista');
	}

	function endTest() {
		unset($this->Lista);
		ClassRegistry::flush();
	}

}
