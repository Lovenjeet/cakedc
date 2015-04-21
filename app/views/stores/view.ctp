<div class="stores view">
<h2><?php  __('Store');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $store['Store']['id']; ?>
			&nbsp;
		</dd>
		<?php if($this->Session->read('Auth.User.group_id') != '2'): ?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Merchant'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($store['User']['username'], array('controller' => 'users', 'action' => 'view', $store['User']['id'])); ?>
			&nbsp;
		</dd>
		<?php endif;?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Store Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $store['Store']['store_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Store Url'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $store['Store']['store_url']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Store Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $store['Store']['store_description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Creation Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo date('F j,Y',strtotime($store['Store']['created'])); ?>
			&nbsp;
		</dd>
		<!--<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo date('F j,Y',strtotime($store['Store']['modified'])); ?>
			&nbsp;
		</dd>-->
	</dl>
</div>
<?php if($this->Session->read('Auth.User.group_id') != '2'):?>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Store', true), array('action' => 'edit', $store['Store']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Store', true), array('action' => 'delete', $store['Store']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $store['Store']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Stores', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store', true), array('action' => 'add')); ?> </li>
		
	</ul>
</div>
<?php 
else: ?>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Store Detail', true), array('action' => 'edit', $store['Store']['id'])); ?> </li>
	</ul>
</div>		
<?php
endif;
?>
