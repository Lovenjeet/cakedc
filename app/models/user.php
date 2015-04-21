<?php
class User extends AppModel {

var $name = 'User';
//var $belongsTo = array('Group');
var $actsAs = array('Acl' => array('type' => 'requester'));

	var $validate = array(
		'username' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Username can not be left blank',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'unique' => array(
				'rule' => 'isUnique',
				'message' => 'This username has already been taken.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'new_password' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Password can not be left blank',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'identicalFieldValues'=>array(
				'rule'=>array('identicalFieldValues','confirm_password'),
				'message'=>'Please re-enter your password twice to match the values.'
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),		
		
		'group_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		
		/*'password' => array(
			'notempty' => array(
				'rule' => array('Password can not be left blank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
 
function parentNode() {
    if (!$this->id && empty($this->data)) {
        return null;
    }
    if (isset($this->data['User']['group_id'])) {
	$groupId = $this->data['User']['group_id'];
    } else {
    	$groupId = $this->field('group_id');
    }
    if (!$groupId) {
	return null;
    } else {
        return array('Group' => array('id' => $groupId));
    }
}

    function bindNode($user) {
    return array('model' => 'Group', 'foreign_key' => $user['User']['group_id']);
    }


}
