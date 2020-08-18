
<a href="inserir">Cadastrar Nova Notícia</a>

<form>
	<table>
		<tr>
			<td>Título</td>
			<td>Imagem</td>
			<td>Texto</td>	
			<td>Editar</td>		
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


</form>