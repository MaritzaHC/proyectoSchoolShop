<?php
require 'conexion.php';
function compras()
{
	global $mysqli;
	$sql = "Select idProductos,titulo,foto,precio from productos where tipo=1 && estado=2 && comprador=14300191;";
	if(!$resultado = $mysqli->query($sql)){
	   echo "Error al consultar0.";
	   exit;
	}
	while($resul = $resultado->fetch_assoc()){
		    $titulo = $resul['titulo'];
		    $precio = $resul['precio'];
		    $id = $resul['idProductos'];
		    echo "<div class=\"curso\">
				<div class=\"foto\"> <img src=\"frut.jpg\"> </div>
				<div class=\"resumen\">
					<p>$titulo</p>
					<p style=\"font-family: sans-serif;\">$precio</p>
				</div>
				<div class=\"detalles\" onclick=\"paraMenu($id,1)\">Ver detalles</div><!--manda llamar a la publicacion correspondiente-->
			</div>";
	}
}

function finalizado()
{
	global $mysqli;
	$sql = "Select idProductos,titulo,foto,precio from productos where tipo=1 && estado = 5 && comprador=14300191;";
	if(!$resultado = $mysqli->query($sql)){
	   echo "Error al consultar0.";
	   exit;
	}
	while($resul = $resultado->fetch_assoc()){
		    $titulo = $resul['titulo'];
		    $precio = $resul['precio'];
		    $id = $resul['idProductos'];
		    echo "<div class=\"finalizado\">
				<div class=\"foto\"> <img src=\"frut.jpg\"> </div>
				<div class=\"resumen\">
					<p>$titulo</p>
					<p style=\"font-family: sans-serif;\">$precio</p>
				</div>
				<div class=\"detalles\" onclick=\"paraMenu($id,4)\">Ver detalles</div><!--manda llamar a la publicacion correspondiente-->
				<div class=\"boton\" id=\"finalizado\">Finalizado</div>
				<div class=\"eliminar\"><img src=\"..\..\imagenes\basura.png\"></div>
			</div>";
	}
}