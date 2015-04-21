<?php
class Content extends AppModel {
	var $name = 'Content';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Site' => array(
			'className' => 'Site',
			'foreignKey' => 'site_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
