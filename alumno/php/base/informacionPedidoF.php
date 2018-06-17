<?php
	require '../../../nusoap/lib/nusoap.php';
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?wsdl";
	include_once 'verificacionLogin.php';
	include_once 'consultasAlumno.php';
	$client=new soapclient($wsdl,true);
	$uu = @$_SESSION['username'];
	settype($uu,'integer');

	$alumno = alumnosDeta($uu);

	$datos = $_POST['producto'];
	$da = explode(",", $datos);
	settype($da[2],'integer');
	settype($da[0],'integer');

	$idVen = $_POST['vendedor'];
	settype($idVen, "integer");

	$cantidad = $_POST['cantidad'];
	settype($cantidad, "integer");

	$parameters = array("nomAlum"=> $alumno['nombre']." ". $alumno['nombre']." ". $alumno['apellidoP']." ".$alumno['apelldioM'], 
						"nomProdu"=>$da[4],
						"idVen"=>$idVen,
						"idcom"=>$uu,
						"idprodu"=>$da[2],
						"precio"=>$da[0],
						"cantidad"=>$cantidad);

	$result=$client->call("insertarCompradorVendedor",$parameters);
	header("Location: ../pedidos.php");

?>