<div class="post_field">
	<div class="link_listar">
		<a class="link" href="inserir">Inserir novo slider</a>
	</div>
	<div>
	<form>
		<table class="table table-borderless">
			<tr>
				<td><strong>Titulo</strong></td>
				<td><strong>Subtitulo</strong></td>
				<td><strong>Imagem</strong></td>
				<td><strong>Video</strong></td>	
			</tr>
			<?php foreach ($this->dadosAtuais as $value) { ?>
				<tr>
					<td><?php echo $value['title']?></td>
					<td><?php echo $value['subtitle']?></td>
					<td><?php echo $value['image']?></td>
					<td><?php echo $value['video']?></td>
					<td><a href="editar?id=<?php echo $value['idslider'];?>">Editar</a></td>
					<td><a href="deletar?id=<?php echo$value['idslider'];?>">Deletar</a></td>	
				</tr>
			<?php }?>
		</table>
	</form>
</div>
