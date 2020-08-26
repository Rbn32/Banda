<?php

include "app/slider/model/slider_model.php";

class slider extends controller{
		
	var $model;

	function __construct(){
		
		$this->model = new slider_model;
	}

	function inserir(){

		if ($_POST) {

			$image = $_FILES['image'];

			$dados = $_POST;

			$dados['image'] = time().$image['name'];

			move_uploaded_file($image['tmp_name'], getcwd() . "/img/slider/" . $dados['image']);

			$this->model->insertSliderdados($dados);
		}
			
		$this->setView("slider_inserir");
	}

	function listar(){

		$this->dadosAtuais = $this->model->getSliderdados();

		$this->setView("slider_listar");
	}

	function editar(){

		if ($_POST) {

			if (isset($_GET["id"])) {
				
				$image = $_FILES['image'];

				$dados = $_POST;

				$dados['image'] = time().$image['name'];

				$this->model->updateSliderdados($_POST, $_GET['id']);

				move_uploaded_file($image['tmp_name'], getcwd() . "/img/slider/" . $dados['image']);			
			}

			header("Location: ".$this->path." listar");
		}

		$this->dadosEditar = $this->model->getDadosatuais($_GET['id']);

		$this->setView("slider_editar");

	}

	function deletar(){

		$this->model->deletar($_GET['id']);

		header("location: ".$this->path."listar");

	}


}

