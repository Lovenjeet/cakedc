<?php
/* User Test cases generated on: 2011-06-28 12:27:09 : 1309256829*/
App::import('Model', 'User');

class UserTest extends CakeTestCase {
	var $fixtures = array('app.user', 'app.group');

	function startTest() {
		$this->User =& ClassRegistry::init('User');
	}

	function endTest() {
		unset($this->User);
		ClassRegistry::flush();
	}

}
