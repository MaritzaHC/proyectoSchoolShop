<?php 
require '../../../nusoap/lib/nusoap.php';
$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?wsdl";
$client=new soapclient($wsdl,true);
$id = $_POST['id'];
settype($id, "integer");	
$parameters = array("nombre"=> $_POST['nombre'], "foto"=> 2,"ubicacion"=> $_POST['ubicacion'],"id"=> $id);
var_dump($parameters);
$result=$client->call("modificarAlmacenista",$parameters)["modificarAlmacenistaResult"];
header("Location: ../almacenistas.php?pag=1");