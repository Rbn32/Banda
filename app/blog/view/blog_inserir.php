<div class="post_field">
	<div class="link_listar">
		<a class="link" href="listar">Listar notícias</a>
	</div>
	<form method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label>Titulo</label>
			<input class="field form-control" type="text" name="title">
		</div>
		<div class="form-group">
			<label>Imagem</label>
			<input type="file" name="image">
		</div>
		<div class="form-group">
			<label>Texto</label>
			<textarea class="field form-control" name="text" cols="45" rows="6" ></textarea>
		</div>
		<div>
			<button class="btn-default">Salvar</button>
		</div>
	</form>
</div>