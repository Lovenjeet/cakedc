<div id="header">
    <div id="logo">
    <?php echo $html->image('images/mobilizer-brand.png');?>
    </div>
    <div id="slogan"> Convert <em>Any</em> Website Into A Mobile Website </div>
    <!--<div id="login">
		Logged in as <a href="#">email@gmail.com</a> |  <a href="#">Log out</a>
	</div>-->
    <div id="manager-navigation">
      <ul id="countrytabs" class="shadetabs">
      	<li>
		  <?php 
			  if ($this->Session->read('Auth.User')):
			  echo $html->link('Logout',array('controller'=>'users','action'=>'logout'));
			  endif;
		  ?>
	    </li>
      </ul>
    </div>
    <!--/end Manager Navigation -->
  </div>
  <!--/end Header -->
  <!-- NAVIGATION FOR PARTNER/AFFILIATE SYSTEM -->
  <?php if($this->Session->read('Auth.User.group_id') == '2'): ?>
	<ul id="main-navigation">
		<li>
			<?php
			echo $html->link('Company Detail',array('controller'=>'companies','action'=>'edit'));?>
		</li>
		<li>
	       	<?php echo $html->link('Manage Pages',array('controller'=>'pages','action'=>'index'));?>
       </li>
		<li>
			<?php echo $html->link('Settings',array('controller'=>'stores','action'=>'edit'));?>
            
		</li>
		
	</ul>
  <?php else:?>
  <div id="navcontainer">
  <?php 	  	if ($this->Session->read('Auth.User')):?>
    <ul id="main-navigation">
      <li>
      <?php if($html->hasPermission(array('controller'=>'Users','action'=>'index'))=='1'): ?>
      	<?php echo $html->link('Manage Users',array('controller'=>'users','action'=>'index'));?>
      <?php endif;?>
      </li>
	  <li>
	  <?php if($html->hasPermission(array('controller'=>'Groups','action'=>'index'))=='1'): ?>
      	<?php echo $html->link('Manage Groups',array('controller'=>'groups','action'=>'index'));?>
      <?php endif;?>
	  </li>
	  <!--<li>
	  <?php if($html->hasPermission(array('controller'=>'Sites','action'=>'index'))=='1'): ?>
      	<?php echo $html->link('Manage Sites',array('controller'=>'sites','action'=>'index'));?>
      <?php endif;?>
	  </li>-->
	  <li>

      	<?php echo $html->link('Manage Stores',array('controller'=>'stores','action'=>'index'));?>

	  </li>
	  <!--<li>
	  <?php if($html->hasPermission(array('controller'=>'Templates','action'=>'index'))=='1'): ?>
      	<?php echo $html->link('Manage Templates',array('controller'=>'templates','action'=>'index'));?>
      <?php endif;?>
	  </li>-->
	  <li>
	  <?php if($html->hasPermission(array('controller'=>'Companies','action'=>'index'))=='1'): ?>
      	<?php echo $html->link('Company Details',array('controller'=>'companies','action'=>'index'));?>
      <?php endif;?>
	  </li>
	  <li>
	  <?php if($html->hasPermission(array('controller'=>'Pages','action'=>'index'))=='1'): ?>
      	<?php echo $html->link('Manage Pages',array('controller'=>'pages','action'=>'index'));?>
      <?php endif;?>
	  </li>
      <!--<li id="active"><a href="#" id="current">Manage Site</a></li>-->
    		
	</ul>
    <?php endif;?>
  </div>
  <?php endif;?>
  <!-- Content -->