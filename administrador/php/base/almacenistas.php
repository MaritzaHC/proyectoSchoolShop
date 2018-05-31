<?php
require '../../../nusoap/lib/nusoap.php';
$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?wsdl";
$client=new soapclient($wsdl,true);
$id = $_POST['idVen'];
settype($id, 'integer');
var_dump($id);
$parametro= array("idAlmacenista"=> $id);
$result=$client->call("eliminarAlmacenista",$parametro);
header("Location: ../almacenistas.php?pag=1");