<div class="pages form">
<?php echo $this->Form->create('Page');?>
	<fieldset>
		<legend><?php __('Edit Page'); ?></legend>
	<?php
		echo $this->Form->input('id');
		if($this->Session->read('Auth.User.group_id') != '2'): 
			echo $this->Form->input('store_id');
		endif;
		echo $this->Form->input('page_title');
		echo $this->Form->input('page_content');
		echo $this->Form->input('header_display');
		echo $this->Form->input('footer_display');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Page.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Page.id'))); ?></li>
		<li><?php echo $this->Html->link(__('New Page', true), array('action' => 'add')); ?></li>
	<li><?php echo $this->Html->link(__('List Pages', true), array('action' => 'index'));?></li>
    
	</ul>
</div>