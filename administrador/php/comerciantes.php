<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\barraInicio.css">
	<link rel="stylesheet" type="text/css" href="..\css\barraBuscar.css">
	<script type="text/javascript" src="..\..\javaScript\general.js"></script>
	<script type="text/javascript" src="..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesAdministrador.js"></script>
	<meta charset="utf-8">
</head>
<body>
<?php include '..\paginas\barraInicio.html'; ?>
<div class="contenido">
	<div class="arriba">
		<div class="boton" onclick="irPagina('agregarComerciante')">Agregar</div>
		<div class="barraBuscar">
			<input type="text" name="" size="40">
			<img src="..\..\imagenes\buscar.png"><!--PENDIENTE PHP-->
		</div>
	</div>
	<div class="abajo">
		<div class="resultado" onclick="irPagina('agregarComerciante')">
			<p>Nombre</p>
			<div class="imagen"><img src="..\..\imagenes/basura.png"></div>
			<div class="calificacion">
				<div class="estrellas">
		   	 	<img src="../../imagenes/estrellaL.png">
		   	 	<img src="../../imagenes/estrellaL.png">
		   		<img src="../../imagenes/estrellaL.png">
		   		<img src="../../imagenes/estrellaL.png">
				<img src="../../imagenes/estrellaB.png"></div>
			</div>
		</div>
		<div class="resultado">
			<p>Nombre</p>
			<div class="imagen"><img src="imagenes/basura.png"></div>
			<div class="calificacion">
				<div class="estrellas">
		   	 	<img src="../../imagenes/estrellaL.png">
		   	 	<img src="../../imagenes/estrellaL.png">
		   		<img src="../../imagenes/estrellaL.png">
		   		<img src="../../imagenes/estrellaL.png">
				<img src="../../imagenes/estrellaB.png"></div>
			</div>
		</div>
		<div class="resultado">
			<p>Nombre</p>
			<div class="imagen"><img src="imagenes/basura.png"></div>
			<div class="calificacion">
				<div class="estrellas">
		   	 	<img src="../../imagenes/estrellaL.png">
		   	 	<img src="../../imagenes/estrellaL.png">
		   		<img src="../../imagenes/estrellaL.png">
		   		<img src="../../imagenes/estrellaL.png">
				<img src="../../imagenes/estrellaB.png"></div>
			</div>
		</div>

	</div>
</div>
<script type="text/javascript">
	$(".comerciantes p").css({"background-color":"#fffade", "color":"#af5145"});	
</script>
</body>