<div class="templates view">
<h2><?php  __('Template');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $template['Template']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $template['Template']['template_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Short Desc'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $template['Template']['short_desc']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $template['Template']['description']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Template', true), array('action' => 'edit', $template['Template']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Template', true), array('action' => 'delete', $template['Template']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $template['Template']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Templates', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
