<?php
/* ArosAco Test cases generated on: 2011-06-28 14:25:55 : 1309263955*/
App::import('Model', 'ArosAco');

class ArosAcoTest extends CakeTestCase {
	var $fixtures = array('app.aros_aco', 'app.aro', 'app.aco');

	function startTest() {
		$this->ArosAco =& ClassRegistry::init('ArosAco');
	}

	function endTest() {
		unset($this->ArosAco);
		ClassRegistry::flush();
	}

}
