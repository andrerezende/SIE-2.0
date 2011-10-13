<?php
/* Campus Test cases generated on: 2011-10-13 11:24:14 : 1318515854*/
App::import('Model', 'Campus');

class CampusTestCase extends CakeTestCase {
	var $fixtures = array('app.campus', 'app.selecao', 'app.curso', 'app.processo_seletivo', 'app.cota', 'app.classificacao', 'app.inscricao', 'app.local_prova', 'app.local_provas_selecao');

	function startTest() {
		$this->Campus =& ClassRegistry::init('Campus');
	}

	function endTest() {
		unset($this->Campus);
		ClassRegistry::flush();
	}

}
