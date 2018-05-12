<?php
require '../nusoap/lib/nusoap.php';
$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";

$client=new SoapClient($wsdl);

$parametro = array();
	$parametro['usuariopk'] = $_POST['nombre'];
	$parametro['password'] = $_POST['contrasena'];
	$parametro['tipodeCuenta'] = 0;
	$parametro['fecha'] = "1999-01-01";
	
	$parameters = array("x"=> $parametro);
	json_encode($parameters);
	$result=$client->validar($parameters);
	var_dump($result);

	if($result->validarResult!=0){
		if ($result->validarResult==1) {
			@session_start();
			$_SESSION['loggedin'] = true;
	    	$_SESSION['username'] = $_POST['nombre'];
	    	$_SESSION['tipo'] = 1;
			header('Location: ../alumno/php/inicio.php?i=compras');
		}
		elseif ($result->validarResult==3) {
			@session_start();
			$_SESSION['loggedin'] = true;
	    	$_SESSION['username'] = $_POST['nombre'];
	    	$_SESSION['tipo'] = 3;
			header('Location: ../almacenista/php/notificaciones.php');
		}
		elseif ($result->validarResult==4) {
			@session_start();
			$_SESSION['loggedin'] = true;
	    	$_SESSION['username'] = $_POST['nombre'];
	    	$_SESSION['tipo'] = 4;
			header('Location: ../administrador/php/notificaciones.php');
		}
		else{
			header('Location: ../index.php');
		}
	}
	else{
		header('Location: ../index.php');
	}
?>
