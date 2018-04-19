<?php 
require 'conexion.php';

function titulos()
{
	global $mysqli;
	$sql = "select titulo from notificaciones where usuario = 14300191;";
	if(!$resultado = $mysqli->query($sql)){
	   echo "Error al consultar0.";
	   exit;
	}

	$sql = "select count(*) as contar from notificaciones where usuario = 14300191;";
	$contador = $mysqli->query($sql);
	$contar = $contador->fetch_assoc();
	$con = $contar['contar'];

	$i=1;
	while($resul = $resultado->fetch_assoc()){
	    $titulo = $resul['titulo'];
	    $a=$i."n";
		echo "<div class=\"notificacion\" id=$a onclick=\"mostrar($i,$con);\"><p>$titulo</p></div>";
		$i++;
	}
}

function contenido()
{
	global $mysqli;
	$sql = "Select titulo,texto,idNotificaciones from notificaciones where usuario = 14300191;";
	if(!$resultado = $mysqli->query($sql)){
	   echo "Error al consultar0.";
	   exit;
	}
	$i=1;
	while($resul = $resultado->fetch_assoc()){
	    $titulo = $resul['titulo'];
	    $texto = $resul['texto'];
	    $idNotificaciones = $resul['idNotificaciones'];
	    $a=$i."c";
	echo "<div class=\"contenidoNoti\" id=$a>
		<div class=\"titulo\"><p>$titulo</p></div>
		<div class=\"contenido\"><p>$texto</p></div>
		<div class=\"boton\" onclick=\"popup(1,'seguro',0)\">Eliminar</div><!--volver a cargar la pagina
		mandar la id-->
	</div>";
	$i++;
	}
}
