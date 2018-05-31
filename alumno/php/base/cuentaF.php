<?php
require_once '../../../nusoap/lib/nusoap.php';
include 'verificacionLogin.php';

$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";
$client=new soapclient($wsdl,true);
$uu = @$_SESSION['username'];
settype($uu,'integer');

if ($_POST['Acontrasena']!=null and $_POST['Ncontrasena']!=null and $_POST['Ccontrasena']!=null) {
	if ($_POST['Ncontrasena']==$_POST['Ccontrasena']) {
			$parametro = array();
			$parametro['idAlumno'] = $uu;
			$parametro['contrasena'] = $_POST['Ccontrasena'];
			$parametro['Acontrasena'] = $_POST['Acontrasena'];
			$parametro['correo'] = $_POST['correo'];
			$parametro['tipo'] = 1;
			//$parametro['foto'] = $_POST['foto'];

			$parameters = array("x"=> $parametro);
			$result=$client->call("modificarAlumno",$parameters);
			header("Location: ../cuenta.php");
	}
	else header("Location: ../cuenta.php");

}
else {
	$parametro = array();
	$parametro['idAlumno'] = $uu;
	$parametro['contrasena'] = 1;
	$parametro['Acontrasena'] = 1;
	$parametro['tipo'] = 2;
	$parametro['correo'] = $_POST['correo'];
	//$parametro['foto'] = $_POST['foto'];

	$parameters = array("x"=> $parametro);
	$result=$client->call("modificarAlumno",$parameters);
	header("Location: ../cuenta.php");
}
