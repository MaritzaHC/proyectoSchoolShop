<?php @session_start(); 
if (@$_SESSION['loggedin'] == true && @$_SESSION['tipo'] == 1) {
	if (@$_SESSION['estado'] == false) {
		$url= $_SERVER["REQUEST_URI"];
		if ($url=='proyecto/alumno/php/publicacion.php') {
			/*proyecto/alumno/php/inicio.php?i=compras
			proyecto/alumno/php/informacionCompra.php?id=6969759
			proyecto/alumno/php/informacionOferta.php?id=9
			proyecto/alumno/php/informacionPedido.php?id=9
			proyecto/alumno/php/informacionObjeto.php?id=1*/
			header('Location: /menuMiCuenta.php');
		}
	}
} 
else {header('Location: ../../index.php');} 