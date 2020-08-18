<form method="POST">
	<a href="listar">Listar Notícias</a></br>
	<a href="inserir">inserir nova notícias</a>
	<div>
		<label>Titulo</label>
		<input value="<?php echo $this->dadosAtuais[0]['title'];?>" type="text" name="title">
	</div>
	<div>
		<label>Imagem</label>
		<input value="<?php echo $this->dadosAtuais[0]['image'];?>" type="text" name="image">
	</div>
	<div>
		<label>Texto</label>
		<input value="<?php echo $this->dadosAtuais[0]['text'];?>" type="textarea" name="text">
	</div>
	<div>
		<button>Enviar</button>
	</div>
</form>