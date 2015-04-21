<?php
/* SubscriptionPlan Test cases generated on: 2011-07-04 09:49:49 : 1309765789*/
App::import('Model', 'SubscriptionPlan');

class SubscriptionPlanTestCase extends CakeTestCase {
	var $fixtures = array('app.subscription_plan');

	function startTest() {
		$this->SubscriptionPlan =& ClassRegistry::init('SubscriptionPlan');
	}

	function endTest() {
		unset($this->SubscriptionPlan);
		ClassRegistry::flush();
	}

}
