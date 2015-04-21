<?php
class CategoriesController extends AppController {

	var $name = 'Categories';
	var $helpers=array('Ajax','Js');
	var $components=array('RequestHandler','Image');

	function index() {
		$this->Category->recursive = 0;
		$this->set('categories', $this->paginate());
	}

	function beforeFilter() {
		parent::beforeFilter(); 
		$this->layout='dashboard';
		$this->Auth->allow(array('*'));
	}
	
	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid category', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('category', $this->Category->read(null, $id));
	}

	function add() {
		
		if (!empty($this->data)) {
			$this->Category->create();
			// Upload Image and Thumbnail
			if(!empty($this->data['Category']['category_image']['name'])):
			
			$image_path = $this->Image->upload_image_and_thumbnail($this->data,"category_image",800,800,"categories",true,'Category');
			$this->data['Category']['category_image']=$image_path;
			
			else:
				unset($this->data['Category']['category_image']);
			endif;
			
			$this->Category->set($this->data);
			if ($this->Category->save($this->data)) 
			{
				$this->Session->setFlash(__('The category has been saved', true));
				$this->redirect(array('action' => 'index'));
			}
			else
			{
				$this->Session->setFlash(__('The category could not be saved. Please, try again.', true));
			}
		}
		$stores = $this->Category->Store->find('list',array('fields'=>'id,store_name'));
		$parentCategories = $this->Category->find('list',array('fields'=>'id,category_name'));
		$this->set(compact('stores', 'parentCategories'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid category', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data))
		{
				// Upload Image and Thumbnail
			if(!empty($this->data['Category']['category_image']['name'])):
			
			$image_path = $this->Image->upload_image_and_thumbnail($this->data,"category_image",573,150,"categories",true,'Category');
			$this->data['Category']['category_image']=$image_path;
			
			else:
				unset($this->data['Category']['category_image']);
			endif;
			
			$this->Category->set($this->data);
			if ($this->Category->save($this->data))
			{
				$this->Session->setFlash(__('The category has been saved', true));
				$this->redirect(array('action' => 'index'));	
			}
			else
			{
				$this->Session->setFlash(__('The category could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Category->read(null, $id);
		}
		$stores = $this->Category->Store->find('list',array('fields'=>'id,store_name'));
		
		$parentCategories = $this->Category->find('list',array('fields'=>'id,category_name','conditions'=>array('store_id'=>$this->data['Category']['store_id'])));
		
		$this->set(compact('stores', 'parentCategories'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for category', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Category->delete($id)) {
			$this->Session->setFlash(__('Category deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Category was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function getParentCategories()
	{
		if(!empty($this->data)):
			$store_id=$this->data['Category']['store_id'];
			//$parentCategories = $this->Category->find('list',array('fields'=>'id,category_name','conditions'=>array('store_id'=>$store_id)));
			$parentCategories =$this->_categoryTree(0,$store_id);
			
			$this->set(compact('parentCategories'));
		endif;
	}
	
	function getParentCategory($id=null)
	{
		if(!empty($id)):
			return $this->Category->findByid($id);
		elseif($id==0):
			return "Root";
		endif;
	}
	
	function _categoryTree($id=0,$sid=null)
		 {
		   //$this->layout='backend';		
		 static $cats=array();
		 static $count=0;
		   $count++;
		   #chrk
		   // select * from table where parent_id=$id
		  $res=$this->Category->find('all',array('conditions'=>'parent_id='.$id.' and store_id='.$sid,'order'=>'category_name'));
	      //pr($res);
		   #to get the parent key of the respected fetched row
		  for($i=0;$i<count($res);$i++)
			   {
				  if($res[$i]['Category']['parent_id']==0)
				  {
				    $cats[$res[$i]['Category']['id']]=$res[$i]['Category']['category_name'];
				  
				  }
				  else
				  {
				 $aaa = str_repeat("--",$count-1)."--".$res[$i]['Category']['category_name'];
				    $cats[$res[$i]['Category']['id']]=$aaa;
				  }
		             $this->_categoryTree($res[$i]['Category']['id'],$sid);
			   } 
	  	       $count--;
						       		   
			  return $cats;
		
		}
		
}
?>