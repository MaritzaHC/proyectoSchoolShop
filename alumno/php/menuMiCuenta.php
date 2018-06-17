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
	<?php @include '..\paginas\primeraBarra.php'; ?>
<div class="contenido">
	<?php @include '..\paginas\menui.html'; ?>
	<div class="cuadros">
		<?php @include 'base\menuMiCuenta.php';?>
	</div>
</div>
</body>