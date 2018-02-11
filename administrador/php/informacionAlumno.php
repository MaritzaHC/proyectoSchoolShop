<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\barraInicio.css">
	<link rel="stylesheet" type="text/css" href="..\css\informacionAlumno.css">
	<script type="text/javascript" src="..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesAdministrador.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<?php include '..\paginas\barraInicio.html'; ?>
<div class="contenido">
	<div class="informacionAlumnos">
		<p>Nombre</p>
		<input type="text" name="nombre" size="30">
		<p>Registro</p>
		<input type="text" name="registro" size="40">
		<p>Calificacion</p>
		<div class="calificacion">
			<div class="comprador">
				<p>Comprador</p>
	   	 		<div class="estrellas">
		   	 	<img src="..\..\imagenes\estrellaL.png">
		   	 	<img src="..\..\imagenes\estrellaL.png">
		   		<img src="..\..\imagenes\estrellaL.png">
		   		<img src="..\..\imagenes\estrellaL.png">
				<img src="..\..\imagenes\estrellaB.png"></div>
			</div>
			<div class="vendedor">
				<p>Vendedor</p>
	   	 		<div class="estrellas">
		   	 	<img src="..\..\imagenes\estrellaL.png">
		   	 	<img src="..\..\imagenes\estrellaL.png">
		   		<img src="..\..\imagenes\estrellaL.png">
		   		<img src="..\..\imagenes\estrellaL.png">
				<img src="..\..\imagenes\estrellaB.png"></div>
			</div>
		</div>
		<div class="boton">Bloquear</div>
	</div>
	<div class="estadisticasAlumno">
		<img src="algo.jpg">
		<img src="algo.jpg">
		<img src="algo.jpg"></div>
</div>
<script type="text/javascript">
	$(".alumnos p").css({"background-color":"#fffade", "color":"#af5145"});	
</script>
</body>