<?php

class galeria_model extends mysql
{
	
	function getGaleriadados(){
		
		return $this->read("select * from galery");
	}

	function insertGaleriadados($dados){

		return $this->save("insert into galery (title, image) VALUES ('".$dados['title']."', '".$dados['image']."')");
	}

	function updateGaleriadados($dados, $id){

		return $this->update("UPDATE galery SET title = '".$dados['title']."', image = '".$dados['image']."' WHERE idimage=$id ");	

	}

	function deleteGaleriadados($id){

		return $this->delete("DELETE FROM galery where idimage = $id");	
	}

	function editarDadosAtuais($id){

		return $this->read("SELECT * FROM galery where idimage = $id");

	}
}


