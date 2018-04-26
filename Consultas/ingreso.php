<?php
require '../nusoap/lib/nusoap.php';
$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";

$client=new SoapClient($wsdl);
$parametro = array('nombre' => $_POST['nombre'],'contrasena' => $_POST['contrasena']);
$result=$client->verificacion($parametro)->verificacionResult;

$losproductos = array();

	if($result->verificacionModelo->resultado==true){
		if ($result->verificacionModelo->tipo==1) {
			@session_start();
			$_SESSION['loggedin'] = true;
	    	$_SESSION['username'] = $_POST['nombre'];
	    	$_SESSION['tipo'] = $result->verificacionModelo->tipo;
			header('Location: ../alumno/php/inicio.php');
		}
		elseif ($result->verificacionModelo->tipo==3) {
			@session_start();
			$_SESSION['loggedin'] = true;
	    	$_SESSION['username'] = $_POST['nombre'];
	    	$_SESSION['tipo'] = $result->verificacionModelo->tipo;
			header('Location: ../almacenista/php/inicio.php');
		}
	}
	else{
		header('Location: ../index.php');
	}
?>
