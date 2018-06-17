<?php @session_start(); 
if (@$_SESSION['loggedin'] == true && @$_SESSION['tipo'] == 1) {
	if (@$_SESSION['estado'] == "0") {
		$url= $_SERVER["REQUEST_URI"];
		$bloquear = explode("?", $url);
		if ($bloquear[0]=='/proyecto/alumno/php/publicacion.php'||$bloquear[0]=='/proyecto/alumno/php/inicio.php'||$bloquear[0]=='/proyecto/alumno/php/informacionCompra.php'||$bloquear[0]=='/proyecto/alumno/php/informacionOferta.php'||$bloquear[0]=='/proyecto/alumno/php/informacionPedido.php'||$bloquear[0]=='/proyecto/alumno/php/informacionObjeto.php') {
			header('Location: ../php/menuMiCuenta.php?no=no');
		}
	}
} 
else {header('Location: ../../index.php');}  