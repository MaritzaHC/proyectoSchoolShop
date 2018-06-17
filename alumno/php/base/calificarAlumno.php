<?php
	require_once '../../../nusoap/lib/nusoap.php';
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?wsdl";

$client=new soapclient($wsdl,true);
$calificacion = $_POST['estrella'];
settype($calificacion, "integer");
$id =  $_POST['idProductos'];
settype($id, "integer");

if ($_POST['tipo']=="vend") {
	$parameters = array("tipo"=>1, "calificacion"=>$calificacion, "productos"=>$id);
	$result=$client->call("ModificarCalificacionAlumno",$parameters);
	header("Location: ../compras.php");
}
else{
	$parameters = array("tipo"=>2, "calificacion"=>$calificacion, "productos"=> $id);
	$result=$client->call("ModificarCalificacionAlumno",$parameters);
	header("Location: ../ventas.php");
}


