<?php

include "app/turne/model/turne_model.php";

class turne extends controller{
	
	var $model;

	function __construct(){
		
		$this->model = new turne_model;
	}

	function inserir(){

		$this->model->database();

		$this->setView("turne_inserir");
	}

	function pastel(){

		$this->dados = $this->model->getTurnedados();

		$this->setView("turne_listar");
	}

	function editar(){

		$this->setView("turne_editar");
	}
}

