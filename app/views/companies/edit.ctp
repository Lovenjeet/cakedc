<?php echo $session->flash();?>

<div class="companies form" <?php if($this->Session->read('Auth.User.group_id') == '2'):?> style="float:left !important; border:none !important;" <?php endif;?>>
<?php echo $this->Form->create('Company');?>
	<fieldset>
		<legend><?php if($this->Session->read('Auth.User.group_id') != '2'): 
						__('Edit Company');
					else:
						__('Edit Company Details');
					endif;	 ?>
		</legend>
	<?php
		echo $this->Form->input('id');
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
<?php 
	if($this->Session->read('Auth.User.group_id') != '2'): 
		echo $this->Form->end(__('Submit', true)); 
	else:
		echo $this->Form->end(__('Update', true));
	endif;	
?>
</div>
<?php 
	if($this->Session->read('Auth.User.group_id') != '2'): 
?>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Company.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Company.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Companies', true), array('action' => 'index'));?></li>
	</ul>
</div>
<?php		
endif;
?>