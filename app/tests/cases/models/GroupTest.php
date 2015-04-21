<?php
/* Group Test cases generated on: 2011-06-28 12:30:07 : 1309257007*/
App::import('Model', 'Group');

class GroupTest extends CakeTestCase {
	var $fixtures = array('app.group', 'app.user');

	function startTest() {
		$this->Group =& ClassRegistry::init('Group');
	}

	function endTest() {
		unset($this->Group);
		ClassRegistry::flush();
	}

}
