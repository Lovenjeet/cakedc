<div class="stores form">
<?php echo $this->Form->create('Store');?>
	<fieldset>
		<legend><?php echo __('Add Store'); ?></legend>
	<?php
		echo $this->Form->input('user_id',array('label'=>'Merchant'));
		echo $this->Form->input('store_name');
		echo $this->Form->input('store_url');
		echo $this->Form->input('store_description' , array('type'=> 'textarea'));
		//echo $this->Form->input('creatied');
		//echo $this->Form->input('modified');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Stores'), array('action' => 'index'));?></li>
		
	</ul>
</div>