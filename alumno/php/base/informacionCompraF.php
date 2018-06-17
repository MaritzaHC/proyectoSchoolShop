<?php
	require_once '../../../nusoap/lib/nusoap.php';
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?wsdl";
	include_once 'verificacionLogin.php';

	 $client=new soapclient($wsdl,true);

if (@$_GET['este']) {//comprar
	 $id = $_GET['este'];
	 settype($id,'integer');
 	 $vendedor = $_GET['vendedor'];
	 settype($vendedor,'integer');
	 $comprador = @$_SESSION['username'];
	 settype($comprador,'integer');
	
	if($comprador!=$vendedor){
		
		$parametro = array();
		$parametro['idProducto'] = $id;
		$parametro['idVendedor'] = $vendedor;
		$parametro['idComprador'] = $comprador;
		$parametro['titulo'] = $_GET['titulo'];

		$result=$client->call("ComprarProducto", $parametro);

		var_dump($parametro);

		if ($result) header("Location: ../compras.php");
		else header("Location: ../informacionCompra.php?id=$id&no=no");
	}
	else {
		header("Location: ../informacionCompra.php?id=$id&no=no");
	}
	exit;
}

if (@$_GET['id']) {//reportar
	
	$laid = $_GET['id'];
	settype($laid,'integer');

 	$vendedor = $_GET['vendedor'];
	settype($vendedor,'integer');
	$razon = $_GET['razon'];
	$razones = explode(",", $razon);
	settype($razones[0],'integer');

	$parametro = array();
	$parametro['idProducto'] = $laid;
	$parametro['vendedor'] = $vendedor;
	$parametro['nombre'] = $_GET['titulo'];
	$parametro['tipo'] = $razones[0];
	$parametro['titulo'] = $razones[1];
	
	$result=$client->call("reportarproducto", $parametro);

	var_dump($parametro);	
	header("Location: ../inicio.php?i=compras?pag=1");
	exit;
}
?>