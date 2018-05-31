<?php 
require '../../../nusoap/lib/nusoap.php';
$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?wsdl";
$client=new soapclient($wsdl,true);
$parametro = array();
	$parametro['server'] = $_POST['Servidor'];
	$parametro['usuario'] = $_POST['usuarioBase'];
	$parametro['pwd'] = $_POST['contrasena'];
	$parametro['database'] = $_POST['nombreBase'];
	$parametro['tablaAlumno'] = $_POST['tabla'];
	$parametro['campoId'] = $_POST['id'];
	$parametro['campoNombre'] = $_POST['alumnoNom'];
	$parametro['campoApellidoP'] = $_POST['alumnoPa'];
	$parametro['campoApellidoM'] = $_POST['alumnoMa'];
	$parametro['campoCorreo'] = $_POST['alumnoCo'];
		
$result=$client->call("insertarAlumnos",$parametro);
header("Location: ../alumnos.php?pag=1");