<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\vcpo.css">
	<script type="text/javascript" src="..\..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\..\javaScript\general.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesEstudiante.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<?php include '..\paginas\primeraBarra.html'; 
	require 'base\compras.php'; ?>
<div class="contenido">
	<?php include '..\paginas\menui.html'; ?>
	<div class="Ventas">
		<div class="Titulo"><p>Compras</p></div>

			<?php compras();
				?>	
				
		</div>
	</div>
	
</div>
</body>