<div class="post_field">
	<div class="link_listar">
		<a class="link" href="listar">Listar notícias</a>
		<a class="link" href="inserir">Inserir nova notícia</a>
	</div>
	<form method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label>Titulo</label>
			<input class="field form-control" value="<?php echo $this->dadosAtuais[0]['title'];?>" type="text" name="title">
		</div>
		<div class="form-group">
			<label>Imagem</label>
			<input type="file" name="image">
			<input class="field form-control" value="<?php if (isset($this->dadosAtuais[0]['image'])) echo($this->dadosAtuais[0]['image']);?>" type="hidden" name="image">

			<?php if (isset($this->dadosAtuais[0]['image'])) { ?>
				<img src="../img/blog/<?php echo $this->dadosAtuais[0]['image'];?>" width= "250">
			<?php } ?>
			
		</div>
		<div class="form-group">
			<label>Texto</label>
			<textarea class="field form-control" name="text" cols="45" rows="6" ><?php echo $this->dadosAtuais[0]['text'];?></textarea>
		</div>
		<div>
			<button class="btn-default">Salvar</button>
		</div>
	</form>
</div>
<!-- 
if(isset($this->dadosAtuais[0]['image'])) -->