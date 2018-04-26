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
	<?php include '..\paginas\menui.html';
		  require 'base\notificaciones.php'; ?>

	<div class="notificacionesTitulo">
		<div class="titulo"><p>Notificaciones</p></div>
		<div class="lasNotificaciones"><!--php-->
			<?php titulos(); ?>
		</div> 
	</div>

	<form name="publica" method="get" action="base/notificaciones.php">
			<?php contenido(); ?>
			<div class="popup-contenedor">
		      <p>¿Esta seguro que desea eliminar la notificación?</p>
		      <input type="submit" value="Aceptar" class="boton">
		      <input type="" name="este" style="display: none;">
		      <script type="text/javascript">
						var x = variable("id");
				 		document.este.este.value = x;
			   </script>
		     <div class="botonAzul" onclick="popup(2,'seguro')">Cancelar</div>
	   </div>
	</form>
</div>
	
<script type="text/javascript">
	$(".contenidoNoti").css("display","none");
</script>
</body>