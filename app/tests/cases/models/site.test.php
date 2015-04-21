<?php
/* Site Test cases generated on: 2011-06-28 12:42:33 : 1309257753*/
App::import('Model', 'Site');

class SiteTestCase extends CakeTestCase {
	var $fixtures = array('app.site', 'app.template', 'app.user', 'app.group', 'app.content');

	function startTest() {
		$this->Site =& ClassRegistry::init('Site');
	}

	function endTest() {
		unset($this->Site);
		ClassRegistry::flush();
	}

}
