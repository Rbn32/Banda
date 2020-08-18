<table>
	<a href="inserir">Inserir novo slider</a>
	<div>
		<tr>
			<td>Titulo</td>
			<td>Subtitulo</td>
			<td>Imagem</td>
			<td>Video</td>	
		</tr>
	</div>
	<div>
		<?php foreach ($this->dadosAtuais as $value) { ?>

		<tr>
			<td><?php echo $value['title']?></td>
			<td><?php echo $value['subtitle']?></td>
			<td><?php echo $value['image']?></td>
			<td><?php echo $value['video']?></td>
			<td><a href="editar?id=<?php echo $value['idslider'];?>">Editar</a></td>
			<td><a href="deletar?id=<?php echo$value['idslider'];?>">Deletar</a></td>	
		</tr>

		<?php } ?>

	</div>
</table>