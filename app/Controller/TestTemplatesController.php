<?php
/* Templates Test cases generated on: 2011-06-28 12:43:07 : 1309257787*/
App::import('Controller', 'Templates');

class TestTemplatesController extends TemplatesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TemplatesControllerTest extends CakeTestCase {
	var $fixtures = array('app.template', 'app.site', 'app.user', 'app.group', 'app.content');

	function startTest() {
		$this->Templates =& new TestTemplatesController();
		$this->Templates->constructClasses();
	}

	function endTest() {
		unset($this->Templates);
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
