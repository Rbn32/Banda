<div class="post_field">
	<div class="link_listar">
		<a class="link" href="listar">Listar slider</a>
		<a class="link" href="inserir">Inserir novo slider</a>
	</div>
	<form method="POST" enctype="multipart/form-data">
		<div>
			<label>titulo</label>
			<input class="field form-control" value="<?php echo $this->dadosEditar[0]['title']?>" type="text" name="title">
		</div>
		<div>
			<label>Subtitulo</label>
			<input class="field form-control" value="<?php echo $this->dadosEditar[0]['subtitle']?>" type="text" name="subtitle">
		</div>
		<div>
			<label>Imagem</label>
			<input type="file" name="image">
			<input value="<?php if (isset($this->dadosEditar[0]['image'])) echo($this->dadosEditar[0]['image']);?>" type="hidden" name="image">

			<?php if (isset($this->dadosEditar[0]['image'])) { ?>
				<img src="../img/slider/<?php echo $this->dadosEditar[0]['image'];?>" width= "250">
			<?php } ?>
		</div>
		<div>
			<label>Video</label>
			<input class="field form-control" value="<?php echo $this->dadosEditar[0]['video']?>" type="text" name="video">
		</div>
		<div>
			<button class="btn-button">Enviar</button>
		</div>
	</form>
</div>
