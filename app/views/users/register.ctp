<div id="ajaxdiv" >
<?php
echo $this->Session->flash('auth');
echo $ajax->form('User','post',array('update'=>'ajaxdiv','model'=>'User','complete'=>"$('#subs').trigger('click');"));
//echo $form->create('User');
echo $this->Form->input('username');
echo $this->Form->input('StoreName');
echo $this->Form->input('storeUrl');
echo $this->Form->input('new_password',array('type'=>'password','label'=>'Password'));
echo $this->Form->input('confirm_password',array('type'=>'password'));
echo $this->Form->input('SubscriptionPlan',array('options'=>$subscriptionplans));
echo $this->Form->end('Register');

?>
</div>

