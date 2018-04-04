<?php
/*
require_once 'lib/nusoap.php';

$wsdl="http://localhost:26439/ServiceSS.asmx?WSDL";

$client=new nusoap_client($wsdl,true);

$result=$client->call('productosConsultaprincipal',1);

var_dump($result)."</br>";
//*/
/*
require_once 'lib/nusoap.php';

$wsdl="http://localhost:26439/ServiceSS.asmx?WSDL";

$client=new SoapClient($wsdl,1);

$result=$client->productosConsultaprincipal(1)->productosConsultaprincipalResult;

var_dump($result)."</br>";
/*
// /*
*/
require_once 'lib/nusoap.php';

$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";

$client=new soapclient($wsdl);
$parameters=array("pag"=>"1");

$result=$client->productosConsultaprincipal($parameters);

//var_dump($result)."</br>";

print json_encode($result->productosConsultaprincipalResult->ProductosModelo[1]->descripcion);
//*/
?>