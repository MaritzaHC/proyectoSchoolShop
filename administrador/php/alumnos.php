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
		<div class="boton" onclick="window.location='alumnos.php/'">Bloqueados</div>
		<div class="barraBuscar">
			<form method="get" action="alumnos.php" name="gg">
				<input type="text" name="buscar" class="buscar">
				<img src="..\..\imagenes\buscar.png">
				<input type="submit" name="i" class="botonbuscar" value="">
			</form>
		</div>
	</div>
	<div class="abajo">
		<?php include 'base/consultasUsuarios.php';
			if (!empty($_GET['bloqueados'])) {
				$pag = $_GET['pag'];
				$x = array();
				$x = @buscarBloqueado($pag);
				$xx = @buscarBloqueado(($pag+1));
			}

			$pag = $_GET['pag'];
			$x = @alumnosGeneral($pag);
			$xx = @alumnosGeneral(($pag+1));
			if ($xx[0]["id"]=="") {
			echo "
			<script type=\"text/javascript\">
					var siguiente = 1;
			</script>
			";
			}
			foreach ($x as $are) {
				$nombre = $are['nombre']." ".$are['apellidoP']." ".$are['apelldioM'];
				$id = $are['id'];
		?>
		<div class="resultado">
			<p onclick="window.location='informacionAlumno.php?i='+<?php echo $id; ?>"><?php echo $nombre;?></p>
			<p onclick="window.location='informacionAlumno.php?i='+<?php echo $id; ?>"><?php echo $id;?></p>
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
<div class="center">
	  <div class="pagination">
	    <div onclick="pagina(0,'alumnos')" class="flechas" id="f1">Anterior</div>
	    <div onclick="pagina(1,'alumnos')" class="flechas" id="f2">Siguiente</div>
	  </div>
	</div>
<script type="text/javascript">
	$(".alumnos p").css({"background-color":"#fffade", "color":"#af5145"});	
	if (variable("pag")==1) $("#f1").css("display","none");
	if (siguiente==1) $("#f2").css("display","none");
</script>
</body>