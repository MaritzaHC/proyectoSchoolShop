<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\barraInicio.css">
	<link rel="stylesheet" type="text/css" href="..\css\estadisticas.css">
	<script type="text/javascript" src="..\..\javaScript\general.js"></script>
	<script type="text/javascript" src="..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesAdministrador.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<?php include '..\paginas\barraInicio.html'; ?>
<div class="contenido">
	<div class="eComerciantes">
		<p>Comerciantes</p>
		<div class="estadistica"><img src="ne.jpg"></div>
		<div class="estadistica"><img src="ne.jpg"></div>
		<div class="estadistica"><img src="ne.jpg"></div>
		<div class="estadistica"><img src="ne.jpg"></div>
	</div>
	<div class="eEstudiantes">
		<p>Estudiantes</p>
		<div class="estadistica"><img src="ne.jpg"></div>
		<div class="estadistica"><img src="ne.jpg"></div>
		<div class="estadistica"><img src="ne.jpg"></div>
		<div class="estadistica"><img src="ne.jpg"></div>
		<div class="estadistica"><img src="ne.jpg"></div>
		<div class="estadistica"><img src="ne.jpg"></div>
	</div>
</div>
<script type="text/javascript">
	$(".estadisticas p").css({"background-color":"#fffade", "color":"#af5145"});	
</script>
</body>