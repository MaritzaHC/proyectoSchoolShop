<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\notificaciones.css">
	<script type="text/javascript" src="..\..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\..\javaScript\general.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesAlmacenista.js"></script>
	<meta charset="utf-8">
	
</head>
<body>
	<?php include '..\paginas\barraInicio.php'; ?>

<div class="contenido">
	<?php include '..\paginas\menu.html'; 
	include '..\..\paginas\emergentes.html';
	require_once 'consultas.php';?>

	<div class="notificacionesTitulo">
		<div class="titulo"><p>Notificaciones</p></div>
		<div class="lasNotificaciones">
			<?php titulos(); ?>
		</div>
	</div>

	<form name="publica" method="POST" action="base/notificacionesF.php">
			<?php contenido(); ?>
		<div id="seguro">
			<div class="popup-contenedor">
			      <p>¿Esta seguro de eliminar esta notificación?</p>
			      <br>
			      <input type="submit" value="Aceptar" class="boton">
			     <div class="botonAzul" onclick="popup(2,'seguro')">Cancelar</div>
			     <br>
		   </div>
		</div>
	</form>
</div>
<script type="text/javascript">
	$(".contenidoNoti").css("display","none");
</script>
</body>