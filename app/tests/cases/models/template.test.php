<?php
/* Template Test cases generated on: 2011-06-28 12:43:02 : 1309257782*/
App::import('Model', 'Template');

class TemplateTestCase extends CakeTestCase {
	var $fixtures = array('app.template', 'app.site', 'app.user', 'app.group', 'app.content');

	function startTest() {
		$this->Template =& ClassRegistry::init('Template');
	}

	function endTest() {
		unset($this->Template);
		ClassRegistry::flush();
	}

}
