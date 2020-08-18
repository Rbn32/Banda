<?php

include "app/turne/model/turne_model.php";

class turne extends controller{
	
	var $model;

	function __construct(){
		
		$this->model = new turne_model;
	}

	function inserir(){

		if ($_POST) {
			
			$this->model->insertTurnedados($_POST);
		}
		
		$this->setView("turne_inserir");
	}

	function listar(){

		$this->dadosAtuais = $this->model->getTurnedados();

		$this->setView("turne_listar");
	}

	function editar(){

		if ($_POST) {
			
			$this->model->updateTurnedados($_POST, $_GET['id']);

			header("Location: ".$this->path." listar");
		}

		$this->dadosAtuais = $this->model->getDadosatuais($_GET['id']);

		$this->setView("turne_editar");
	}

	function deletar(){

		$this->model->deleteTurnedados($_GET['id']);

		header("Location: ".$this->path." listar");

	}

}

