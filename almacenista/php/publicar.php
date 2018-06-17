<?php
	require '../../../nusoap/lib/nusoap.php';
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?wsdl";
	include_once 'verifi.php';
	$client=new soapclient($wsdl,true);
	$uu = @$_SESSION['username'];
	settype($uu,'integer');
	settype($tipo,'integer');

	$byte_array = file($_FILES["imagen"]["tmp_name"]);
	$imagef = base64_encode(implode($byte_array));
	settype($_POST['donde'],'integer');
	
	$parameters = array("titulo"=>$_POST['titulo'],
						"descripcion"=>$_POST['descripcion'],
						"lugar"=>$_POST['donde'],
						"publicador"=>$uu,
						"arregloString"=>$imagef);
	$result=$client->call("insertarObjetoPerdido",$parameters);
	
	header("Location: ../notificaciones.php");

?>