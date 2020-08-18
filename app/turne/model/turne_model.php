<?php

class turne_model extends mysql{
	
	function getTurnedados(){
		
		return $this->read("select * from tour");
	}

	function getDadosatuais($id){

		return $this->read("SELECT * FROM tour WHERE idtour = $id");
	}

	function insertTurnedados($dados){

		return $this->save("INSERT INTO tour (date, local, information) VALUES ('".$dados['date']."', '".$dados['local']."', '".$dados['information']."')");
	}

	function updateTurnedados($dados, $id){

		return $this->update("UPDATE tour SET date = '".$dados['date']."', local = '".$dados['local']."', information = '".$dados['information']."' WHERE idtour = $id");
	}

	function deleteTurnedados(){

		return $this->delete("delete FROM tour where idtour = $id");

		header("Locatiion: ".$this->path." listar");
	}
}