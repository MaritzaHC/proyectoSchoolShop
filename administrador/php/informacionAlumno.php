<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\barraInicio.css">
	<link rel="stylesheet" type="text/css" href="..\css\informacionAlumno.css">
	<script type="text/javascript" src="..\..\javaScript\general.js"></script>
	<script type="text/javascript" src="..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesAdministrador.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<?php include '..\paginas\barraInicio.php'; 
	include 'base/consultasUsuarios.php';
	require 'base/grafi.php';; 
	  $x = array();
	  $id = $_GET['i'];
	  settype($id,'integer');
	  $x = alumnosDeta($id);
	  $nombre =$x['nombre']." ".$x['apellidoP']." ".$x['apellidoM'];
?>
<div class="contenido">
	<div class="informacionAlumnos">
		<p>Nombre</p>
		<p><b><?php echo $nombre; ?></b></p>
		<p>Registro</p>
		<p><b><?php echo $id; ?></b></p>
		<p>Calificacion</p>
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
		<div class="boton">Bloquear</div>
	</div>
	<div class="estadisticasAlumno">
		<?php grafiAlumno($id,2); 
		grafiAlumno($id,2); 
		grafiAlumno($id,2);?>
		</div>
</div>
<script type="text/javascript">
	$(".alumnos p").css({"background-color":"#fffade", "color":"#af5145"});	
</script>
</body>