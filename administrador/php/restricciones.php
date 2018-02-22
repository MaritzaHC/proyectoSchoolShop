<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\barraInicio.css">
	<link rel="stylesheet" type="text/css" href="..\css\restriccion.css">
	<script type="text/javascript" src="..\..\javaScript\general.js"></script>
	<script type="text/javascript" src="..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesAdministrador.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<?php include '..\paginas\barraInicio.html'; ?>
<div class="contenido">
	<div class="restriccion" style="margin-top: 45px">
		<div class="boton">Agregar</div>
		<p>Por temporada, se dará un mes al inicio del semestre y al final para poder vender, el resto del tiempo no se podrá</p>
	</div>
	<div class="restriccion">
		<div class="botonAzul">Quitar</div>
		<p>Solo se pueden vender útiles escolares </p>
	</div>
	<div class="restriccion">
		<div class="boton">Agregar</div>
		<p>Se tendrá un límite de publicaciones por semestre en la sección de ventas</p>
		<div class="opciones">
		<input type="radio" name="ventas" value="1">5
		<br>
		<input type="radio" name="ventas" value="2">10
		<br>
		<input type="radio" name="ventas" value="3">15
		<br>
		<input type="radio" name="ventas" value="3">20	
		</div>
	</div>
	<div class="restriccion">
		<div class="boton">Agregar</div>
		<p>Por calificación mínima recibida del estudiante como vendedor (1 estrella)</p>
	</div>
	<div class="restriccion">
		<div class="boton">Agregar</div>
		<p>Por calificación mínima recibida del estudiante como comprador (1 estrella)</p>
	</div>
	<div class="restriccion">
		<div class="botonAzul">Quitar</div>
		<p>Por calificación mínima del estudiante (requiere de permisos de la institución)</p>
	</div>
</div>
<script type="text/javascript">
	$(".restricciones p").css({"background-color":"#fffade", "color":"#af5145"});	
</script>
</body>