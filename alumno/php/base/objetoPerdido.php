<?php
include 'consultasProductos.php';
	$x = array();
	$x = ObjetoPerdido(1,1);

	foreach ($x as $are) {
		$titulo = $are['titulo'];
		$id = $are['idObjetoPerdido'];
		if($are['publicador']==14300192){
		    echo "<div class=\"curso\">
				<div class=\"foto\"> <img src=\"frut.jpg\"> </div>
				<div class=\"resumen\">
					<p style=\"margin-top: 10px\">$titulo</p>
				</div>
				<div class=\"detalles\" onclick=\"pendiente('lo da php')\">Ver detalles</div><!--manda llamar a la publicacion correspondiente-->
			</div>";
		}
	}
