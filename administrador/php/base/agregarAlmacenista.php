<?php 
require '../../../nusoap/lib/nusoap.php';
$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?wsdl";
$client=new soapclient($wsdl,true);
		
$parameters = array("contrasena" => $_POST['contrasena'],
					"nombre"=>$_POST['nombre'],
					"ubicacion"=>$_POST['ubicacion']);
$result=$client->call("insertarAlmacenista",$parameters);
header("Location: ../detalleAlmacenista.php?i=".$result);