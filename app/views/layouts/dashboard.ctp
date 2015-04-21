<?php echo $this->Html->docType(); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	    <?php echo $this->Html->charset('ISO-8859-1'); ?>
		<?php echo $html->tag('title',$title_for_layout); ?>
		<?php echo $html->css('style');?>
		<?php //echo $html->css('hack');?>
		<?php echo $html->css('template');?>
		<?php echo $html->css('cake.generic.css');?>
        <?php echo $scripts_for_layout;?>
</head>
<body>
<div id="page">
	<!-- header -->
		<?php echo $this->element('header');?>
	<!-- end header -->
	<!-- content -->
		<?php echo $content_for_layout;?>
	<!-- end content -->
	<!-- footer -->
    <?php echo $this->element('sql_dump');?>
		<?php echo $this->element('footer');?>
	<!-- end footer -->
</div>
</body>
</html>