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
	<?php include '..\paginas\barraInicio.php'; 
		  include '../../ejem/grafi.php';?>
<div class="contenido">
	<div class="eComerciantes">
		<p>Comerciantes</p>
		<?php $mes =date("m");
		if($mes<=6){$periodo=2;}else {$periodo=8;}?>
		<div class="estadistica"><?php grafiVendedores($periodo,1); ?></div>
	</div>
	<div class="eEstudiantes">
		<p>Estudiantes</p>
		<div class="estadistica"><?php grafiAlumno($periodo,2); ?></div>
		<div class="estadistica"><?php grafiAlumnoMala(3);?></div>
	</div>
</div>
<script type="text/javascript">
	$(".estadisticas p").css({"background-color":"#fffade", "color":"#af5145"});	
</script>
</body>