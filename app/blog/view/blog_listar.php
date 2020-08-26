<div class="post_field">
	<div class="link_listar">
		<a class="link" href="inserir">Cadastrar nova turnê</a>
	</div>
	<form>
		<table class="table table-borderless">
			<tr>
				<td><strong>Título</strong></td>
				<td><strong>Imagem</strong></td>
				<td><strong>Texto</strong></td>	
				<td><strong>Editar</strong></td>		
			</tr>

			<?php foreach ($this->dadosAtuais as $value) { ?>
				<tr>
					<td><?php echo $value['title']?></td>
					<td><?php echo $value['image']?></td>
					<td><?php echo $value['text']?></td>
					<td><a href="editar?id=<?php echo $value['idblog']?>">Editar</a></td>
					<td><a href="deletar?id=<?php echo $value['idblog']?>">Deletar</a></td>
				</tr>
			<?php } ?>
		</table>
	</form>
</div>
