<div class="subscriptionPlans form">
<?php echo $this->Form->create('SubscriptionPlan');?>
	<fieldset>
		<legend><?php echo __('Edit Subscription Plan'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Html->link(__('Delete'), array('action' => 'delete', $this->Form->value('SubscriptionPlan.id')), null, sprintf(__('Are you sure you want to delete # %s?'), $this->Form->value('SubscriptionPlan.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Subscription Plans'), array('action' => 'index'));?></li>
	</ul>
</div>