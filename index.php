<?php 
	//função utilizada para dar include quando instanciar uma nova classe//
	//parametro classname é o nome da classe.//
	
	require_once "core/controller.php";
	require_once "core/mysql.class.php";

	function MyAutoload($className) {
	    $extension =  spl_autoload_extensions();
	    $path = __DIR__ . '/app/' . $className ."/". $className . $extension;
	    	
    	if (file_exists($path)) {

    		require_once ($path);

    	}
	    
	}
	spl_autoload_extensions('_controller.php');
	spl_autoload_register('MyAutoload');


	$page = $_GET['page'];
		
		//turne/listar

	$params = explode("/", $page);

		//Array ( [0] => turne [1] => listar [2] )

	$controller = new $params[0];
	$action = $params[1];
	$controller->$action();

	include "layout.php";



