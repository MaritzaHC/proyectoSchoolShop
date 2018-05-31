<?php
	require '../../../nusoap/lib/nusoap.php';
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?wsdl";
	include_once 'verificacionLogin.php';
	$client=new soapclient($wsdl,true);
	$uu = @$_SESSION['username'];
	settype($uu,'integer');
	$id = $_POST['id'];
	$parametro = array();
	$parametro['idProductos'] = $_POST['id'];
	$parametro['descripcion'] = $_POST['descripcion'];
	$parametro['foto'] = "prue";
	$parametro['categoria'] = $_POST['categorias'];
	$parametro['tiempo'] = $_POST['tiempoDisponible'];
	$parametro['precio'] = $_POST['precio'];
	$parametro['titulo'] = $_POST['titulo'];
	$parametro['vendedor'] = $uu;
	$parametro['comprador'] = 0;
	$parametro['tipo'] = 1;
	$parametro['fecha'] = "1999-01-01";
	$parametro['estado'] = 1;
	
	$parameters = array("x"=> $parametro);
	$result=$client->call("modificarProducto",$parameters);
	header("Location: ../informacionCompra.php?id=$id");