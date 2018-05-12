<?php
require_once '../../../nusoap/lib/nusoap.php';
$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";

if (@$_GET['este']) {//comprar
	 $id = $_GET['este'];settype($id,'integer');
	 
	 $comprador = @$_SESSION['username'];settype($comprador,'integer');
	
	if($comprador!=$vendedor){
		$client=new soapclient($wsdl);
		$parametro = array();
		$parametro['id'] = $id;
		$parametro['vendedor'] = $vendedor;
		$parametro['comprador'] = $comprador;
		$parametro['titulo'] = $_GET['titulo'];
		
		$parameters = array("x"=> $parametro);
		json_encode($parameters);
		$result=$client->insertarComprador($parameters);
	}
	//header("Location: ../compras.php");
	exit;
}

if (@$_GET["id"]) {//reportar
	include 'consultasProductos.php';
	$laid = $_GET["id"];
	settype($laid,'integer');

	$razon = $_GET["razon"];
	var_dump($razon);
	$razones = explode(",", $razon);
	settype($razones[0],'integer');

	$resul = productosDeta($laid);
	$titulo = $resul['titulo'];
	$vendedor = $resul['vendedor'];

	$client=new soapclient($wsdl);
	$parametro = array();
	$parametro['idProducto'] = $laid;
	$parametro['vendedor'] = $vendedor;
	$parametro['nombre'] = $titulo;
	$parametro['tipo'] = $razones[0];
	$parametro['titulo'] = $razones[1];
	
	json_encode($parametro);
	$result=$client->reportarProducto($parametro);

	header("Location: ../inicio.php?=compras");
	exit;
}
