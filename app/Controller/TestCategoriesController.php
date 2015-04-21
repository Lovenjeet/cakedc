<?php
/* Categories Test cases generated on: 2011-07-04 09:40:39 : 1309765239*/
App::import('Controller', 'Categories');

class TestCategoriesController extends CategoriesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CategoriesControllerTest extends CakeTestCase {
	var $fixtures = array('app.category', 'app.store', 'app.user', 'app.group', 'app.company', 'app.page', 'app.product', 'app.setting');

	function startTest() {
		$this->Categories =& new TestCategoriesController();
		$this->Categories->constructClasses();
	}

	function endTest() {
		unset($this->Categories);
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
