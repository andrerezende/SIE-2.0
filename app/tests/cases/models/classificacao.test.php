<?php
/* Classificacao Test cases generated on: 2011-10-13 11:27:26 : 1318516046*/
App::import('Model', 'Classificacao');

class ClassificacaoTestCase extends CakeTestCase {
	var $fixtures = array('app.classificacao', 'app.inscricao', 'app.cota', 'app.selecao', 'app.campus', 'app.curso', 'app.processo_seletivo', 'app.edital', 'app.local_prova', 'app.local_provas_selecao', 'app.lista', 'app.classificacoes_lista');

	function startTest() {
		$this->Classificacao =& ClassRegistry::init('Classificacao');
	}

	function endTest() {
		unset($this->Classificacao);
		ClassRegistry::flush();
	}

}
