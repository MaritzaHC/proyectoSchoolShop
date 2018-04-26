<?php
include 'consultasProductos.php';
function ventas()
{
	$x = array();
	$x = productos(1,1);

	foreach ($x as $are) {
		$titulo = $are['titulo'];
		$precio = $are['precio'];
		$id = $are['idProductos'];
		if($are['estado']==2&&$are['vendedor']==14300192){
		    echo "<div class=\"curso\">
				<div class=\"foto\"> <img src=\"frut.jpg\"> </div>
				<div class=\"resumen\">
					<p>$titulo</p>
					<p style=\"font-family: sans-serif;\">$precio</p>
				</div>
				<div class=\"detalles\" onclick=\"paraMenu($id,1)\">Ver detalles</div><!--manda llamar a la publicacion correspondiente-->
				<div class=\"boton\" id=\"curso\">En curso</div>
			</div>";
		}
		elseif ($are['estado']==1&&$are['vendedor']==14300191) {
			echo "<div class=\"publicado\">
				<div class=\"foto\"> <img src=\"frut.jpg\"> </div>
				<div class=\"resumen\">
					<p>$titulo</p>
					<p style=\"font-family: sans-serif;\">$precio</p>
				</div>
				<div class=\"detalles\" onclick=\"paraMenu($id,1)\">Ver detalles</div><!--manda llamar a la publicacion correspondiente-->
				<div class=\"boton\" id=\"publicado\">Publicado</div>
			</div>";
		}
		elseif ($are['estado']==4&&$are['vendedor']==14300192) {
			 echo "<div class=\"bloqueado\">
				<div class=\"foto\"> <img src=\"frut.jpg\"> </div>
				<div class=\"resumen\">
					<p>$titulo</p>
					<p style=\"font-family: sans-serif;\">$precio</p>
				</div>
				<div class=\"detalles\" onclick=\"paraMenu($id,2)\">Ver detalles</div><!--manda llamar a la publicacion correspondiente-->
				<div class=\"boton\" id=\"bloqueado\">Bloqueado</div>
			</div>";
		}
		elseif ($are['estado']==5&&$are['vendedor']==14300192) {
			echo "<div class=\"finalizado\">
				<div class=\"foto\"> <img src=\"frut.jpg\"> </div>
				<div class=\"resumen\">
					<p>$titulo</p>
					<p style=\"font-family: sans-serif;\">$precio</p>
				</div>
				<div class=\"detalles\" onclick=\"paraMenu($id,2)\">Ver detalles</div><!--manda llamar a la publicacion correspondiente-->
				<div class=\"boton\" id=\"finalizado\">Finalizado</div>
				<div class=\"eliminar\"><img src=\"..\..\imagenes\basura.png\"></div>
			</div>";
		}
	}
}
