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
	<?php include '..\paginas\barraInicio.html'; 
		  require 'base\notificaciones.php';?>

<div class="contenido">
	<div class="notificacionesTitulo">
		<div class="titulo"><p>Notificaciones</p><br></div>
		<div class="tipos">
			<input type="radio" name="tipos" value="1" onclick="vistaSelec(1)" checked>Urgentes
			<input type="radio" name="tipo" value="2" onclick="vistaSelec(2)">Normales
			<br>
		</div>

		<div class="lasNotificaciones" id="ur">
			<?php titulosImportantes(); ?>
		</div>

		<div class="lasNotificaciones" id="no"><!--php-->
			<?php titulos(); ?>
		</div>

	</div>

	<form name="noti" method="get" action="base/notificacionesF.php">
		<?php contenidoImportantes();
			  contenido();?>
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
	$("#no").css("display","none");
	$('#ur').css("display","inline-block");
</script>
</body>