<!DOCTYPE html>

<html lang="PT-BR">

<head>

	<title>banda</title>

	<meta charset="utf-8">
	
	<link rel="stylesheet" 
			href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" 
			integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" 
			crossorigin="anonymous">
	
	<link rel="stylesheet" 
			href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" 
			integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" 
			crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../resourcers/css/style_turne.css">

</head>

<body>
	<div class="empty"></div>

	<div class="container adm">
		<img src="../img/tama.jpg">
		<div style="margin-left: 800px;">
			<div class="link_button"><a class="link_painel" href="../turne/inserir"><strong>Turnes</strong></a></div>

			<div class="link_button"><a class="link_painel" href="../blog/inserir"><strong>Blog</strong></a></div>

			<div class="link_button"><a class="link_painel" href="../galeria/inserir"><strong>Galeria</strong></a></div>

			<div class="link_button"><a class="link_painel" href="../slider/inserir"><strong>Slider</strong></a></div>
		</div>
	</div>

	<div class="empty"></div>

	<section>
		<div>
			<?php $controller->getHtml($params[0]);?>
 		</div>
	</section>



</body>
</html>