<?php
/**
* @author baloran
* @link http://baloran.fr
*/

class Overall{
	
	/**
	* Permet de rooter les urls
	* 
	*/
	public static function url(){
		require_once 'app/controller/A_controller.php';
		require_once 'core/class/auth.class.php';
		include 'core/class/db.class.php';
		
		if (!empty($_GET['page']) && is_file('app/view/'.$_GET['page'].'.php'))
		{
	        include 'app/view/includes/header.php';
	        if (is_file('app/controller/'.$_GET['page'].'.php')) {
	        	include 'app/controller/'.$_GET['page'].'.php';
	        }
	        	include 'app/view/'.$_GET['page'].'.php';
			}
			else{
		        include 'app/view/includes/header.php';
		        include 'app/view/index.php';
			}
	}
}
