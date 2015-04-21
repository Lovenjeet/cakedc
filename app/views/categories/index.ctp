<div class="categories index">
	<h2><?php echo __('Categories');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
            <th><?php echo $this->Paginator->sort('image');?></th>
			<th><?php echo $this->Paginator->sort('store_id');?></th>
			<th><?php echo $this->Paginator->sort('category_name');?></th>
			<th><?php echo $this->Paginator->sort('Parent','parent_id');?></th>
			<th><?php echo $this->Paginator->sort('Active','is_active');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($categories as $category):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $category['Category']['id']; ?>&nbsp;</td>
 		<td><?php echo $html->image('categories/small/'.$category['Category']['category_image'],array('width'=>'100','height'=>'100')); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($category['Store']['store_name'], array('controller' => 'stores', 'action' => 'view', $category['Store']['id'])); ?>
		</td>
		<td><?php echo $category['Category']['category_name']; ?>&nbsp;</td>
		<td>
			<?php
			
			$parent=$this->requestAction('/categories/getParentCategory/'.$category['Category']['parent_id']);
			
			if(is_array($parent)):
			
			echo $this->Html->link($parent['Category']['category_name'], array('controller' => 'categories', 'action' => 'view', $parent['Category']['id'])); 
			
			else:
				echo $parent;
			endif;
			?>
            
		</td>
        
        <td align="center">
        	<?php echo $category['Category']['is_active']==1 ? $html->image('active.png'):$html->image('notactive.png');?>
        </td>
        
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $category['Category']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $category['Category']['id'])); ?>
			<?php echo $this->Html->link(__('Delete'), array('action' => 'delete', $category['Category']['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $category['Category']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Stores'), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store'), array('controller' => 'stores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>