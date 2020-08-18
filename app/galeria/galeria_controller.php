<?php

include "app/galeria/model/galeria_model.php";

class galeria extends controller{
	
	var $model;

	function __construct(){
		
		$this->model = new galeria_model;
	}

	function inserir(){

		if ($_POST){

			$this->model->insertGaleriadados($_POST);

		}
		
		$this->setView("galeria_inserir");
	}

	function listar(){

		$this->dadosAtuais = $this->model->getGaleriadados();
		
		$this->setView("galeria_listar");
	}

	function editar(){

		if ($_POST){

			$this->model->updateGaleriadados($_POST, $_GET['id']);

		}

		$this->dadosAtuais = $this->model->editarDadosAtuais($_GET['id']);

		$this->setView("galeria_editar");
	}

	function deletar(){

		$this->model->deleteGaleriadados($_GET['id']);
	
		header("location: ".$this->path."listar");

	}	
}