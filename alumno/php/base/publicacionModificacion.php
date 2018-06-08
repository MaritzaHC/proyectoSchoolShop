<?php
	require '../../../nusoap/lib/nusoap.php';
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?wsdl";
	include_once 'verificacionLogin.php';
	$client=new soapclient($wsdl,true);
	$uu = @$_SESSION['username'];
	settype($uu,'integer');

	$byte_array = file_get_contents($_FILES["files"]["tmp_name"]);
	$image = base64_encode($byte_array);
	$id =$_POST['id'];
	$parameters = array("titulo"=> $_POST['titulo'],
						"descripcion"=>$_POST['descripcion'],
						"categoria"=>$_POST['categorias'],
						"precio"=>$_POST['precio'],
						"tiempo"=>$_POST['tiempoDisponible'],
						"tipo"=>1,
						"foto"=>$image,
						"vendedor"=>$uu,
						"idProducto"=>$_POST['id']);
	$result=$client->call("modificarProducto",$parameters);
	header("Location: ../informacionCompra.php?id=$id");