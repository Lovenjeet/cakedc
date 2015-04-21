<div class="stores view">
<h2><?php echo __('Store');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $store['Store']['id']; ?>
			&nbsp;
		</dd>
		<?php if($this->Session->read('Auth.User.group_id') != '2'): ?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Merchant'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($store['User']['username'], array('controller' => 'users', 'action' => 'view', $store['User']['id'])); ?>
			&nbsp;
		</dd>
		<?php endif;?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Store Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $store['Store']['store_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Store Url'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $store['Store']['store_url']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Store Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $store['Store']['store_description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Creation Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo date('F j,Y',strtotime($store['Store']['created'])); ?>
			&nbsp;
		</dd>
		<!--<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Modified Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo date('F j,Y',strtotime($store['Store']['modified'])); ?>
			&nbsp;
		</dd>-->
	</dl>
</div>
<?php if($this->Session->read('Auth.User.group_id') != '2'):?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Store'), array('action' => 'edit', $store['Store']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Store'), array('action' => 'delete', $store['Store']['id']), null, sprintf(__('Are you sure you want to delete # %s?'), $store['Store']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Stores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store'), array('action' => 'add')); ?> </li>
		
	</ul>
</div>
<?php 
else: ?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Store Detail'), array('action' => 'edit', $store['Store']['id'])); ?> </li>
	</ul>
</div>		
<?php
endif;
?>
