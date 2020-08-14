<?php



class slider_model extends mysql
{
	
	function getSliderdados(){
		
		return $this->read("select * from slider");
	}

	function insertSliderdados(){

		return $this->save("insert into slider (title, subtitle, image, video) 

			VALUES ('".$_POST['###']."', '".$_POST['###']."', '".$_POST['###']."', '".$_POST['###']."')
			");
	}

	function updateSliderdados(){

		return $this->update("update slider 

			SET title = '".$_POST['###']."', subtitle = '".$_POST['###']."', image = '".$_POST['###']."', video = '".$_POST['###']."'");
	}

	function deleteSliderdados(){

		return $this->delete("delete FROM slider where idslider = '".$_POST['id']."'");
	}
}



