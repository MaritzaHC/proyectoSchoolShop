<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\cuenta.css">
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
	<form name="publica" method="post" action="base/cuenta.php">
	<div class="perfil">
		<div class="primero">
			<div class="imagenPerfil">
				<div class="imagen"><output id="list"><img src="niche.jpg"></output></div>
				<div class="agregar"><input type="file" id="files" name="files[]" value=" " /></div>
			</div>
			<script type="text/javascript">
			function archivo(evt) {
				var evento = evt;
				ar(evento);
			}
	        document.getElementById('files').addEventListener('change', archivo, false);
	      </script>

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
	</div>
		<div class="info">
			<p>Nombre</p>
			<p>.xxxxx</p><br>
			<p>Registro</p>
			<p>.</p><br>
			<p>Correo</p>
			<input type="text" name="correo" size="35">
			<p style="margin-top: 15px">Antigua contraseña</p>
			<input type="password" name="Acontrasena" size="15">
			<p style="margin-top: 15px">Nueva contraseña</p>
			<input type="password" name="Ncontrasena" size="15">
			<p style="margin-top: 15px">Confirmar contraseña</p>
			<input type="password" name="Ccontrasena" size="15">
			<br>
			<div class="boton" onclick="popup(1,'seguro',0)">Guardar</div>
		</div>
		</form>
		
	</div>
</div>
</body>