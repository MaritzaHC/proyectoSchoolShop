<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\barraInicio.css">
	<link rel="stylesheet" type="text/css" href="..\css\restriccion.css">
	<script type="text/javascript" src="..\..\javaScript\general.js"></script>
	<script type="text/javascript" src="..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesAdministrador.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<?php include '..\paginas\barraInicio.php';
		  include 'base\restri.php';
		  if (!empty($_GET['id'])) {
		  	modifi($_GET['id'],$_GET['estado']);
		  }
		   ?>
<div class="contenido">
	<?php restri(); ?>
</div>
<script type="text/javascript">
	$(".restricciones p").css({"background-color":"#fffade", "color":"#af5145"});	
</script>
</body>