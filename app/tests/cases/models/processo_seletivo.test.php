<?php
/* ProcessoSeletivo Test cases generated on: 2011-10-13 11:25:13 : 1318515913*/
App::import('Model', 'ProcessoSeletivo');

class ProcessoSeletivoTestCase extends CakeTestCase {
	var $fixtures = array('app.processo_seletivo', 'app.edital', 'app.selecao', 'app.campus', 'app.curso', 'app.cota', 'app.classificacao', 'app.inscricao', 'app.local_prova', 'app.local_provas_selecao');

	function startTest() {
		$this->ProcessoSeletivo =& ClassRegistry::init('ProcessoSeletivo');
	}

	function endTest() {
		unset($this->ProcessoSeletivo);
		ClassRegistry::flush();
	}

}
