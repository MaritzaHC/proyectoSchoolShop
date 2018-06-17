<?php
require '../../../nusoap/lib/nusoap.php';
$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?wsdl";
include_once 'verificacionLogin.php';
$client=new soapclient($wsdl,true);

	$uu = @$_SESSION['username'];
	settype($uu,'integer');
	$ven = $_GET['ven'];
	settype($ven, 'integer');

$parameters = array("usuariou"=>$ven, 
					"usuariod"=>$uu);

$result=$client->call("insertarConversacion",$parameters);
header("Location: ../ventas.php");