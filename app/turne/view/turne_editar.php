<div class="post_field">
	<div class="link_listar">
		<a class="link" href="listar">Listar turnes</a>
		<a class="link" href="inserir">Inserir nova turnê</a>
	</div>
	<form method="POST">
		<div class="form-group">
			<label>Data</label>
			<input class="data form-control" value="<?php echo $this->dadosAtuais[0]['date'];?>" type="date" name="date">
		</div>
		<div class="form-group">
			<label>Local</label>
			<input class="field form-control" value="<?php echo $this->dadosAtuais[0]['local'];?>" type="text" name="local">
		</div>
		<div class="form-group">
			<label>Informação</label>
			<textarea class="field form-control" name="information" cols="45" rows="6" ><?php echo $this->dadosAtuais[0]['information'];?></textarea>
		</div>	
		<div>
			<button class="btn-default">Salvar</button>
		</div>
	</form>
</div>
