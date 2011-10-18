<?php
/* NecessidadeEspecial Test cases generated on: 2011-10-13 11:19:46 : 1318515586*/
App::import('Model', 'NecessidadeEspecial');

class NecessidadeEspecialTestCase extends CakeTestCase {
	var $fixtures = array('app.necessidade_especial', 'app.candidato');

	function startTest() {
		$this->NecessidadeEspecial =& ClassRegistry::init('NecessidadeEspecial');
	}

	function endTest() {
		unset($this->NecessidadeEspecial);
		ClassRegistry::flush();
	}

}
