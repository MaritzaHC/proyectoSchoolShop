<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\barraInicio.css">
	<link rel="stylesheet" type="text/css" href="..\css\notificaciones.css">
	<script type="text/javascript" src="..\..\javaScript\general.js"></script>
	<script type="text/javascript" src="..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesAdministrador.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<?php include '..\paginas\barraInicio.html'; ?>
<div class="contenido">
	<div class="notificacionesTitulo">
		<div class="titulo"><p>Notificaciones</p></div>
		<div class="lasNotificaciones"><!--php-->
			<div class="notificacion" id="1n" onclick="mostrar(1,3);"><p>Titulo de la notificacion</p></div>
			<div class="notificacion" id="2n" onclick="mostrar(2,3);"><p>Titulo de la notificacion</p></div>
			<div class="notificacion" id="3n" onclick="mostrar(3,3);"><p>Titulo de la notificacion</p></div>
		</div>
	</div>
	<div class="contenidoNoti" id="1c">
		<div class="titulo"><p>Titulo1</p></div>
		<div class="contenidon"><p>El veloz murciélago hindú comía feliz cardillo y kiwi. La cigüeña tocaba el saxofón detrás del palenque de paja.  
El pingüino Wenceslao hizo kilómetros bajo exhaustiva lluvia y frío, añoraba a su querido cachorro. Fuente: sans-serif para los numeros</p></div>
		<div class="boton">Eliminar</div><!--volver a cargar la pagina-->
	</div>
	<div class="contenidoNoti" id="2c">
		<div class="titulo"><p>Titulo2</p></div>
		<div class="contenidon"></div>
		<div class="boton">Eliminar</div>
	</div>
	<div class="contenidoNoti" id="3c">
		<div class="titulo"><p>Titulo3</p></div>
		<div class="contenidon"></div>
		<div class="boton">Eliminar</div>
	</div>
</div>
<script type="text/javascript">
	$(".contenidoNoti").css("display","none");
</script>
</body>