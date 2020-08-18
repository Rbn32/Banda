<a href="listar">Listar Sliders</a></br>
<a href="inserir">Inserir novo slider</a>

<form method="POST">
	
	<div>
		<label>titulo</label>
		<input value="<?php echo $this->dadosEditar[0]['title']?>" type="text" name="title">
	</div>
	<div>
		<label>Subtitulo</label>
		<input value="<?php echo $this->dadosEditar[0]['subtitle']?>" type="text" name="subtitle">
	</div>
	<div>
		<label>Imagem</label>
		<input value="<?php echo $this->dadosEditar[0]['image']?>" type="text" name="image">
	</div>
	<div>
		<label>Video</label>
		<input value="<?php echo $this->dadosEditar[0]['video']?>" type="text" name="video">
	</div>
	<div>
		<button>Enviar</button>
	</div>

</form>