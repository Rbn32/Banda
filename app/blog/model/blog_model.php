<?php

class blog_model extends mysql
{
	function getBlogdados(){
		
		return $this->read("select * from blog");
	}

	function insertBlogdados($dados){

		return $this->save("insert into blog (title, image, text) VALUES('".$dados['title']."', '".$dados['image']."', '".$dados['text']."')");
	}

	function updateBlogdados($dados){

		return $this->update("update blog SET title = '".$dados['###']."', image = '".$dados['###']."', text = '".$dados['###']."'" );
	}

	//function deleteBlogdados($id){

		//return $this->delete("delete FROM blog where idblog = ".$dados.['id']"");
	//}
}