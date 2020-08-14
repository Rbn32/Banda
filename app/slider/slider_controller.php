<?php

include "app/slider/model/slider_model.php";

class slider extends controller{
		
	var $model;

	function __construct(){
		
		$this->model = new slider_model;
	}

	function inserir(){

		$this->model->database();

		$this->setView("slider_inserir");
	}

	function listar(){

		$this->setView("slider_listar");
	}

	function editar(){

		$this->setView("slider_editar");
	}

}

