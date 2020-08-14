<?php

include "app/blog/model/blog_model.php";

class blog extends controller{
	
	var $model;	

	function __construct(){

		$this->model = new blog_model;
	}

	function inserir(){

		if ($_POST) {
			
			$this->model->insertBlogdados($_POST);
		}

		$this->setView("blog_inserir");
	}

	function listar(){

		$this->dadosAtuais = $this->model->getBlogdados();
		
		$this->setView("blog_listar");
	}

	function editar(){

		$this->setView("blog_editar");
	}
}
