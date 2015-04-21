<div class="companies form">
<?php echo $this->Form->create('Company');?>
	<fieldset>
		<legend><?php __('Add Company'); ?></legend>
	<?php
		if($this->Session->read('Auth.User.group_id') != '2'): 
		echo $this->Form->input('store_id');
		endif;
		echo $this->Form->input('company_name');
		echo $this->Form->input('email');
		echo $this->Form->input('address');
		echo $this->Form->input('mobile');
		echo $this->Form->input('zipcode');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('country');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Companies', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('New Company', true), array('action' => 'add')); ?></li>
        
	</ul>
</div>