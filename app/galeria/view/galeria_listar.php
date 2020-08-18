<a href="inserir">Criar uma nova imagem</a>

<form action="" method="">
	<table>	
		<tr>
			<td>Titulo</td>
			<td>imagem</td>
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