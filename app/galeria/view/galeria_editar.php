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
			<input type="file" name="image">
			<input value="<?php if (isset($this->dadosAtuais[0]['image'])) echo($this->dadosAtuais[0]['image']);?>" type="hidden" name="image">

			<?php if (isset($this->dadosAtuais[0]['image'])) { ?>
				<img src="../img/galeria/<?php echo $this->dadosAtuais[0]['image'];?>" width= "250">
			<?php } ?>

		</div>
		<div>
			<button class="btn-default">Salvar</button>
		</div>
	</form>
</div>