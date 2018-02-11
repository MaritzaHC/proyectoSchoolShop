<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\primeraBarra.css">
	<link rel="stylesheet" type="text/css" href="..\css\cuentaContenido.css">
	<link rel="stylesheet" type="text/css" href="..\css\vcpo.css">
	<script type="text/javascript" src="..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesEstudiante.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<div id="inicio">
		<div class="logo">
			<img src="..\..\imagenes\logo.png" onclick="ini()">
			<p onclick="ini()">SchoolSop</p>
		</div>
		<div class="notificacion">
			<img src="..\..\imagenes\campana.png" onclick="notifica()">
		</div>
		<div class="cuenta" onclick="cuenta()">
			<img src="..\..\imagenes\cuenta.png">
			<p>Mi cuenta</p>
		</div>
		<div class="publicar" onclick="publica()"><p>Publicar</p></div>
		<div class="barraBuscar">
			<input type="text" name="">
			<img src="..\..\imagenes\buscar.png"><!--PENDIENTE PHP-->
		</div>
	</div>
<div class="contenido">
	<div class="menui">
		<div class="menu">
			<p onclick="window.location='cuenta.html'">Cuenta</p>
			<p onclick="window.location='notificaciones.html'">Notificaciones</p>
			<p onclick="window.location='mensajes.html'">Mensajes</p>
			<p onclick="window.location='ventas.html'">Ventas</p>
			<p onclick="window.location='compras.html'">Compras</p>
			<p onclick="window.location='pedidos.html'">Pedidos</p>
			<p onclick="window.location='objetos.html'">Objeto</p>
		</div>
	</div>
	<div class="Ventas">
		<div class="Titulo"><p>Ventas</p></div>	
			<div class="curso">
				<div class="foto"> <img src="frut.jpg"> </div>
				<div class="resumen">
					<p>Titulo</p>
					<p style="font-family: sans-serif;">Precio</p>
				</div>
				<div class="detalles" onclick="pendiente('lo da php')">Ver detalles</div><!--manda llamar a la publicacion correspondiente-->
				<div class="boton" id="curso">En curso</div>
			</div>

			<div class="publicado">
				<div class="foto"><img src=""></div>
				<div class="resumen">
					<p>Titulo</p>
					<p style="font-family: sans-serif;">Precio</p>
				</div>
				<div class="detalles" onclick="pendiente('lo da php')">Ver detalles</div>
				<div class="boton" id="publicado">Publicado</div>
			</div>

			<div class="bloqueado">
				<div class="foto"><img src=""></div>
				<div class="resumen">
					<p>Titulo</p>
					<p style="font-family: sans-serif;">Precio</p>
				</div>
				<div class="detalles" onclick="pendiente('lo da php')">Ver detalles</div>
				<div class="boton" id="bloqueado">Bloqueado</div>
			</div>
			<div class="finalizado">
				<div class="foto"><img src=""></div>
				<div class="resumen">
					<p>Titulo</p>
					<p style="font-family: sans-serif;">Precio</p>
				</div>
				<div class="detalles" onclick="pendiente('lo da php')">Ver detalles</div>
				<div class="boton" id="finalizado">Finalidado</div>
				<div class="eliminar"><img src="..\..\imagenes\basura.png"></div>
			</div>
		</div>
	</div>
	
</div>
</body>