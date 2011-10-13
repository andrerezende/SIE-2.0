<?php
/* Selecao Test cases generated on: 2011-10-13 11:22:53 : 1318515773*/
App::import('Model', 'Selecao');

class SelecaoTestCase extends CakeTestCase {
	var $fixtures = array('app.selecao', 'app.campus', 'app.curso', 'app.processo_seletivo', 'app.cota', 'app.classificacao', 'app.inscricao', 'app.local_prova', 'app.local_provas_selecao');

	function startTest() {
		$this->Selecao =& ClassRegistry::init('Selecao');
	}

	function endTest() {
		unset($this->Selecao);
		ClassRegistry::flush();
	}

}
