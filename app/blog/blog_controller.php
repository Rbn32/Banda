<?php

include "app/blog/model/blog_model.php";

class blog extends controller{
	
	var $model;	

	function __construct(){

		$this->model = new blog_model;
	}

	function inserir(){

		if ($_POST) {
			
			$image = $_FILES['image'];

			$dados = $_POST;

			$dados['image'] = time().$image['name'];

			move_uploaded_file($image['tmp_name'], getcwd() . "/img/blog/" . $dados['image']);

			$this->model->insertBlogdados($dados);
		}

		$this->setView("blog_inserir");
	}

	function listar(){

		$this->dadosAtuais = $this->model->getBlogdados();
		
		$this->setView("blog_listar");
	}

	function editar(){

		if ($_POST) {

			if (isset($_GET["id"])) {
						
				 $image = $_FILES['image'];

				 $dados = $_POST;

				 $dados['image'] = time().$image['name'];
				
				$this->model->updateBlogdados($_POST, $_GET['id']);
				
				move_uploaded_file($image['tmp_name'], getcwd()."/img/blog/".$dados['image']);
			}	

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
