<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\barraInicio.css">
	<link rel="stylesheet" type="text/css" href="..\css\lugares.css">
	<script type="text/javascript" src="..\..\javaScript\general.js"></script>
	<script type="text/javascript" src="..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesAdministrador.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<?php include '..\paginas\barraInicio.html';
	include '..\..\paginas\emergentes.html'; ?>
<div class="contenido">
	<div class="listadoCategorias">
		<p>Listado de lugares</p>
		<div class="cuadro">
			<div class="categoria">
				<p>Nombre de los lugares</p>
				<img onclick="popup(1,'seguro',0)" src="../../imagenes/basura.png">
			</div>
		</div>
	</div>
	<div class="agregarCategoria">
		<p>Nombre del lugar</p>
		<input type="text" name="filtro"><br>
		<div class="boton">Agregar</div>
	</div>
</div>
<script type="text/javascript">
	$(".lugares p").css({"background-color":"#fffade", "color":"#af5145"});	
</script>
</body>