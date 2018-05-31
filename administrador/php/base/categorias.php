<?php 
require '../../../nusoap/lib/nusoap.php';
$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?wsdl";
$client=new soapclient($wsdl,true);
		
$parameters = array("nombre"=> $_POST['filtro']);
$result=$client->call("insertarCategoria",$parameters);
header("Location: ../categorias.php");