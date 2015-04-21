<div class="templates form">
<?php echo $this->Form->create('Template');?>
	<fieldset>
		<legend><?php __('Edit Template'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('template_name');
		echo $this->Form->input('short_desc');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Template.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Template.id'))); ?></li>
		<li><?php echo $this->Html->link(__('New Template', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Template', true), array('action' => 'index')); ?> </li>

	</ul>
</div>