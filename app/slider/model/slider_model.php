<?php



class slider_model extends mysql
{
	
	function getSliderdados(){
		
		return $this->read("select * from slider");
	}

	function insertSliderdados($dados){

		return $this->save("insert into slider (title, subtitle, image, video) 

			VALUES ('".$dados['title']."', '".$dados['subtitle']."', '".$dados['image']."', '".$dados['video']."')
			");
	}

	function updateSliderdados($dados, $id){

		return $this->update("

			UPDATE slider 

			SET title = '".$dados['title']."', subtitle = '".$dados['subtitle']."', image = '".$dados['image']."', video = '".$dados['video']."' 

			WHERE idslider = $id

			");
	}

	function deleteSliderdados(){

		return $this->delete("delete FROM slider where idslider = '".$_POST['id']."'");
	}

	function getDadosatuais($id){

		return $this->read("SELECT * FROM slider WHERE idslider = $id");

	}

	function deletar($id){

		return $this->delete("DELETE FROM slider WHERE idslider = $id");

		header("Location: ".$this->path."listar");
	}

}



