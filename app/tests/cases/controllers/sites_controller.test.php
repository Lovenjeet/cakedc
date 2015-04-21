<?php
/* Sites Test cases generated on: 2011-06-28 12:42:37 : 1309257757*/
App::import('Controller', 'Sites');

class TestSitesController extends SitesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SitesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.site', 'app.template', 'app.user', 'app.group', 'app.content');

	function startTest() {
		$this->Sites =& new TestSitesController();
		$this->Sites->constructClasses();
	}

	function endTest() {
		unset($this->Sites);
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
