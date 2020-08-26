<div class="post_field">
	<div class="link_listar">
		<a class="link" href="inserir">Criar nova turnê</a>
	</div>
	<form>
		<table class="table table-borderless">
			<tr>
				<td><strong>Data</strong></td>
				<td><strong>Local</strong></td>
				<td><strong>Informação</strong></td>
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