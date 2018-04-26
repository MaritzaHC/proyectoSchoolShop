<?php
require 'nusoap/lib/nusoap.php';

	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?wsdl";
	$client=new SoapClient($wsdl);
	$parametro = array('pag' => 1,'tipo' => 1);
	$result=$client->productosConsultaprincipal($parametro)->productosConsultaprincipalResult;

	$losproductos = array();
	$cuantos = count($result->ProductosModelo, COUNT_RECURSIVE);

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
