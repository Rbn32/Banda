<form action="" method="POST">
	<a href="listar">Listar imagens</a>
	<a href="inserir">Inserir imagens</a>
	<div>
		<label>Titulo</label>
		<input value="<?php echo $this->dadosAtuais[0]['title'];?>" type="text" name="titulo">
	</div>
	<div>
		<label>Imagem</label>
		<input value="<?php echo $this->dadosAtuais[0]['image'];?>" type="text" name="imagem">
	</div>
	<div>
		<button>Enviar</button>
	</div>
</form>