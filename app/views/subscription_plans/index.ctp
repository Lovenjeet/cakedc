<div class="subscriptionPlans index">
	<h2><?php echo __('Subscription Plans');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('plan_name');?></th>
			<th><?php echo $this->Paginator->sort('plan_price');?></th>
			<th><?php echo $this->Paginator->sort('plan_duration');?></th>
			<th><?php echo $this->Paginator->sort('enable');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($subscriptionPlans as $subscriptionPlan):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $subscriptionPlan['SubscriptionPlan']['id']; ?>&nbsp;</td>
		<td><?php echo $subscriptionPlan['SubscriptionPlan']['plan_name']; ?>&nbsp;</td>
		<td><?php echo $subscriptionPlan['SubscriptionPlan']['plan_price']; ?>&nbsp;</td>
		<td><?php echo $subscriptionPlan['SubscriptionPlan']['plan_duration']; ?>&nbsp;</td>
		<td><?php echo $subscriptionPlan['SubscriptionPlan']['enable']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $subscriptionPlan['SubscriptionPlan']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subscriptionPlan['SubscriptionPlan']['id'])); ?>
			<?php echo $this->Html->link(__('Delete'), array('action' => 'delete', $subscriptionPlan['SubscriptionPlan']['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $subscriptionPlan['SubscriptionPlan']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%')
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous'), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next') . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Subscription Plan'), array('action' => 'add')); ?></li>
	</ul>
</div>