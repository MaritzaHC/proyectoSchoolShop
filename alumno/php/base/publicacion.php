<?php
	require_once '../../../nusoap/lib/nusoap.php';
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";
	$client=new soapclient($wsdl);
if($_POST['tipo'] == 1)
{
	$parametro = array();
	$parametro['idProductos'] = 0;
	$parametro['descripcion'] = $_POST['descripcion'];
	$parametro['foto'] = "prue";//falta
	$parametro['categoria'] = $_POST['categorias'];;
	$parametro['tiempo'] = $_POST['tiempoDisponible'];
	$parametro['precio'] = $_POST['precio'];
	$parametro['titulo'] = $_POST['titulo'];
	$parametro['vendedor'] = 14300191;//falta
	$parametro['comprador'] = 0;
	$parametro['tipo'] = 1;
	$parametro['fecha'] = "1999-01-01";
	$parametro['estado'] = 1;
	
	$parameters = array("x"=> $parametro);
	json_encode($parameters);
	$result=$client->insertarProducto($parameters);
	header("Location: ../ventas.php");
}  
else{
	$parametro = array();
	$parametro['idObjetoPerdido']=0;
	$parametro['foto']="algo";
	$parametro['descripcion']=$_POST['descripcion'];
	$parametro['publicador']=14300191;
	$parametro['id_lugar']=1;
	$parametro['titulo']=$_POST['titulo'];
	$parametro['fecha']="1999-01-01";
	$parametro['estado']=1;
	$parametro['lugarString']=$_POST['donde'];

	$parameters = array("x"=> $parametro);
	json_encode($parameters);
	$result=$client->insertarObjetoPerdido($parameters);
	header("Location: ../objetos.php");
}
?>