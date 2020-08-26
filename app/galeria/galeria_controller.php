<?php

include "app/galeria/model/galeria_model.php";

class galeria extends controller{
	
	var $model;

	function __construct(){
		
		$this->model = new galeria_model;
	}

	function inserir(){

	if ($_POST) {
			
			$image = $_FILES['image'];

			$dados = $_POST;

			$dados['image'] = time().$image['name'];

			move_uploaded_file($image['tmp_name'], getcwd()."/img/galeria/".$dados['image']);

			$this->model->insertGaleriadados($dados);
		}

		$this->setView("galeria_inserir");
	}

	function listar(){

		$this->dadosAtuais = $this->model->getGaleriadados();
		
		$this->setView("galeria_listar");
	}

	function editar(){


		if ($_POST) {

			if (isset($_GET["id"])) {
						
				 $image = $_FILES['image'];

				 $dados = $_POST;

				 $dados['image'] = time().$image['name'];
				
				$this->model->updateGaleriadados($_POST, $_GET['id']);
				
				move_uploaded_file($image['tmp_name'], getcwd()."/img/galeria/".$dados['image']);
			}	

				header("Location: ".$this->path." listar");					
		}

		$this->dadosAtuais = $this->model->editarDadosAtuais($_GET['id']);

		$this->setView("galeria_editar");		
	}

	function deletar(){

		$this->model->deleteGaleriadados($_GET['id']);
	
		header("location: ".$this->path."listar");

	}	
}