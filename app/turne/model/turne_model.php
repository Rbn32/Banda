<?php

class turne_model extends mysql
{
	
	function getTurnedados(){
		
		return $this->read("select * from tour");
	}

	function insertTurnedados(){

		return $this->save("insert into tour (date, local, information) VALUES ('".$_POST['###']."', '".$_POST['###']."', '".$_POST['###']."')");
	}

	function updateTurnedadaos(){

		return $this->update("update tour 
			SET date = '".$_POST['###']."', local = '".$_POST['###']."', information = '".$_POST['###']."' where idtour = '".$_GET['id']."'");
	}

	function deleteTurnedados(){

		return $this->delete("delete FROM tour where idtour = '".$_GET['id']."' ");
	}
}