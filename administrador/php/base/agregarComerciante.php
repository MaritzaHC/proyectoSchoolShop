<?php 
require '../../../nusoap/lib/nusoap.php';
$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?wsdl";
$client=new soapclient($wsdl,true);
$parametro = array();
	$parametro['idVendedor'] = 0;
	$parametro['nombre'] = $_POST['nombre'];
	$parametro['foto'] = "prue";
	$parametro['telefono'] = $_POST['telefono'];
	$parametro['ubicacion'] = $_POST['ubicacion'];
	$parametro['estado'] = 1;
		
$parameters = array("x"=> $parametro, "contrasena" => $_POST['contrasena']);
$result=$client->call("insertarVendedor",$parameters);
header("Location: ../comerciantes.php?pag=1");