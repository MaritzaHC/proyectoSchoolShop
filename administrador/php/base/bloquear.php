<?php
require '../../../nusoap/lib/nusoap.php';
$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?wsdl";
$client=new soapclient($wsdl,true);
$id = $_POST['id'];
settype($id, 'integer');

$estado = $_POST['estado'];
settype($estado, 'integer');
$parametro= array("id"=> $id, "estado"=> $estado);
$result=$client->call("modificarEstadoAlumno",$parametro);
?>
