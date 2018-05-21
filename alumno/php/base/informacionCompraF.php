<?php
require_once '../../../nusoap/lib/nusoap.php';
include 'verificacionLogin.php';
$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";

if (@$_GET['este']) {//comprar
	 $id = $_GET['este'];
	 settype($id,'integer');
	 $vendedor = $_GET['vendedor'];
	 settype($vendedor,'integer');
	 $comprador = @$_SESSION['username'];
	 settype($comprador,'integer');
	
	if($comprador!=$vendedor){
		$client=new soapclient($wsdl,true);
		$parametro = array();
		$parametro['idProducto'] = $id;
		$parametro['idVendedor'] = $vendedor;
		$parametro['idComprador'] = $comprador;
		$parametro['titulo'] = $_GET['titulo'];
		$result=$client->call("ComprarProducto", $parametro);
		if ($result) header("Location: ../compras.php");
		else header("Location: ../informacionCompra.php?id=$id&no=no");
	}
	else {
		header("Location: ../informacionCompra.php?id=$id&no=no");
	}
	exit;
}

if (@$_GET['id']) {//reportar
	require_once 'consultasProductos.php';
	echo "aquixc";
	$laid = $_GET['id'];
	settype($laid,'integer');
	var_dump($laid);

	$razon = $_GET['razon'];
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
	$result=$client->reportarproducto($parametro);

	header("Location: ../inicio.php?=compras");
	exit;
}
?>