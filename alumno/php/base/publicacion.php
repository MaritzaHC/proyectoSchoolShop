<?php
	require '../../../nusoap/lib/nusoap.php';
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?wsdl";
	include_once 'verificacionLogin.php';
	$client=new soapclient($wsdl,true);
	$uu = @$_SESSION['username'];
	settype($uu,'integer');
	$tipo=$_POST['tipo'];
	settype($tipo,'integer');

if($tipo == 1)
{
	$parametro = array();
	$parametro['idProductos'] = 0;
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
	$result=$client->call("insertarProducto",$parameters);
	header("Location: ../ventas.php");
}  
else{
	settype($_POST['donde'],'integer');
	$parametro = array();
	$parametro['idObjetoPerdido']=0;
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
}
?>