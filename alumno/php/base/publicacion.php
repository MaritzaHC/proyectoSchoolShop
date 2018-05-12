<?php
	require_once '../../../nusoap/lib/nusoap.php';
	include 'verificacionLogin.php';
	$wsdl="http://localhost:5316/ServiceSS.asmx?WSDL";
	$client=new soapclient($wsdl);
	$uu = @$_SESSION['username'];
	settype($uu,'integer');

if($_POST['tipo'] == 1)
{
	$parametro = array();
	$parametro['idProductos'] = 0;
	$parametro['descripcion'] = $_POST['descripcion'];
	$parametro['foto'] = "prue";
	$parametro['categoria'] = $_POST['categorias'];;
	$parametro['tiempo'] = $_POST['tiempoDisponible'];
	$parametro['precio'] = $_POST['precio'];
	$parametro['titulo'] = $_POST['titulo'];
	$parametro['vendedor'] = $uu;
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
	echo "aqui";
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
	var_dump($parametro);
	$parameters = array("x"=> $parametro);
	json_encode($parameters);
	$result=$client->insertarObjetoPerdido($parameters);
	if ($result) {
		echo "si";
	}
	echo "final";
	//header("Location: ../objetos.php");
}
?>