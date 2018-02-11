<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\barraInicio.css">
	<link rel="stylesheet" type="text/css" href="..\css\agregarCuentas.css">
	<script type="text/javascript" src="..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesAdministrador.js"></script>
	<meta charset="utf-8">
</head>
<body>
<?php include '..\paginas\barraInicio.html'; ?>
<div class="contenido">
	<div class="informacionComerciantes">
		<p>Nombre</p>
		<input type="text" name="nombre" size="30">
		<p>Telefono</p>
		<input type="text" name="telefono">
		<p>Contraseña</p>
		<input type="text" name="contrasena">
		<p>Ubicacion</p>
		<input type="text" name="ubicacion" size="40"><br>
		<div class="boton">Guardar</div>
	</div>
	<div class="imagenCuenta"><img src="caja.png"></div>
</div>
<script type="text/javascript">
	$(".comerciantes p").css({"background-color":"#fffade", "color":"#af5145"});	
</script>
</body>