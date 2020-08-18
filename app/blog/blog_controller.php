<?php

include "app/blog/model/blog_model.php";

class blog extends controller{
	
	var $model;	

	function __construct(){

		$this->model = new blog_model;
	}

	function inserir(){

		if ($_POST) {
			
			$dados = $_FILES['image'];

			move_uploaded_file($dados['tmp_name'], "../../img/blog/".$dados['image']);

			$this->model->insertBlogdados($_POST);
		}

		$this->setView("blog_inserir");
	}

	function listar(){

		$this->dadosAtuais = $this->model->getBlogdados();
		
		$this->setView("blog_listar");
	}

	function editar(){

		if ($_POST) {
	
			$this->model->updateBlogdados($_POST, $_GET['id']);

			header("Location: ".$this->path." listar");
		
		}

		$this->dadosAtuais = $this->model->getDadosatuais($_GET['id']);

		$this->setView("blog_editar");
	}

	function deletar(){

		$this->model->deleteBlogdados($_GET['id']);

		header("location: ".$this->path."listar");
	}

}
