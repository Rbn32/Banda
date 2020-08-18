<?php

include "app/slider/model/slider_model.php";

class slider extends controller{
		
	var $model;

	function __construct(){
		
		$this->model = new slider_model;
	}

	function inserir(){

		if ($_POST) {

			$this->model->insertSliderdados($_POST);
		}
		
		$this->setView("slider_inserir");
	}

	function listar(){

		$this->dadosAtuais = $this->model->getSliderdados();

		$this->setView("slider_listar");
	}

	function editar(){

		if ($_POST) {
			
			$this->model->updateSliderdados($_POST, $_GET['id']);

		}

		$this->dadosEditar = $this->model->getDadosatuais($_GET['id']);

		$this->setView("slider_editar");

	}

	function deletar(){

		$this->model->deletar($_GET['id']);

		header("location: ".$this->path."listar");

	}


}

