<div class="stores index">
	<h2><?php __('Stores');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('Merchant','User.username');?></th>
			<!--<th><?php //echo $this->Paginator->sort('user_id');?></th>-->
			<th><?php echo $this->Paginator->sort('store_name');?></th>
			<th><?php echo $this->Paginator->sort('store_url');?></th>
			<!--<th><?php echo $this->Paginator->sort('store_description');?></th>-->
			<th><?php echo $this->Paginator->sort('created');?></th>
			<!--<th><?php echo $this->Paginator->sort('modified');?></th>-->
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($stores as $store):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $store['Store']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($store['User']['username'], array('controller' => 'users', 'action' => 'view', $store['User']['id'])); ?>
		</td>
		<td><?php echo $store['Store']['store_name']; ?>&nbsp;</td>
		<td><?php echo $store['Store']['store_url']; ?>&nbsp;</td>
		<!--<td><?php echo $store['Store']['store_description']; ?>&nbsp;</td>-->
		<td><?php echo date('F j,Y',strtotime($store['Store']['created'])); ?>&nbsp;</td>
		<!--<td><?php echo date('F j,Y',strtotime($store['Store']['modified'])); ?></td>-->
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $store['Store']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $store['Store']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $store['Store']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $store['Store']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Store', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Stores', true), array('action' => 'index')); ?> </li>
	</ul>
</div>