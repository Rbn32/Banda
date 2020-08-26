<div class="post_field">
	<div class="link_listar">
		<a class="link" href="listar">Listar imagens</a>
		<a class="link" href="inserir">Inserir nova imagem</a>
	</div>
	<form action="" method="POST">
		<div class="form-group">
			<label>Titulo</label>
			<input class="field form-control" value="<?php echo $this->dadosAtuais[0]['title'];?>" type="text" name="title">
		</div>
		<div class="form-group">
			<label>Imagem</label>
			<input class="field form-control" value="<?php echo $this->dadosAtuais[0]['image'];?>" type="text" name="image">
		</div>
		<div>
			<button class="btn-default">Salvar</button>
		</div>
	</form>
</div>