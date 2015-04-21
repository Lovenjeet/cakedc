<?php
/* Stores Test cases generated on: 2011-06-30 08:49:31 : 1309416571*/
App::import('Controller', 'Stores');

class TestStoresController extends StoresController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class StoresControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.store', 'app.user', 'app.group', 'app.category', 'app.company', 'app.page', 'app.product', 'app.setting');

	function startTest() {
		$this->Stores =& new TestStoresController();
		$this->Stores->constructClasses();
	}

	function endTest() {
		unset($this->Stores);
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
