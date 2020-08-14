
<a href="blog/inserir">Cadastrar Nova Notícia</a>

<form>
	<table>
		<tr>
			<td>Título</td>
			<td>Imagem</td>
			<td>Texto</td>			
		</tr>

		<?php foreach ($this->dadosAtuais as $value) { ?>

		<tr>
			<td><?php echo $value['title']?></td>
			<td><?php echo $value['image']?></td>
			<td><?php echo $value['text']?></td>
			<a href="editar?<?php echo $value?>"></a>
			<a href=""></a>
		</tr>

		<?php } ?>


</form>