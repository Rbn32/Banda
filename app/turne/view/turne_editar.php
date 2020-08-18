<a href="listar">Listar turnes</a>
<a href="inserir">Criar nova turnê</a>

<form method="POST">
	<div>
		<label>Data</label>
		<input value="<?php echo $this->dadosAtuais[0]['date'];?>" type="text" name="date">
	</div>
	<div>
		<label>Local</label>
		<input value="<?php echo $this->dadosAtuais[0]['local'];?>" type="text" name="local">
	</div>
	<div>
		<label>Informação</label>
		<input value="<?php echo $this->dadosAtuais[0]['information'];?>" type="text" name="information">
	</div>
	<div>
		<button>Enviar</button>
	</div>
</form>