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
	<?php include '..\paginas\primeraBarra.html'; ?>
<div class="contenido">
	<?php include '..\paginas\menui.html'; ?>
	<div class="perfil">
		<div class="primero">
			<div class="imagenPerfil">
				<div class="imagen"><img src="niche.jpg"></div>
				<div class="agregar"></div>
			</div>

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
			<div class="boton">Guardar</div>
		</div>
		
		
	</div>
</div>
</body>