<?php
/* Category Test cases generated on: 2011-07-04 09:40:34 : 1309765234*/
App::import('Model', 'Category');

class CategoryTest extends CakeTestCase {
	var $fixtures = array('app.category', 'app.store', 'app.user', 'app.group', 'app.company', 'app.page', 'app.product', 'app.setting');

	function startTest() {
		$this->Category =& ClassRegistry::init('Category');
	}

	function endTest() {
		unset($this->Category);
		ClassRegistry::flush();
	}

}
