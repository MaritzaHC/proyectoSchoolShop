<?php 
include 'consultasAlumno.php';
 
$uu = @$_SESSION['username'];
settype($uu,'integer');
$x = array();
$x = @notificaciones($uu);	

function titulos()
{
	global $x;
	$i=1;
	$con=count($x);
	if ($x[0]['titulo']==null) {
		echo "No hay notificaciones";
		exit;
	}	
	foreach ($x as $are) {
		$titulo = $are['titulo'];
	    $a=$i."n";
		echo "<div class=\"notificacion\" id=$a onclick=\"mostrar($i,$con)\"><p>$titulo</p></div>";
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
	    $a=$i."c";
		echo "<div class=\"contenidoNoti\" id=$a>
			<div class=\"titulo\"><p>$titulo</p></div>
			<div class=\"contenido\"><p>$texto</p></div>
			<div class=\"boton\" onclick=\"popup(1,'seguro',0)\">Eliminar</div>
			<input type=\"number\" name=\"idNotificaciones\" value=$idNotificaciones style=\"display: none;\">
		</div>";
		$i++;
	}
}
?>

