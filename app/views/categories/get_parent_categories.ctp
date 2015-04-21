<?php
echo $this->Form->input('Category.parent_id',array('div'=>false,'options'=>$parentCategories,'empty'=>array('0'=>'Root'))); ?>