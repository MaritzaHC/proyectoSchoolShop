<?php
require '../nusoap/lib/nusoap.php';
/*Esta funcion retorna un arreglo que contien los productos que estan en la base de datos
Se solicita el tipo (1-alumno)(2-vendedor)(3-ofertas) y la pagina*/
$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?wsdl";


	$client=new SoapClient($wsdl);
	$parametro = array('pag' => 1,'tipo' => 1);
	$result=$client->productosConsultaprincipal($parametro)->productosConsultaprincipalResult;

	var_dump($result);

	$losproductos = array();
	$cuantos = count($result->ProductosModelo, COUNT_RECURSIVE);
	if($cuantos == 1){
		$losproductos[0] = array(
			'idProductos'=>$result->ProductosModelo->idProductos,
			'descripcion'=>$result->ProductosModelo->descripcion,
			'titulo'=>$result->ProductosModelo->titulo,
			'categoria'=>$result->ProductosModelo->categoria,
			'vendedor'=>$result->ProductosModelo->vendedor,
			'comprador'=>$result->ProductosModelo->comprador,
			'estado'=>$result->ProductosModelo->estado,
			'foto'=>$result->ProductosModelo->foto,
			'precio'=>$result->ProductosModelo->precio);
	}else{

	for ($i=0; $i < $cuantos; $i++) { 
		$losproductos[$i] = array(
								  'idProductos'=>$result->ProductosModelo[$i]->idProductos,
								  'descripcion'=>$result->ProductosModelo[$i]->descripcion,
								  'titulo'=>$result->ProductosModelo[$i]->titulo,
								  'categoria'=>$result->ProductosModelo[$i]->categoria,
								  'vendedor'=>$result->ProductosModelo[$i]->vendedor,
								  'comprador'=>$result->ProductosModelo[$i]->comprador,
								  'estado'=>$result->ProductosModelo[$i]->estado,
								  'foto'=>$result->ProductosModelo[$i]->foto,
								  'precio'=>$result->ProductosModelo[$i]->precio);
	}
	}
	var_dump($losproductos);
