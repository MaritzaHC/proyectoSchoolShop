<?php
require '../../../nusoap/lib/nusoap.php';
$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?wsdl";
include_once 'verificacionLogin.php';
$client=new soapclient($wsdl,true);
$uu = @$_SESSION['username'];
settype($uu,'integer');

$byte_array = file_get_contents($_FILES["files"]["tmp_name"]);
$imagef = base64_encode(implode($byte_array));
	
if ($_POST['Acontrasena']!=null and $_POST['Ncontrasena']!=null and $_POST['Ccontrasena']!=null) {
	if ($_POST['Ncontrasena']==$_POST['Ccontrasena']) {

			$parameters = array("tipo"=> 1,
								"antiguaContrasena"=> $_POST['Acontrasena'],
								"nuevaContrasena"=>$_POST['Ncontrasena'],
								"correo"=>$_POST['correo'],
								"foto"=>"fd",
								"id"=>$uu);
			$result=$client->call("modificarAlumno",$parameters);
			var_dump($parameters);
			header("Location: ../cuenta.php");
			var_dump($result);
	}
	else header("Location: ../cuenta.php");

}
else {
$parameters = array("tipo"=> 2,
					"antiguaContrasena"=> $_POST['Acontrasena'],
					"nuevaContrasena"=>$_POST['Ncontrasena'],
					"correo"=>$_POST['correo'],
					"foto"=>$image,
					"id"=>$uu);
	$result=$client->call("modificarAlumno",$parameters);
	var_dump($parameters);
	//header("Location: ../cuenta.php");
}
