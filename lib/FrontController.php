<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include "functions.php";
include "ControllerBase.php";
include "ModelBase.php";

foreach (scandir(dirname(__FILE__).'/orm/') as $filename) {
    $path = dirname(__FILE__) . '/orm/' . $filename;
    if (is_file($path) and $filename != 'field.php') {
        include_once $path;
//        echo 'including '.$path.'<br>';
    }
}


class AdminController
{
	static function main()
	{
 
        mb_internal_encoding("UTF-8");
		require 'lib/Config.php'; //de configuracion
		require 'lib/SPDO.php'; //PDO con singleton
		require 'lib/View.php'; //Mini motor de plantillas
              
		require 'config.php'; //Archivo con configuraciones.
 
 	print_r(gett());
 		$config->set('controllersFolder',"admin/controllers/");
 		
        $config->set('modelsFolder',"admin/models/");
        $config->set('viewsFolder', "admin/views/"); 		
 		/* Language */
        require 'language/'.$config->get('lang').'.php';
	    if (!isset($_SERVER['return_url'])) $_SERVER['return_url'] ='';
        $PATH = dirname(__FILE__);

		if(get_param('p') != -1) $controllerName = get_param('p')  . 'Controller';
		else  $controllerName = "showController";
 
		if(get_param('m') != -1) $actionName = get_param('m');
		else $actionName = "table";
                	
		$controllerPath = $config->get('controllersFolder') . $controllerName . '.php';

        $fingerprint = md5($_SERVER['HTTP_USER_AGENT']."GYH");
    	if (!isset($_SESSION['initiated_admin']) or !$_SESSION['initiated_admin'] or !isset($_SESSION['HTTP_USER_AGENT']) or  $_SESSION['HTTP_USER_AGENT'] != $fingerprint ){
			
			require($config->get('controllersFolder') .'loginController.php');
    		$controller = new loginController();
    		/*
if ($controllerName != 'loginController'){
    		$controller->index();
			} else { 
    		$controller->login();
				
			}
*/
		}
		
 	/*
if (isset($_SESSION['HTTP_USER_AGENT']) and $_SESSION['HTTP_USER_AGENT'] != $fingerprint) session_destroy();
    	} else {
         
     
    		if(is_file($controllerPath)) require $controllerPath;
    		else  die('El controlador '.$controllerPath.' no existe - 404 not found');
    		      
    		if (is_callable(array($controllerName, $actionName)) == false){
    			trigger_error ($controllerName . '->' . $actionName . '` no existe', E_USER_NOTICE);
    			return false;
    		}
    
        
        	
    		$controller = new $controllerName();
    		$controller->$actionName();
		}
*/
	}
    
 
   

}
?>