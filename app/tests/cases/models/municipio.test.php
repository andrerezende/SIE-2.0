<?php
/* Municipio Test cases generated on: 2011-10-13 11:19:25 : 1318515565*/
App::import('Model', 'Municipio');

class MunicipioTestCase extends CakeTestCase {
	var $fixtures = array('app.municipio', 'app.unidade_federativa', 'app.pais', 'app.candidato');

	function startTest() {
		$this->Municipio =& ClassRegistry::init('Municipio');
	}

	function endTest() {
		unset($this->Municipio);
		ClassRegistry::flush();
	}

}
