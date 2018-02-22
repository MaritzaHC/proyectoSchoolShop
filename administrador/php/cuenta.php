<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\barraInicio.css">
	<link rel="stylesheet" type="text/css" href="..\css\cuenta.css">
	<script type="text/javascript" src="..\..\javaScript\general.js"></script>
	<script type="text/javascript" src="..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesAdministrador.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<?php include '..\paginas\barraInicio.html'; ?>
<div class="contenido">
	<div class="informacion">
		<p class="nombre">Nombre de la institucion</p>
		<div class="telefono">
			<p>Telefono</p>
			<input type="text" name="telefono" size="10">
		</div>
		<div class="contrasena">
			<p style="margin-bottom: 5px">Nueva contraseña:</p>
			<p>Contraseña anterior</p>
			<input type="text" name="contrasena">
			<p>Nueva contraseña</p>
			<input type="text" name="contrasenaconu">
			<p>Confirmar contraseña</p>
			<input type="text" name="contrasenacon">
		</div>
		<div class="boton">Guardar</div>
	</div>
	<div class="imagenCuenta"><img src="caja.png"></div>
</div>
</body>