<?php


class controller{
	
	var $view;

	function getHtml($controller){

		return include "app/" . $controller . "/view/" . $this->view . ".php";
		
	}

	function setView($v){

		$this->view = $v;

	}
}