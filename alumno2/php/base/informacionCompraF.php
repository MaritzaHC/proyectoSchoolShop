<?php
require_once '../../../nusoap/lib/nusoap.php';
$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";

if (@$_GET['este']) {//comprar
	 $id = $_GET['este'];

	if($comprador!=$vendedor){
		$client=new soapclient($wsdl);
		$parametro = array();
		$parametro['idProducto'] = $id;
		$parametro['vendedor'] = $razon;
		$parametro['comprador'] = $razon;
		$parametro['titulo'] = $razon;
		
		$parameters = array("x"=> $parametro);
		json_encode($parameters);
		$result=$client->comprarproducto($parameters);
	}
	header("Location: ../compras.php");
	exit;
}

if (@$_GET["id"]) {//reportar
	$laid = $_GET["id"];
	settype($laid,'integer');
	$razon = $_GET["razon"];
	settype($razon,'integer');

	$client=new soapclient($wsdl);
	$parametro = array();
	$parametro['idProducto'] = $laid;
	$parametro['vendedor'] = $razon;
	$parametro['nombre'] = $razon;
	$parametro['tipo'] = $razon;
	
	$parameters = array("x"=> $parametro);
	json_encode($parameters);
	$result=$client->reportarproducto($parameters);

	header("Location: ../inicio.php?=compras");
	exit;
}