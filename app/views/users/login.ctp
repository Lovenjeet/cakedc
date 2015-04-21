<?php
echo $this->Session->flash('auth');
echo $this->Form->create('User', array('action' => 'login'));
echo $this->Form->inputs(array(
	'legend' => __('Login'),
	'username',
	'password'
));
    echo "<div class=\"register\">".$html->link(__('Register'),'/users/register')."</div>";
    echo $this->Form->end('Login');

?>
