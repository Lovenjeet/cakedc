<?php
/* SubscriptionPlans Test cases generated on: 2011-07-04 09:49:50 : 1309765790*/
App::import('Controller', 'SubscriptionPlans');

class TestSubscriptionPlansController extends SubscriptionPlansController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SubscriptionPlansControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.subscription_plan');

	function startTest() {
		$this->SubscriptionPlans =& new TestSubscriptionPlansController();
		$this->SubscriptionPlans->constructClasses();
	}

	function endTest() {
		unset($this->SubscriptionPlans);
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
