<a href="inserir">Criar nova turnê</a>

<table>
	<tr>
		<td>data</td>
		<td>local</td>
		<td>informação</td>
	</tr>
	<?php foreach ($this->dadosAtuais as $value){ ?>
		<tr>
			<td><?php echo $this->dadosAtuais[0]['date'];?></td>
			<td><?php echo $this->dadosAtuais[0]['local'];?></td>
			<td><?php echo $this->dadosAtuais[0]['information'];?></td>
			<td><a href="editar?id=<?php echo $value['idtour']?>">Editar</a></td>
			<td><a href="deletar?id=<?php echo $value['idtour']?>">Deletars</a></td>
		</tr>
	<?php }?>
</table>