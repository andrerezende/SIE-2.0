<?php
/* Pais Test cases generated on: 2011-10-13 11:24:49 : 1318515889*/
App::import('Model', 'Pais');

class PaisTestCase extends CakeTestCase {
	var $fixtures = array('app.pais', 'app.unidade_federativa', 'app.municipio', 'app.candidato');

	function startTest() {
		$this->Pais =& ClassRegistry::init('Pais');
	}

	function endTest() {
		unset($this->Pais);
		ClassRegistry::flush();
	}

}
