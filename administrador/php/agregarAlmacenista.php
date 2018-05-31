<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\barraInicio.css">
	<link rel="stylesheet" type="text/css" href="..\css\agregarCuentas.css">
	<script type="text/javascript" src="..\..\javaScript\general.js"></script>
	<script type="text/javascript" src="..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesAdministrador.js"></script>
	<meta charset="utf-8">
</head>
<body>

<?php include '..\paginas\barraInicio.php'; ?>

<div class="contenido">
	<div class="informacionAlmacenista">
		<form action="base/agregarAlmacenista.php" method="POST">
		<p>Nombre</p>
		<input type="text" name="nombre" size="30" required="required">
		<p>Ubicacion</p>
		<input type="text" name="ubicacion" size="40" required="required">
		<p>Contraseña</p>
		<input type="password" name="contrasena" required="required">
		<p>Confirmar contraseña</p>
		<input type="password" name="contrasenaC" required="required"><br>
		<input type="submit" value="Guardar" class="boton">
	</div>
	<div class="imagenCuenta"><img src="caja.png"></div></form>
</div>
<script type="text/javascript">
	$(".almacenistas p").css({"background-color":"#fffade", "color":"#af5145"});	
</script>
</body>