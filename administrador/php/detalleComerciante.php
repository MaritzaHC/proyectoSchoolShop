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
	  $x = consultaDetalleVendedor($id);
	  $nombre =$x['nombre'];
	  $tele= $x['telefono'];
	  $ubica=$x['ubicacion'];
?>

<div class="contenido">
	<div class="informacionComerciantes">
		<h2>Nombre</h2>
		<h3><?php echo $nombre;?></h3>
		<h2>Telefono</h2>
		<h3><?php echo $tele;?></h3>
		<h2>Ubicacion</h2>
		<h3><?php echo $ubica;?></h3>
		<div class="boton">Bloquear</div>
	</div>
	<div class="imagenCuenta"><img src="caja.png"></div>
</div>
<script type="text/javascript">
	$(".comerciantes p").css({"background-color":"#fffade", "color":"#af5145"});	
</script>
</body>