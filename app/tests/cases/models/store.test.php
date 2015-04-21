<?php
/* Store Test cases generated on: 2011-06-30 08:49:27 : 1309416567*/
App::import('Model', 'Store');

class StoreTestCase extends CakeTestCase {
	var $fixtures = array('app.store', 'app.user', 'app.group', 'app.category', 'app.company', 'app.page', 'app.product', 'app.setting');

	function startTest() {
		$this->Store =& ClassRegistry::init('Store');
	}

	function endTest() {
		unset($this->Store);
		ClassRegistry::flush();
	}

}
