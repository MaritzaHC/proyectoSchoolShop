<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\barraInicio.css">
	<link rel="stylesheet" type="text/css" href="..\css\agregarCuentas.css">
	<script type="text/javascript" src="..\..\javaScript\general.js"></script>
	<script type="text/javascript" src="..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesAdministrador.js"></script>
	<meta charset="utf-8">
</head>
<body>
<?php include '..\paginas\barraInicio.php';
	  include 'base/consultasUsuarios.php'; 
	  $x = array();
	  $id = $_GET['i'];
	  settype($id,'integer');
	  $x = almacenistaDeta($id);
	  $nombre =$x['nombre'];
	  $ubica=$x['ubicacion'];
?>

<div class="contenido">
	<div class="informacionComerciantes">
		<form action="base/modiAlmacenista.php" method="POST">
			<h2>Nombre</h2>
			<input type="text" style="font-size: 23px;" name="nombre" value=<?php echo $nombre;?>>
			<h2>Ubicacion</h2>
			<input type="text" style="font-size: 23px;" name="ubicacion" value=<?php echo $ubica;?>><br>
			<input type="submit" value="Modificar" class="boton">
		</form>
	</div>
	<div class="imagenCuenta"><img src="caja.png"></div>
</div>
<script type="text/javascript">
	$(".almacenistas p").css({"background-color":"#fffade", "color":"#af5145"});	
</script>
</body>