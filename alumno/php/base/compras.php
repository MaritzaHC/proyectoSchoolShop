<?php
include 'consultasProductos.php';
function compras()
{
	$x = array();
	$x = productos(1,1);

	foreach ($x as $are) {
		$titulo = $are['titulo'];
		$precio = $are['precio'];
		$id = $are['idProductos'];
		if($are['estado']==2&&$are['comprador']==14300192){
		    echo "<div class=\"curso\">
				<div class=\"foto\"> <img src=\"frut.jpg\"> </div>
				<div class=\"resumen\">
					<p>$titulo</p>
					<p style=\"font-family: sans-serif;\">$precio</p>
				</div>
				<div class=\"detalles\" onclick=\"paraMenu($id,1)\">Ver detalles</div><!--manda llamar a la publicacion correspondiente-->
			</div>";
		}
		elseif ($are['estado']==5&&$are['comprador']==14300192) {
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
}