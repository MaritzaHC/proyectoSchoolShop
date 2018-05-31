<?php 
require '../../../nusoap/lib/nusoap.php';
$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?wsdl";
$client=new soapclient($wsdl,true);
$parametro = array();
	$parametro['idAlmacenista'] = 0;
	$parametro['nombre'] = $_POST['nombre'];
	$parametro['foto'] = "prue";
	$parametro['ubicacion'] = $_POST['ubicacion'];
		
$parameters = array("x"=> $parametro, "contrasena" => $_POST['contrasena']);
$result=$client->call("insertarAlmacenista",$parameters);
header("Location: ../almacenistas.php?pag=1");