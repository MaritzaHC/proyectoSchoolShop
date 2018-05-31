<?php 
require '../../../nusoap/lib/nusoap.php';
$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?wsdl";
$client=new soapclient($wsdl,true);
		
$parameters = array("idCategoria"=> $_POST['id']);
$result=$client->call("eliminarCategoria",$parameters);
header("Location: ../categorias.php");	