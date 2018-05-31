<?php
	require '../../../nusoap/lib/nusoap.php';
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?wsdl";
	include_once 'verificacionLogin.php';
	$client=new soapclient($wsdl,true);
	$uu = @$_SESSION['username'];
	settype($uu,'integer');
	$tipo=$_POST['tipo'];
	settype($tipo,'integer');
	settype($_POST['donde'],'integer');
$id = $_POST['id'];

	$parametro = array();
	$parametro['idObjetoPerdido']=$_POST['id'];
	$parametro['foto']="algo";
	$parametro['descripcion']=$_POST['descripcion'];
	$parametro['publicador']=$uu;
	$parametro['id_lugar']=$_POST['donde'];
	$parametro['titulo']=$_POST['titulo'];
	$parametro['fecha']="1999-01-01";
	$parametro['estado']=1;
	$parametro['lugarString']="dj";
	
	$parameters = array("x"=> $parametro);
	$result=$client->call("insertarObjetoPerdido",$parameters);
	header("Location: ../objetos.php");