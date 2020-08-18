<?php

class blog_model extends mysql
{
	function getBlogdados(){
		
		return $this->read("select * from blog");
	}

	function insertBlogdados($dados){

		return $this->save("insert into blog (title, image, text) VALUES('".$dados['title']."', '".$dados['image']."', '".$dados['text']."')");
	}

	function updateBlogdados($dados, $id){

		return $this->update("

			UPDATE blog SET title = '".$dados['title']."', image = '".$dados['image']."', text = '".$dados['text']."' WHERE idblog=$id

			");
	}

	function getDadosatuais($id){

		return $this->read("select * from blog where idblog = $id");
	}

	function deleteBlogdados($id){

		return $this->delete("DELETE FROM blog WHERE idblog = $id");
	}
}