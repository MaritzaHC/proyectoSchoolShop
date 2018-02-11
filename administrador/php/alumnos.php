<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\barraInicio.css">
	<link rel="stylesheet" type="text/css" href="..\css\barraBuscar.css">
	<script type="text/javascript" src="..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesAdministrador.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<?php include '..\paginas\barraInicio.html'; ?>
<div class="contenido">
	<div class="arriba">
		<div class="boton">Bloqueados</div>
		<div class="barraBuscar">
			<input type="text" name="" size="40">
			<img src="..\..\imagenes\buscar.png"><!--PENDIENTE PHP-->
		</div>
	</div>
	<div class="abajo">
		<div class="resultado" onclick="irPagina('informacionAlumno')">
			<p>Nombre</p>
			<p>Registro</p>
		</div>
		<div class="resultado">
			<p>Nombre</p>
			<p>Registro</p>
		</div>
		<div class="resultado">
			<p>Nombre</p>
			<p>Registro</p>
		</div>

	</div>
</div>
<script type="text/javascript">
	$(".alumnos p").css({"background-color":"#fffade", "color":"#af5145"});	
</script>
</body>