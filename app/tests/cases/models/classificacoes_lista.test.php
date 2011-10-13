<?php
/* ClassificacoesLista Test cases generated on: 2011-10-13 11:12:06 : 1318515126*/
App::import('Model', 'ClassificacoesLista');

class ClassificacoesListaTestCase extends CakeTestCase {
	var $fixtures = array('app.classificacoes_lista', 'app.classificacao', 'app.lista');

	function startTest() {
		$this->ClassificacoesLista =& ClassRegistry::init('ClassificacoesLista');
	}

	function endTest() {
		unset($this->ClassificacoesLista);
		ClassRegistry::flush();
	}

}
