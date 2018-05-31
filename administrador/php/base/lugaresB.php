<?php 
require '../../../nusoap/lib/nusoap.php';
$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?wsdl";
$client=new soapclient($wsdl,true);
		
$parameters = array("id"=> $_POST['id']);
$result=$client->call("borrarLugar",$parameters);
header("Location: ../lugares.php");	