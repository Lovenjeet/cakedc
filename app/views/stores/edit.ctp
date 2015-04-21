<?php echo $session->flash();?> 
<div class="stores form" <?php if($this->Session->read('Auth.User.group_id') == '2'):?> style="float:left !important; border:none !important;" <?php endif;?>>
<?php echo $this->Form->create('Store');?>
	<fieldset>
		<legend><?php if($this->Session->read('Auth.User.group_id') != '2'): 
						__('Edit Store');
					else:
						__('Edit Store Details');
					endif;	 ?>
		</legend>
	<?php
		echo $this->Form->input('id');
		if($this->Session->read('Auth.User.group_id') != '2'):
		echo $this->Form->input('user_id',array('label'=>'Merchant'));
		endif;
		echo $this->Form->input('store_name');
		echo $this->Form->input('store_url');
		echo $this->Form->input('store_description' , array('type'=> 'textarea'));
		//echo $this->Form->input('created');
		//echo $this->Form->input('modified');
	?>
	</fieldset>
<?php 
	if($this->Session->read('Auth.User.group_id') != '2'): 
		echo $this->Form->end(__('Submit')); 
	else:
		echo $this->Form->end(__('Update'));
	endif;	
?>
</div>
<?php if($this->Session->read('Auth.User.group_id') != '2'): ?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete'), array('action' => 'delete', $this->Form->value('Store.id')), null, sprintf(__('Are you sure you want to delete # %s?'), $this->Form->value('Store.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Stores'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('New Store'), array('action' => 'add')); ?></li>
	</ul>
</div>
<?php 
endif;?>