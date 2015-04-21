<?php
class AppHelper extends Helper
{
	var $helpers=array('Session');
	
	function hasPermission($url) {
 
        if (!is_array($url)) {
          return false;
        }
    
        extract($url);
        
        if(isset($plugin)) {
            $plugin = Inflector::camelize($plugin);
        }
        
        if (!isset($controller)) {
          $controller = $this->params['controller'];
        }   
        $controller = Inflector::camelize($controller);
    
        if (!isset($action)) {
          $action = $this->params['action'];
        }
    
        $_admin = Configure::read('Routing.admin');
		
        if ((!empty(${$_admin}) && ${$_admin}) || isset($this->params['action'][$_admin])) {
       //   $action = $_admin.'_'.$action;
		  
        }
    
        if(isset($plugin) and !empty($plugin)) {
            $controller = $plugin.'/'.$controller;
        }
        
        $permission = 'controllers/'.$controller.'/'.$action;
    	
	
        return in_array($permission, $this->Session->read('Auth.Permissions'));
 
    }
}
?>