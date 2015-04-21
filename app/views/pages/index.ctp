<div class="pages index">
	<h2><?php echo __('Pages');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<?php if($this->Session->read('Auth.User.group_id') != '2'): ?>
			<th><?php echo $this->Paginator->sort('Store','Store.store_name');?></th>
			<?php endif;?>
			<th><?php echo $this->Paginator->sort('page_title');?></th>
			<th><?php echo $this->Paginator->sort('header_display');?></th>
			<th><?php echo $this->Paginator->sort('footer_display');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($pages as $page):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $page['Page']['id']; ?>&nbsp;</td>
		<?php if($this->Session->read('Auth.User.group_id') != '2'): ?>
		<td>
			<?php echo $this->Html->link($page['Store']['store_name'], array('controller' => 'stores', 'action' => 'view', $page['Store']['id'])); ?>
		</td>
		<?php endif;?>
		<td><?php echo $page['Page']['page_title']; ?>&nbsp;</td>
        
		<td align="center"><?php if($page['Page']['header_display'] == '1'): ?>
		<?php echo $html->image('active.png'); ?>
		<?php
		else:
		?>
		<?php echo $html->image('notactive.png'); ?>
		<?php 
		endif
		?></td>
		<td align="center"><?php if($page['Page']['footer_display'] == '1'): ?>
		<?php echo $html->image('active.png'); ?>
		<?php 
		else:
		?>
		<?php echo $html->image('notactive.png'); ?>
		<?php 
		endif
		?></td>
		<!--<td><?php echo $page['Page']['header_display']; ?>&nbsp;</td>
		<td><?php echo $page['Page']['footer_display']; ?>&nbsp;</td>-->
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $page['Page']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $page['Page']['id'])); ?>
			<?php echo $this->Html->link(__('Delete'), array('action' => 'delete', $page['Page']['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $page['Page']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Page'), array('action' => 'add')); ?></li>
		
		
	</ul>
</div>