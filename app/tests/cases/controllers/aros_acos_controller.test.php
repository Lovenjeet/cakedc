<?php
/* ArosAcos Test cases generated on: 2011-06-28 14:25:57 : 1309263957*/
App::import('Controller', 'ArosAcos');

class TestArosAcosController extends ArosAcosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ArosAcosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.aros_aco', 'app.aro', 'app.aco');

	function startTest() {
		$this->ArosAcos =& new TestArosAcosController();
		$this->ArosAcos->constructClasses();
	}

	function endTest() {
		unset($this->ArosAcos);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
