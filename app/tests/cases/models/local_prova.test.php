<?php
/* LocalProva Test cases generated on: 2011-10-13 11:12:13 : 1318515133*/
App::import('Model', 'LocalProva');

class LocalProvaTestCase extends CakeTestCase {
	var $fixtures = array('app.local_prova', 'app.selecao', 'app.local_provas_selecao');

	function startTest() {
		$this->LocalProva =& ClassRegistry::init('LocalProva');
	}

	function endTest() {
		unset($this->LocalProva);
		ClassRegistry::flush();
	}

}
