<div class="pages form">
<?php echo $this->Form->create('Page');?>
	<fieldset>
		<legend><?php echo __('Add Page'); ?></legend>
	<?php
		if($this->Session->read('Auth.User.group_id') != '2'):
		echo $this->Form->input('store_id');
		endif;
		echo $this->Form->input('page_title');
		echo $this->Form->input('page_content');
		echo $this->Form->input('header_display');
		echo $this->Form->input('footer_display');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

	<li><?php echo $this->Html->link(__('New Page'), array('action' => 'add')); ?></li>
	<li><?php echo $this->Html->link(__('List Pages'), array('action' => 'index'));?></li>
	
	</ul>
</div>