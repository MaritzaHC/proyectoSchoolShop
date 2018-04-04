<?php
require_once 'lib/nusoap.php';

$wsdl="http://localhost:26439/ServiceSS.asmx?WSDL";

$client=new SoapClient($wsdl,1);

$result=$client->productosConsultaprincipal(1)->productosConsultaprincipalResult;

var_dump($result)."</br>";

?>