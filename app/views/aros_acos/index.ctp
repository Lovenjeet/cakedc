<div class="arosAcos index">
	<h2><?php __('Aros Acos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('aro_id');?></th>
			<th><?php echo $this->Paginator->sort('aco_id');?></th>
			<th><?php echo $this->Paginator->sort('_create');?></th>
			<th><?php echo $this->Paginator->sort('_read');?></th>
			<th><?php echo $this->Paginator->sort('_update');?></th>
			<th><?php echo $this->Paginator->sort('_delete');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($arosAcos as $arosAco):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $arosAco['ArosAco']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($arosAco['Aro']['id'], array('controller' => 'aros', 'action' => 'view', $arosAco['Aro']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($arosAco['Aco']['id'], array('controller' => 'acos', 'action' => 'view', $arosAco['Aco']['id'])); ?>
		</td>
		<td><?php echo $arosAco['ArosAco']['_create']; ?>&nbsp;</td>
		<td><?php echo $arosAco['ArosAco']['_read']; ?>&nbsp;</td>
		<td><?php echo $arosAco['ArosAco']['_update']; ?>&nbsp;</td>
		<td><?php echo $arosAco['ArosAco']['_delete']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $arosAco['ArosAco']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $arosAco['ArosAco']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $arosAco['ArosAco']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $arosAco['ArosAco']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Aros Aco', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Aros', true), array('controller' => 'aros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aro', true), array('controller' => 'aros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Acos', true), array('controller' => 'acos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aco', true), array('controller' => 'acos', 'action' => 'add')); ?> </li>
	</ul>
</div>