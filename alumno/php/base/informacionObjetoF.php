<?php
	require '../../../nusoap/lib/nusoap.php';
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?wsdl";
	include_once 'verificacionLogin.php';
	$client=new soapclient($wsdl,true);
	$uu = @$_SESSION['username'];
	settype($uu,'integer');

	$publi = $_POST['publicador'];
	settype($publi, "integer");

	$id = $_POST['id'];
	settype($id, "integer");

	$parameters = array("id"=> $id, 
						"publicador"=>$publi,
						"solicitante"=>$uu,
						"titulo"=>$_POST['titulo']);

	$result=$client->call("solicitarObjetoPerdido",$parameters);
	var_dump($parameters);
//	header("Location: ../objetos.php");

?>