<?php
require '../../nusoap/lib/nusoap.php';
/*Esta funcion retorna un arreglo que contien los productos que estan en la base de datos
Se solicita el tipo (1-alumno)(2-vendedor)(3-ofertas) y la pagina*/
function productos($tipo,$pag)
{
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?wsdl";
	$client=new SoapClient($wsdl);
	$parametro = array('pag' => $pag,'tipo' => $tipo);
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
	return $losproductos;
}
/*Muestra un producto en detalle*/
function productosDeta($id)
{
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";
	$client=new SoapClient($wsdl);
	$parametro = array('id' => $id);
	$result=$client->productosConsultaDetalle($parametro)->productosConsultaDetalleResult;
	$losproductos = array();
		$losproductos = array(
							  'idProductos'=>$result->ProductosModelo->idProductos,
							  'descripcion'=>$result->ProductosModelo->descripcion,
							  'titulo'=>$result->ProductosModelo->titulo,
							  'categoria'=>$result->ProductosModelo->categoria,
							  'vendedor'=>$result->ProductosModelo->vendedor,
							  'comprador'=>$result->ProductosModelo->comprador,
							  'estado'=>$result->ProductosModelo->estado,
							  'precio'=>$result->ProductosModelo->precio,
							  'foto'=>$result->ProductosModelo->foto);
	return $losproductos;
}
/*Muestra todos los objetos perdidos que no han sido reclamados*/
function ObjetoPerdido($estado,$pag)
{
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?wsdl";
	$client=new SoapClient($wsdl);
	$parametro = array('pag' => $pag,'estado' => $estado);
	$result=$client->consultaGeneralObjetoPerdido($parametro)->consultaGeneralObjetoPerdidoResult;

	$losproductos = array();
	$cuantos = count($result->ObjetoPerdidoModelo, COUNT_RECURSIVE);

	for ($i=0; $i < $cuantos; $i++) { 
		$losproductos[$i] = array(
								  'idObjetoPerdido'=>$result->ObjetoPerdidoModelo[$i]->idObjetoPerdido,
								  'descripcion'=>$result->ObjetoPerdidoModelo[$i]->descripcion,
								  'publicador'=>$result->ObjetoPerdidoModelo[$i]->publicador,
								  'id_lugar'=>$result->ObjetoPerdidoModelo[$i]->id_lugar,
								  'titulo'=>$result->ObjetoPerdidoModelo[$i]->titulo,
								  'fecha'=>$result->ObjetoPerdidoModelo[$i]->fecha,
								  'estado'=>$result->ObjetoPerdidoModelo[$i]->estado,
								  'foto'=>$result->ObjetoPerdidoModelo[$i]->foto);
								 //'lugarString'=>$result->ObjetoPerdidoModelo[$i]->lugarString);
	}
	return $losproductos;
}
/*Muestra en detalle un objeto perdido*/
function objetosDeta($id)
{
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";
	$client=new SoapClient($wsdl);
	$parametro = array('id' => $id);
	$result=$client->consultaDetalleObjetoPerdido($parametro)->consultaDetalleObjetoPerdidoResult;

		$losproductos = array(
							  'idObjetoPerdido'=>$result->ObjetoPerdidoModelo[$i]->idObjetoPerdido,
							  'descripcion'=>$result->ObjetoPerdidoModelo[$i]->descripcion,
							  'publicador'=>$result->ObjetoPerdidoModelo[$i]->publicador,
							  'id_lugar'=>$result->ObjetoPerdidoModelo[$i]->id_lugar,
							  'titulo'=>$result->ObjetoPerdidoModelo[$i]->titulo,
							  'fecha'=>$result->ObjetoPerdidoModelo[$i]->fecha,
							  'estado'=>$result->ObjetoPerdidoModelo[$i]->estado,
							  'foto'=>$result->ObjetoPerdidoModelo[$i]->foto);
							  'lugarString'=>$result->ObjetoPerdidoModelo->lugarString);
							  
	return $losproductos;
}
function categorias()
{
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";
	$client=new SoapClient($wsdl);
	$result=$client->categoriaConsultaGerneral()->categoriaConsultaGerneralResult;

	$losproductos = array();
	$cuantos = count($result->CategoriasModelo, COUNT_RECURSIVE);

	for ($i=0; $i < $cuantos; $i++) { 
		$losproductos[$i] = array(
							  'idCategorias'=>$result->CategoriasModelo[$i]->idCategorias,
							  'nombre'=>$result->CategoriasModelo[$i]->nombre);
	}
	return $losproductos;
}