<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\categorias.css">
	<link rel="stylesheet" type="text/css" href="..\css\publicacion.css">
	<script type="text/javascript" src="..\..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\..\javaScript\general.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesEstudiante.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<?php include '..\paginas\primeraBarra.html'; 
	  include '..\..\paginas\emergentes.html';?>

	<div class="imagenp">
		<img src="pay.jpg">
		<div class="bloqueado"><p>Bloqueado</p></div>
		<div class="imagen"><img src="..\..\imagenes\camara.png"></div>
	</div>
	<div class="datosPublica" style="width: 40%">
	<div class="titulo"><input type="text" name="titulo"  placeholder="Titulo de la publicacion"></div>
		<div class="descripcion">
			<p>Descripcion</p><br>
			<textarea name="descripcion" rows="7" cols="60"></textarea>
		</div>
	<div class="tipos">
		<p>Tipos</p><br>
		<input type="radio" name="tipo" value="1" onclick="vistaTipos('venta')">Venta
		<input type="radio" name="tipo" value="2" onclick="vistaTipos('objeto')">Objeto Perdido
		<br>
	</div>
	<div class="venta">
		<p>Tiempo disponible </p>
		<select name="tiempoDisponible">
				<option>algo</option>
				<option>php</option>
				<option>:(</option>
		</select><br>
		<p>Categorias </p>
		<select name="categorias">
				<option>algo</option>
				<option>php</option>
				<option>:(</option>
		</select><br>
		<p>Precio </p>
		<input type="text" name="precio" size="3"><br><br>
		<div class="Publicar" onclick="popup(1,'seguro')">Publicar</div>
	</div>
	<div class="objeto">
		<p>¿Donde lo dejo?</p>
		<textarea name="donde" rows="7" cols="60"></textarea><br><br>
		<div class="Publicar" onclick="popup(1,'seguro')">Publicar</div>
	</div>
	</div>
	<script type="text/javascript">
	$(".datosPublica .venta").css("display","none");
	$(".datosPublica .objeto").css("display","none");
	$(".imagenp .bloqueado").css("display","none");
	</script>
</body>
</html>