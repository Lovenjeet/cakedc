<div class="arosAcos form">
<?php echo $this->Form->create('ArosAco');?>
	<fieldset>
		<legend><?php __('Edit Aros Aco'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('aro_id');
		echo $this->Form->input('aco_id');
		echo $this->Form->input('_create');
		echo $this->Form->input('_read');
		echo $this->Form->input('_update');
		echo $this->Form->input('_delete');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('ArosAco.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('ArosAco.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Aros Acos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Aros', true), array('controller' => 'aros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aro', true), array('controller' => 'aros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Acos', true), array('controller' => 'acos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aco', true), array('controller' => 'acos', 'action' => 'add')); ?> </li>
	</ul>
</div>