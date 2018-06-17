<?php
require '../nusoap/lib/nusoap.php';
$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";

$client=new SoapClient($wsdl,true);

	$parameters = array("usuario"=> $_POST['nombre'], "contrasena" => $_POST['contrasena']);
	json_encode($parameters);
	$result=$client->call("validar", $parameters)["validarResult"];

	if($result["validarResult"]!=0){
		$parameters = array("usuario"=> $_POST['nombre']);
		json_encode($parameters);
		$bloque=$client->call("obtenerDatosUsuario", $parameters)["obtenerDatosUsuarioResult"];

		if ($result["validarResult"]==1) {
			@session_start();
			$_SESSION['estado']=$bloque['LoginModelo']['estado'];
			$_SESSION['loggedin'] = true;
	    	$_SESSION['username'] = $_POST['nombre'];
	    	$_SESSION['tipo'] = 1;
			header('Location: ../alumno/php/inicio.php?i=compras&pag=1');
		}
		elseif ($result["validarResult"]==3) {
			@session_start();
			$_SESSION['loggedin'] = true;
	    	$_SESSION['username'] = $_POST['nombre'];
	    	$_SESSION['tipo'] = 3;
			header('Location: ../almacenista/php/notificaciones.php');
		}
		elseif ($result["validarResult"]==4) {
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
