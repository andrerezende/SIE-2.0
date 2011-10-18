<?php
/* UnidadeFederativa Test cases generated on: 2011-10-13 11:19:05 : 1318515545*/
App::import('Model', 'UnidadeFederativa');

class UnidadeFederativaTestCase extends CakeTestCase {
	var $fixtures = array('app.unidade_federativa', 'app.pais', 'app.municipio', 'app.candidato');

	function startTest() {
		$this->UnidadeFederativa =& ClassRegistry::init('UnidadeFederativa');
	}

	function endTest() {
		unset($this->UnidadeFederativa);
		ClassRegistry::flush();
	}

}
