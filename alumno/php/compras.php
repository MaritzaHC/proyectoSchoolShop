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
	<?php include '..\paginas\primeraBarra.html'; ?>
<div class="contenido">
	<?php include '..\paginas\menui.html'; ?>
	<div class="Ventas">
		<div class="Titulo"><p>Compras</p></div>	
			<div class="curso">
				<div class="foto"> <img src="frut.jpg"> </div>
				<div class="resumen">
					<p>Titulo</p>
					<p style="font-family: sans-serif;">Precio</p>
				</div>
				<div class="detalles" onclick="pendiente('lo da php')">Ver detalles</div><!--manda llamar a la publicacion correspondiente-->
			</div>

			<div class="finalizado">
				<div class="foto"><img src=""></div>
				<div class="resumen">
					<div class="resumenTitulo" style="width: 150px;"><p>Titkkkkkkkkkkkkkkkkkkkkkkkkkkulo</p></div>
					<p style="font-family: sans-serif;">Precio</p>
				</div>
				<div class="detalles" onclick="pendiente('lo da php')">Ver detalles</div>
				<div class="boton" id="finalizado">Finalidado</div>
				<div class="eliminar"><img src="..\..\imagenes\basura.png"></div>
			</div>
		</div>
	</div>
	
</div>
</body>