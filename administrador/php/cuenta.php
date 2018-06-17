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
	<?php include '..\paginas\barraInicio.php'; ?>
<div class="contenido">
	<div class="informacion">
		<p class="nombre">Nombre de la institucion</p>
		<div class="contrasena">
			<form action="base/cuentaF.php" method="POST">
			<p style="margin-bottom: 5px">Nueva contraseña:</p>
			<p>Contraseña anterior</p>
			<input type="password" name="contrasena">
			<p>Nueva contraseña</p>
			<input type="password" name="contrasenaconu">
			<p>Confirmar contraseña</p>
			<input type="password" name="contrasenacon">	
		
		</div>
		<div class="boton" onclick="popup(1,'seguro',0)">Guardar</div>
		<div id="seguro">
			   <div class="popup-contenedor">
			      <p>¿Esta seguro de cambiar de contraseña?</p>
			      <input type="submit" value="Aceptar" class="boton">
			      <div class="botonAzul" onclick="quitar()">Cancelar</div>
			   </div>
		</div></form>
<script type="text/javascript">
	function quitar(){$("#seguro").css({"display": "none"});}
	</script>
</html>
	</div>
	<div class="imagenCuenta"><img src="http://servicioss.gearhostpreview.com/img/logo.jpg"></div>
</div>
</body>