<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\cuenta.css">
	<script type="text/javascript" src="..\..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\..\javaScript\general.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesAlmacenista.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<?php include '..\paginas\barraInicio.html'; ?>
<div class="contenido">
	<?php include '..\paginas\menu.html'; ?>
	<div class="perfil">
		<div class="imagenPerfil">
			<img src="niche.jpg">
			<div class="agregar"><img src="..\..\imagenes\camara.png"></div>
		</div>
		<div class="info">
			<p>Nombre lugar</p>
			<p>.xxxxx</p><br>
			<p>Ubicacion</p>
			<p>.</p><br>
			<p style="margin-top: 15px">Antigua contraseña</p>
			<input type="password" name="Acontrasena" size="15">
			<p style="margin-top: 15px">Nueva contraseña</p>
			<input type="password" name="Ncontrasena" size="15">
			<p style="margin-top: 15px">Confirmar contraseña</p>
			<input type="password" name="Ccontrasena" size="15">
			<br><br>
			<div class="boton">Guardar</div>
		</div>
	</div>
</div>

</body>