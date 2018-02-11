<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\primeraBarra.css">
	<link rel="stylesheet" type="text/css" href="..\css\menuMiCuenta.css">
	<link rel="stylesheet" type="text/css" href="..\css\cuentaContenido.css">
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
	<div class="cuadros">
		<div class="arriba">
			<div class="mensajes"  onclick="window.location='mensajes.html'">
				<div class="titulo"><p>Mensajes</p></div>
				<div class="cuenta"><p>(0)</p></div>
			</div>		
			<div class="compras" onclick="window.location='compras.html'">
				<div class="titulo"><p>Compras</p></div>
				<div class="cuenta"><p>(0)</p></div>
			</div>
		</div>
		<div class="abajo">
			<div class="ventas" onclick="window.location='ventas.html'">
				<div class="titulo"><p>Ventas</p> </div>
				<div class="cuenta"><p>(0)</p> </div>
			</div>
			<div class="pedidos" onclick="window.location='pedidos.html'">
				<div class="titulo"><p>Pedidos</p> </div>
				<div class="cuenta"><p>(0)</p> </div>
			</div>	
		</div>	
	</div>
</div>
</body>