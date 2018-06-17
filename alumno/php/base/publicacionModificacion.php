<?php
	require '../../../nusoap/lib/nusoap.php';
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?wsdl";
	include_once 'verificacionLogin.php';
	$client=new soapclient($wsdl,true);
	$uu = @$_SESSION['username'];
	settype($uu,'integer');

	$byte_array = file($_FILES["imagen"]["tmp_name"]);
	$imagef = base64_encode(implode($byte_array));

	$id =$_POST['id'];
	$parameters = array("titulo"=> $_POST['titulo'],	
						"descripcion"=>$_POST['descripcion'],
						"categoria"=>$_POST['categorias'],
						"precio"=>$_POST['precio'],
						"tiempo"=>$_POST['tiempoDisponible'],
						"tipo"=>1,
						"foto"=>$_POST['foto'],
						"vendedor"=>$uu,
						"idProducto"=>$_POST['id'],
						"arregloString"=>$imagef);
	$result=$client->call("modificarProducto",$parameters);
	header("Location: ../informacionCompra.php?id=$id");