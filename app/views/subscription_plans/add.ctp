<div class="subscriptionPlans form">
<?php echo $this->Form->create('SubscriptionPlan');?>
	<fieldset>
		<legend><?php echo __('Add Subscription Plan'); ?></legend>
	<?php
		echo $this->Form->input('plan_name');
		echo $this->Form->input('plan_price');
		echo $this->Form->input('plan_duration');
		echo $this->Form->input('enable');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Subscription Plans'), array('action' => 'index'));?></li>
	</ul>
</div>