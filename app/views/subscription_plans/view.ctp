<div class="subscriptionPlans view">
<h2><?php echo __('Subscription Plan');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subscriptionPlan['SubscriptionPlan']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Plan Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subscriptionPlan['SubscriptionPlan']['plan_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Plan Price'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subscriptionPlan['SubscriptionPlan']['plan_price']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Plan Duration'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subscriptionPlan['SubscriptionPlan']['plan_duration']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Enable'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subscriptionPlan['SubscriptionPlan']['enable']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subscription Plan'), array('action' => 'edit', $subscriptionPlan['SubscriptionPlan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Subscription Plan'), array('action' => 'delete', $subscriptionPlan['SubscriptionPlan']['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $subscriptionPlan['SubscriptionPlan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subscription Plans'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subscription Plan'), array('action' => 'add')); ?> </li>
	</ul>
</div>
