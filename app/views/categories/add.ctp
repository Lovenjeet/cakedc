<div class="categories form">
<?php echo $this->Form->create('Category',array('type'=>'file'));?>
	<fieldset>
		<legend><?php __('Add Category'); ?></legend>
	<?php echo $this->Form->input('store_id'); ?>
    
<?php
$this->Js->get('#CategoryStoreId')->event('change', $this->Js->request(
array('controller' => 'categories', 'action' => 'getParentCategories','admin'=>false),
array(
'update' => '#ajax_reply',
'async' => true,
'dataExpression' => true,
'method' => 'post',
'data' => $js->serializeForm(array('isForm' => false, 'inline' => true))
) ) ); 
?>
		
    <?php echo $this->Form->input('parent_id',array('div'=>array('id'=>'ajax_reply'),'options'=>array(),'empty'=>array('0'=>'Root'))); ?>
		
	<?php
	
      	echo $this->Form->input('category_name');
		
		echo $this->Form->input('category_desc');
		
		echo $this->Form->file('category_image');

		//echo $form->input('is_active',array('type'=>'radio','options'=>array('1'=>'Yes','0'=>'No'),'value'=>1));
		echo $form->input('is_active');

	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Categories', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Stores', true), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store', true), array('controller' => 'stores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories', true), array('controller' => 'categories', 'action' => 'index')); ?> </li>
<li><?php echo $this->Html->link(__('New Parent Category', true), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products', true), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
<?php echo $this->Js->writeBuffer();?>