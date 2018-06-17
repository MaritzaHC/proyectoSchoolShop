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
		<div class="boton" onclick="window.location='agregarComerciante.php'">Agregar</div>
		<div class="barraBuscar">
			<form method="get" action="comerciantes.php?pag=1" name="gg">
				<input type="text" name="buscar" class="buscar">
				<img src="..\..\imagenes\buscar.png">
				<input type="submit" name="pag" class="botonbuscar" value=1>
			</form>
		</div>
	</div>
	<div class="abajo">
		<?php include 'base/consultasUsuarios.php';
			  include 'estrellas.php';
		if (!empty($_GET['buscar'])) {
			$pag = $_GET['pag'];
			$x = array();
			$x = @buscarVendedor($_GET['buscar'],$pag);
			$xx = @buscarVendedor($_GET['buscar'],($pag+1));
		}
		elseif (empty($_GET["pag"])){ $pag=1;}
	    else {
	    	$pag = $_GET['pag'];
			$x = array();
			$x = @consultaGeneralVendedor($pag);
			$xx = @consultaGeneralVendedor($pag+1);
		}
				if ($xx[0]['idVendedor']=="") {
					echo "
					<script type=\"text/javascript\">
							var siguiente = 1;
					</script>
					";
				}
				if ($x[0]['idVendedor']=="") {
					echo "No se encontraron resultados";
				}else {
			foreach ($x as $are) {
				$nombre = $are['nombre'];
				$idVendedor = $are['idVendedor'];
				$can = $are['calificacion'];
				settype($can, 'integer');
			?>
			<div class="resultado">
				<form method="POST" action="base/comerciantes.php">
				<p onclick="window.location='detalleComerciante.php?i='+<?php echo $idVendedor; ?>"><?php echo $nombre;?></p>
				<div class="imagen" onclick="popup(1,'seguro',0)" onmouseenter="valor(<?php echo $idVendedor;?>)"><img src="..\..\imagenes/basura.png"></div>
				<div class="calificacion">
					<?php //calificacionaMostrar($can); ?>
				</div>
			</div>
			
			<?php }}?>
			<div id="seguro">
				   <div class="popup-contenedor">
				      <p>¿Esta seguro de eliminar este comerciante?</p>
				      <input type="" id="idVen" name="idVen" style="display: none;" value="">
				      <input type="submit" value="Aceptar" class="boton">
				      <div class="botonAzul" onclick="quitar()">Cancelar</div>
				   </div>
			</div></form>
	</div>
</div>
<div class="center">
	  <div class="pagination">
	    <div onclick="pagina(0,'comerciantes')" class="flechas" id="f1">Anterior</div>
	    <div onclick="pagina(1,'comerciantes')" class="flechas" id="f2">Siguiente</div>
	  </div>
	</div>
<script type="text/javascript">
	$(".comerciantes p").css({"background-color":"#fffade", "color":"#af5145"});	
	if (variable("pag")==1) $("#f1").css("display","none");
	if (siguiente==1) $("#f2").css("display","none");
	function quitar(){$("#seguro").css({"display": "none"});}
	function valor(laid){
		$("#idVen").val(laid);
	}
</script>
</body>