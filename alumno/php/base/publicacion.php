<?php
	require '../../../nusoap/lib/nusoap.php';
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?wsdl";
	include_once 'verificacionLogin.php';
	$client=new soapclient($wsdl,true);
	$uu = @$_SESSION['username'];
	settype($uu,'integer');
	$tipo=$_POST['tipo'];
	settype($tipo,'integer');

	$byte_array = file_get_contents($_FILES["files"]["tmp_name"]);
	$image = base64_encode($byte_array);

if($tipo == 1)
{	
	$parameters = array("titulo"=> $_POST['titulo'], 
						"descripcion"=>$_POST['descripcion'],
						"categoria"=>$_POST['categorias'],
						"precio"=>$_POST['precio'],
						"tiempo"=>$_POST['tiempoDisponible'],
						"tipo"=>1,
						"foto"=>$image,
						"vendedor"=>$uu);
	$result=$client->call("insertarProducto",$parameters);
	header("Location: ../ventas.php");
}  
else{
	settype($_POST['donde'],'integer');
	
	$parameters = array("titulo"=>$_POST['titulo'],
						"descripcion"=>$_POST['descripcion'],
						"lugar"=>$_POST['donde'],
						"publicador"=>$uu);
	$result=$client->call("insertarObjetoPerdido",$parameters);
	header("Location: ../objetos.php");
}
?>