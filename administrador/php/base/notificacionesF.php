<?php
require_once '../../../nusoap/lib/nusoap.php';
include 'verificacionLogin.php';
$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";

$id = $_POST['idNotificaciones'];

$client=new soapclient($wsdl,true);
$parametro = array('idNotificaciones'=>$id);
$result=$client->call("eliminarNotificacion", $parametro);
if ($result) header("Location: ../notificaciones.php");
else header("Location: ../notificaciones.php?no=no");