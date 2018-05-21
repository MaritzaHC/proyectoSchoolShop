<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\barraInicio.css">
	<link rel="stylesheet" type="text/css" href="..\css\barraBuscar.css">
	<script type="text/javascript" src="..\..\javaScript\general.js"></script>
	<script type="text/javascript" src="..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesAdministrador.js"></script>
	<meta charset="utf-8">
</head>
<body>
<?php include '..\paginas\barraInicio.php';
include '..\..\paginas\emergentes.html'; ?>
<div class="contenido">
	<div class="arriba">
		<div class="boton" onclick="irPagina('agregarComerciante')">Agregar</div>
		<div class="barraBuscar">
			<form method="get" action="comerciantes.php" name="gg">
				<input type="text" name="buscar" class="buscar">
				<img src="..\..\imagenes\buscar.png">
				<input type="submit" name="i" class="botonbuscar" value="">
			</form>
		</div>
	</div>
	<div class="abajo">
		<?php include 'base/consultasUsuarios.php';
			$x = array();
			$x = consultaGeneralVendedor();
			foreach ($x as $are) {
				$nombre = $are['nombre'];
				$foto = $are['foto'];
				$idVendedor = $are['idVendedor'];
		?>
		<div class="resultado">
			<p onclick="window.location='detalleComerciante.php?i='+<?php echo $idVendedor; ?>"><?php echo $nombre;?></p>
			<div class="imagen" onclick="popup(1,'seguro',0)"><img src="..\..\imagenes/basura.png"></div>
			<div class="calificacion">
				<div class="estrellas">
		   	 	<img src="../../imagenes/estrellaL.png">
		   	 	<img src="../../imagenes/estrellaL.png">
		   		<img src="../../imagenes/estrellaL.png">
		   		<img src="../../imagenes/estrellaL.png">
				<img src="../../imagenes/estrellaB.png"></div>
			</div>
		</div>
		<?php }?>
	</div>
</div>
<script type="text/javascript">
	$(".comerciantes p").css({"background-color":"#fffade", "color":"#af5145"});	
</script>
</body>