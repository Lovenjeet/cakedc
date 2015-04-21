<?php
/* Companies Test cases generated on: 2011-06-29 14:30:57 : 1309350657*/
App::import('Controller', 'Companies');

class TestCompaniesController extends CompaniesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CompaniesControllerTest extends CakeTestCase {
	var $fixtures = array('app.company', 'app.user', 'app.group');

	function startTest() {
		$this->Companies =& new TestCompaniesController();
		$this->Companies->constructClasses();
	}

	function endTest() {
		unset($this->Companies);
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
