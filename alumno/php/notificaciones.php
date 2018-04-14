<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\notificaciones.css">
	<script type="text/javascript" src="..\..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\..\javaScript\general.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesEstudiante.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<?php include '..\paginas\primeraBarra.html'; 
	include '..\..\paginas\emergentes.html';?>
<div class="contenido">
	<?php include '..\paginas\menui.html'; ?>

	<div class="notificacionesTitulo">
		<div class="titulo"><p>Notificaciones</p></div>
		<div class="lasNotificaciones"><!--php-->
			<div class="notificacion" id="1n" onclick="mostrar(1,3);"><p>Titulo de la notificacion</p></div>
			<div class="notificacion" id="2n" onclick="mostrar(2,3);"><p>Titulo de la notificacion</p></div>
			<div class="notificacion" id="3n" onclick="mostrar(3,3);"><p>Titulo de la notificacion</p></div>
		</div>
	</div>
	<form name="publica" method="get" action="base/notificaciones.php">
	<div class="contenidoNoti" id="1c">
		<div class="titulo"><p>Titulo1</p></div>
		<div class="contenido"><p>El veloz murciélago hindú comía feliz cardillo y kiwi. La cigüeña tocaba el saxofón detrás del palenque de paja.  
El pingüino Wenceslao hizo kilómetros bajo exhaustiva lluvia y frío, añoraba a su querido cachorro. Fuente: sans-serif para los numeros</p></div>
		<div class="boton" onclick="popup(1,'seguro',0)">Eliminar</div><!--volver a cargar la pagina
		mandar la id-->
	</div>
	<div class="contenidoNoti" id="2c">
		<div class="titulo"><p>Titulo2</p></div>
		<div class="contenido"></div>
		<div class="boton" onclick="popup(1,'seguro',0)">Eliminar</div>
	</div>
	<div class="contenidoNoti" id="3c">
		<div class="titulo"><p>Titulo3</p></div>
		<div class="contenido"></div>
		<div class="boton" onclick="popup(1,'seguro',0)">Eliminar</div>
	</div>
</div>
</form>
<script type="text/javascript">
	$(".contenidoNoti").css("display","none");
</script>
</body>