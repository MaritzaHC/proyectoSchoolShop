<?php 
include 'consultasAdmin.php';
 
$uu = @$_SESSION['username'];
settype($uu,'integer');
$x = array();
$x = notificaciones(123456);	

function titulosImportantes()
{
	global $x;
	$i=1;
	$con=count($x);
	foreach ($x as $are) {
		if ($are['importancia']==2) {
			$titulo = $are['titulo'];
		    $a=$i."n";
			echo "<div class=\"notificacion\" id=$a onclick=\"mostrar($i,$con);\"><p>$titulo</p></div>";
		}
		$i++;
	}
}

function contenidoImportantes()
{
	global $x;
	$i=1;
	foreach ($x as $are) {
	    $titulo = $are['titulo'];
	    $texto = $are['texto'];
	    $idNotificaciones = $are['idNotificaciones'];
	    if ($are['importancia']==2) {
	    	$a=$i."c";
			echo "<div class=\"contenidoNoti\" id=$a>
				<div class=\"titulo\"><p>$titulo</p></div>
				<div class=\"contenido\"><p>$texto</p></div>
				<div class=\"boton\" onclick=\"popup(1,'seguro',0)\">Eliminar</div>
				<input type=\"number\" name=\"idNotificaciones\" value=$idNotificaciones style=\"display: none;\">
				</div>";
	    }
		$i++;
	}
}
function titulos()
{
	global $x;
	$i=1;
	$con=count($x);
	foreach ($x as $are) {
		if ($are['importancia']==1) {
			$titulo = $are['titulo'];
		    $a=$i."n";
			echo "<div class=\"notificacion\" id=$a onclick=\"mostrar($i,$con);\"><p>$titulo</p></div>";
		}
		$i++;
	}
}

function contenido()
{
	global $x;
	$i=1;
	foreach ($x as $are) {
	    $titulo = $are['titulo'];
	    $texto = $are['texto'];
	    $idNotificaciones = $are['idNotificaciones'];
	    if ($are['importancia']==1) {
	    	$a=$i."c";
			echo "<div class=\"contenidoNoti\" id=$a>
				<div class=\"titulo\"><p>$titulo</p></div>
				<div class=\"contenido\"><p>$texto</p></div>
				<div class=\"boton\" onclick=\"popup(1,'seguro',0)\">Eliminar</div>
				<input type=\"number\" name=\"idNotificaciones\" value=$idNotificaciones style=\"display: none;\">
				</div>";
	    }
		$i++;
	}
}
?>
