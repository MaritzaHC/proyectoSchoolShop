<?php
require '../../../nusoap/lib/nusoap.php';
$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?wsdl";
$client=new soapclient($wsdl,true);
$id = $_POST['idVen'];
settype($id, 'integer');
$parametro= array("usuario"=> $id);
$result=$client->call("eliminarVendedor",$parametro);
header("Location: ../comerciantes.php?pag=1");