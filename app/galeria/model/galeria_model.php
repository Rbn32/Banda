<?php

/**
 * 
 */
class galeria_model extends mysql
{
	
	function getGaleriadados(){
		
		return $this->read("select * from galery");
	}

	function insertGaleriadados(){

		return $this->save("insert into galery (image) VALUES ('".$_POST['###']."')");
	}

	function updateGaleriadados(){

		return $this->update("update galery SET image = '".$_POST['###']."' where idimage = '".$_GET['id']."'");	
	}

	function deleteGaleriadados(){

		return $this->delete("delete FROM galery where idimage = '".$_GET['id']."'");	
	}
}


