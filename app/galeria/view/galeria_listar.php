<div class="post_field">
	<div class="link_listar">
		<a class="link" href="inserir">Inserir nova imagem</a>
	</div>
	<form>
		<table class="table table-borderless">	
			<tr>
				<td><strong>Titulo</strong></td>
				<td><strong>imagem</strong></td>
			</tr>
			<?php foreach ($this->dadosAtuais as $value) { ?>
				<tr>
					<td><?php echo $value['title'];?></td>
					<td><?php echo $value['image'];?></td>
					<td><a href="editar?id=<?php echo $value['idimage']?>">Editar</a></td>
					<td><a href="deletar?id=<?php echo $value['idimage']?>">Deletar</a></td>
				</tr>
			<?php } ?>
		</table>
	</form>
</div>