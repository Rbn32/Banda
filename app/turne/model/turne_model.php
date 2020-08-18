<?php

class turne_model extends mysql{
	
	function getTurnedados(){
		
		return $this->read("SELECT * FROM tour");
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

	function deleteTurnedados($id){ 

		return $this->delete("DELETE FROM tour WHERE idtour = $id");

		header("Locatiion: ".$this->path." listar");
	}
}