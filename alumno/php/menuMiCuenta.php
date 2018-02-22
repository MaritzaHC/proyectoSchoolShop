<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\categorias.css">
	<link rel="stylesheet" type="text/css" href="..\css\menuMiCuenta.css">
	<script type="text/javascript" src="..\..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\..\javaScript\general.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesEstudiante.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<?php include '..\paginas\primeraBarra.html'; ?>
<div class="contenido">
	<?php include '..\paginas\menui.html'; ?>
	<div class="cuadros">
		<div class="arriba">
			<div class="mensajes"  onclick="window.location='mensajes.php">
				<div class="titulo"><p>Mensajes</p></div>
				<div class="cuenta"><p>(0)</p></div>
			</div>		
			<div class="compras" onclick="window.location='compras.php'">
				<div class="titulo"><p>Compras</p></div>
				<div class="cuenta"><p>(0)</p></div>
			</div>
		</div>
		<div class="abajo">
			<div class="ventas" onclick="window.location='ventas.php'">
				<div class="titulo"><p>Ventas</p> </div>
				<div class="cuenta"><p>(0)</p> </div>
			</div>
			<div class="pedidos" onclick="window.location='pedidos.php'">
				<div class="titulo"><p>Pedidos</p> </div>
				<div class="cuenta"><p>(0)</p> </div>
			</div>	
		</div>	
	</div>
</div>
</body>