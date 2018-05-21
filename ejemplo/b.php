<?php
require 'nusoap/lib/nusoap.php';

$pag=1; $tipo=1;

	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?wsdl";
	$client=new SoapClient($wsdl);
	$parametro = array('pag' => $pag,'tipo' => $tipo);
	$result=$client->productosConsultaprincipal($parametro)->productosConsultaprincipalResult;

	$losproductos = array();
	$cuantos = count($result->productosConsultaprincipalctosModelo, COUNT_RECURSIVE);
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
