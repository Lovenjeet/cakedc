<?php
class UsersController extends AppController {

	var $name = 'Users';
	var $components=array('PermissionsArray','RequestHandler');
	var $helpers=array('Ajax','Js');
	 
	function beforeFilter() {
		parent::beforeFilter();
		$this->layout='dashboard';
		$this->Auth->allow(array('dashboard','demo','permissions','initDB','login','logout','register'));
		$this->Auth->autoRedirect = false;
	}
	function index() 
	{
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function login() {
		if ($this->Session->read('Auth.User')) {
			$this->Session->setFlash('You are logged in!');
			if ($this->Auth->user()) 
			{
			 $this->PermissionsArray->create($this->Auth->user('group_id'));
			}
			$this->redirect('users', null, false);
			
		}
	}       

	function logout() {
		$this->Session->setFlash('Good-Bye');
		$this->redirect($this->Auth->logout());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			
			$this->data['User']['password']=!empty($this->data['User']['new_password']) ? $this->Auth->password($this->data['User']['new_password']) : null;
			
			$this->data['User']['confirmPassword']=!empty($this->data['User']['confirm_password']) ? $this->Auth->password($this->data['User']['confirm_password']) : null;
			
			$this->User->create();
			$this->User->set($this->data);
			if ($this->User->save($this->data)) {
				//Create  Store
				if($this->data['User']['group_id'] == '2') {
					$user_id = $this->User->getInsertID();
					$this->loadModel('Store');
					$storedata['Store']['store_name'] =  $this->data['User']['username']." "."Store";
					$storedata['Store']['user_id'] = $user_id; 
					$this->Store->save($storedata);
					
					//Create company
					$store_id = $this->Store->getInsertID();
					$this->loadModel('Company');
					$companydata['Company']['store_id'] = $store_id; 
					$this->Company->save($companydata);
				}
				
				$this->Session->setFlash(__('The user has been saved', true));
				
				$this->redirect(array('action' => 'index'));
			} else {
				$this->data['User']['confirm_password']=null;
				$this->data['User']['new_password']=null;
		
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
		
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			
			
			if(!empty($this->data['User']['new_password'])):
			
			$this->data['User']['password']=!empty($this->data['User']['new_password']) ? $this->Auth->password($this->data['User']['new_password']) : null;
			
			endif;
			
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function initDB() {
		$group =& $this->User->Group;
		//Allow admins to everything
		$group->id = 1;     
		$this->Acl->allow($group, 'controllers');
	 
		//allow managers to posts and widgets
		$group->id = 2;
		
		$this->Acl->deny($group, 'controllers/users/view');
		$this->Acl->deny($group, 'controllers/users/add');
		$this->Acl->deny($group, 'controllers/users/edit');
		$this->Acl->deny($group, 'controllers/users/delete');
		
		$this->Acl->allow($group, 'controllers/pages/add');
		$this->Acl->allow($group, 'controllers/pages/view');
		$this->Acl->allow($group, 'controllers/pages/edit');
		$this->Acl->allow($group, 'controllers/pages/delete');
		$this->Acl->allow($group, 'controllers/pages/index');
		
		$this->Acl->allow($group, 'controllers/companies/add');
		$this->Acl->allow($group, 'controllers/companies/view');
		$this->Acl->allow($group, 'controllers/companies/edit');
		$this->Acl->allow($group, 'controllers/companies/delete');
		$this->Acl->allow($group, 'controllers/companies/index');
		 
		//allow users to only add and edit on posts and widgets
		/*$group->id = 3;
		$this->Acl->deny($group, 'controllers');        
		$this->Acl->allow($group, 'controllers/sites/view');
		$this->Acl->allow($group, 'controllers/templates/view');*/
		
		//we add an exit to avoid an ugly "missing views" error message
		echo "all done";
		exit;
}

function dashboard()
{
	$group =& $this->User->Group;
	$group->id=1;
	
	$this->layout='dashboard';	
	
	
	/*if ($this->Auth->user()) {
         $this->PermissionsArray->create($this->Auth->user('group_id'));
    }*/
	
	//pr($this->Session->read('Auth.Permissions'));	
//	echo $this->Acl->check($group,'Users') ? 'True' : 'false';
	
	/*$userId=2;
	$permissoin=$this->Acl->Aro->find('threaded',array('conditions'=>array('Aro.foreign_key'=>$userId,'parent_id'=>'1')));
	pr($permissoin);*/
	
	
}

function demo()
{
	$this->layout='dashboard';
}



 function register()
   {
      pr($_REQUEST);
	  if(isset($_REQUEST['subscr_date'])!='')
	  {
		  #get back the response from the paypal  and store the response in the database
			  $paymentInfo=serialize($_GET);
			  $paymentDate =$_GET['subscr_date'] ;
			  $timestamp = strtotime($paymentDate); 
			  $new_date = date('d-m-Y', $timestamp);
			  $date = strtotime(date("Y-m-d", strtotime($new_date)) . " +6 month");
			  $expireDate= date("Y-m-d",$date);
		  #End	 
	 }
		if(!empty($this->data))
		  {				
			$this->data['User']['password']=!empty($this->data['User']['new_password']) ? $this->Auth->password($this->data['User']['new_password']) : null;
			
			$this->data['User']['confirmPassword']=!empty($this->data['User']['confirm_password']) ? $this->Auth->password($this->data['User']['confirm_password']) : null;
			
			#set group id  for merchants
			$this->data['User']['group_id'] = 2;
			
	
			
			$this->User->create();
			$this->User->set($this->data);
			if ($this->User->save($this->data)) {
				//Create  Store
					$user_id = $this->User->getInsertID();
					$this->loadModel('Store');
					$storedata['Store']['user_id'] =  $user_id;
					$storedata['Store']['store_name'] =  $this->data['User']['StoreName'];
					$storedata['Store']['store_url'] = $this->data['User']['storeUrl'];
					$this->Store->save($storedata);
					
					//Create company
					$store_id = $this->Store->getInsertID();
					$this->loadModel('Company');
					$companydata['Company']['store_id'] = $store_id; 
					$this->Company->save($companydata);
					
					#set the variables to to store in the mechant_payment_details
				   $this->loadModel('MerchantPaymentDetail');
				   $this->data['MerchantPaymentDetail']['plan_id']=$this->data['User']['SubscriptionPlan'];
				   $this->data['MerchantPaymentDetail']['user_id']=$user_id;
				   $this->data['MerchantPaymentDetail']['payment_status']='inactive';
				   if($this->MerchantPaymentDetail->save($this->data))
					{				  
					   $paymentId = $this->MerchantPaymentDetail->getInsertID(); 
                         #set the variables to send to the paypal
                        $planId =$this->data['User']['SubscriptionPlan'];
				 
				           #set the model to get the data from the subscription table to get the plans
				 			 $this->loadModel('SubscriptionPlan');
 							 $susbcriptionInfo=$this->SubscriptionPlan->findByid($planId);
							
							  $this->set('susbcriptionInfo',$susbcriptionInfo);
							  $this->set('payment_id',$paymentId);
							  $this->render('/elements/paypalform');
					}		
	
				}
				
				$this->Session->setFlash(__('The user has been saved', true));
				
				//$this->redirect(array('action' => 'login'));
			} else {
				$this->data['User']['confirm_password']=null;
				$this->data['User']['new_password']=null;
		
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		          $this->loadModel('SubscriptionPlan');
                  $subscriptionplans = $this->SubscriptionPlan->find('list',array('fields'=>'id,plan_name'));       
				  $this->set(compact('subscriptionplans'));
				  
	              //$this->set('subsPlans',$subsPlans);
	  }
     
 }