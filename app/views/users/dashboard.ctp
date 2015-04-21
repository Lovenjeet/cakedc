
<!--		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
			</ul>
		</div>-->

<?php //echo $html->hasPermission(array('controller'=>'Users','action'=>'add')) ? 'True' :'Flase';

//echo $html->hasPermission(array('controller'=>'Users','action'=>'add')) ? 'True' : 'False';

//echo in_array('controllers/Users/add',$permissions) ? 'TRUE' : 'FALSE';
?>

<div style="margin:0 auto; text-align:center; min-height:450px; vertical-align:middle;">
<br>
<br>
<?php echo $session->flash();?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php if($this->Session->read('Auth.User.group_id') == '2'): ?>
<h2>Merchant Dashboard</h2></div>
<?php
else:?>
<h2>Administrator Dashboard</h2></div>
<?php
endif;?>