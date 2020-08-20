<div class="main">
	<div class="link_view">
		<a class="link" href="inserir">Criar nova turnê</a>
	</div>
	<form>
		<table>
			<tr>
				<td>data</td>
				<td>local</td>
				<td>informação</td>
			</tr>
			<?php foreach ($this->dadosAtuais as $value){ ?>
				<tr>
					<td><?php echo $value['date'];?></td>
					<td><?php echo $value['local'];?></td>
					<td><?php echo $value['information'];?></td>
					<td><a href="editar?id=<?php echo $value['idtour']?>">Editar</a></td>
					<td><a href="deletar?id=<?php echo $value['idtour']?>">Deletar</a></td>
				</tr>
			<?php }?>
		</table>
	</form>
</div>