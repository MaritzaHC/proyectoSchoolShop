<?php
require_once '../../../nusoap/lib/nusoap.php';
include 'verificacionLogin.php';
$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";
$client=new soapclient($wsdl);
$uu = @$_SESSION['username'];
settype($uu,'integer');

if ($_POST['Acontrasena']!=null and $_POST['Ncontrasena']!=null and $_POST['Ccontrasena']!=null) {
	if ($_POST['Ncontrasena']==$_POST['Ccontrasena']) {
		if (validar) {
			$parametro = array();
			$parametro['idAlumno'] = $uu;
			$parametro['contrasena'] = 0;
			$parametro['correo'] = 0;
			$parametro['foto'] = 0;

			$parameters = array("x"=> $parametro);
			json_encode($parameters);
			$result=$client->modiicaradatosalumno($parameters);
			header("Location: ../cuenta.php");
		}
		else{}
	}

}
else {
	$parametro = array();
	$parametro['idAlumno'] = $uu;
	$parametro['contrasena'] = 0;
	$parametro['correo'] = 0;
	$parametro['foto'] = 0;

	$parameters = array("x"=> $parametro);
	json_encode($parameters);
	$result=$client->modiicaradatosalumno($parameters);
	header("Location: ../cuenta.php");
}
