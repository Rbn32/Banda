<?php

include "app/galeria/model/galeria_model.php";

class galeria extends controller{
	
	var $model;

	function __construct(){
		
		$this->model = new galeria_model;
	}

	function inserir(){

		$this->model->database();

		$this->setView("galeria_inserir");
	}

	function listar(){

		$this->setView("galeria_listar");
	}

	function editar(){

		$this->setView("galeria_editar");
	}
}