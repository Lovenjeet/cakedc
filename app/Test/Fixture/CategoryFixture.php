<?php
/* Category Fixture generated on: 2011-07-04 09:40:34 : 1309765234 */
class CategoryFixture extends CakeTestFixture {
	var $name = 'Category';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'store_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'category_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_general_ci', 'charset' => 'latin1'),
		'category_desc' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_general_ci', 'charset' => 'latin1'),
		'category_image' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_general_ci', 'charset' => 'latin1'),
		'parent_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'store_id' => 1,
			'category_name' => 'Lorem ipsum dolor sit amet',
			'category_desc' => 'Lorem ipsum dolor sit amet',
			'category_image' => 'Lorem ipsum dolor sit amet',
			'parent_id' => 1
		),
	);
}
