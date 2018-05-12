<?php
require '../../nusoap/lib/nusoap.php';
/*Esta funcion retorna un arreglo que contien los productos que estan en la base de datos
Se solicita el tipo (1-alumno)(2-vendedor)(3-ofertas) y la pagina*/
$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?wsdl";
function productos($tipo,$pag)
{
	global $wsdl;
	$client=new SoapClient($wsdl);
	$parametro = array('pag' => $pag,'tipo' => $tipo);
	$result=$client->productosConsultaprincipal($parametro)->productosConsultaprincipalResult;

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
	return $losproductos;
}
/*Muestra un producto en detalle*/
function productosDeta($id)
{
	global $wsdl;
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
	global $wsdl;
	$client=new SoapClient($wsdl);
	$parametro = array('pag' => $pag,'estado' => $estado);
	$result=$client->consultaGeneralObjetoPerdido($parametro)->consultaGeneralObjetoPerdidoResult;

	$losproductos = array();
	$cuantos = count($result->ObjetoPerdidoModelo, COUNT_RECURSIVE);
	if($cuantos == 1){
		$losproductos[0] = array(
			'idObjetoPerdido'=>$result->ObjetoPerdidoModelo->idObjetoPerdido,
			'descripcion'=>$result->ObjetoPerdidoModelo->descripcion,
			'publicador'=>$result->ObjetoPerdidoModelo->publicador,
			'id_lugar'=>$result->ObjetoPerdidoModelo->id_lugar,
			'titulo'=>$result->ObjetoPerdidoModelo->titulo,
			'fecha'=>$result->ObjetoPerdidoModelo->fecha,
			'estado'=>$result->ObjetoPerdidoModelo->estado,
			'foto'=>$result->ObjetoPerdidoModelo->foto);
			//'lugarString'=>$result->ObjetoPerdidoModelo->lugarString);
	}else {
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
	}
	return $losproductos;
}
/*Muestra en detalle un objeto perdido*/
function objetosDeta($id)
{
	global $wsdl;
	$client=new SoapClient($wsdl);
	$parametro = array('id' => $id);
	$result=$client->consultaDetalleObjetoPerdido($parametro)->consultaDetalleObjetoPerdidoResult;

		$losproductos = array(
							  'idObjetoPerdido'=>$result->ObjetoPerdidoModelo->idObjetoPerdido,
							  'descripcion'=>$result->ObjetoPerdidoModelo->descripcion,
							  'publicador'=>$result->ObjetoPerdidoModelo->publicador,
							  'id_lugar'=>$result->ObjetoPerdidoModelo->id_lugar,
							  'titulo'=>$result->ObjetoPerdidoModelo->titulo,
							  'fecha'=>$result->ObjetoPerdidoModelo->fecha,
							  'estado'=>$result->ObjetoPerdidoModelo->estado,
							  'foto'=>$result->ObjetoPerdidoModelo->foto,
							  'lugarString'=>$result->ObjetoPerdidoModelo->lugarString);
							  
	return $losproductos;
}
function categorias()
{
	global $wsdl;
	$client=new SoapClient($wsdl);
	$result=$client->categoriaConsultaGerneral()->categoriaConsultaGerneralResult;

	$losproductos = array();
	$cuantos = count($result->CategoriasModelo, COUNT_RECURSIVE);
	if($cuantos == 1){
		$losproductos[0] = array(
			'idCategorias'=>$result->CategoriasModelo->idCategorias,
			'nombre'=>$result->CategoriasModelo->nombre);
	}else{
		for ($i=0; $i < $cuantos; $i++) { 
			$losproductos[$i] = array(
								  'idCategorias'=>$result->CategoriasModelo[$i]->idCategorias,
								  'nombre'=>$result->CategoriasModelo[$i]->nombre);
		}
	}
	return $losproductos;
}
function lugaresConsulta()
{
	global $wsdl;
	$client=new SoapClient($wsdl);
	$result=$client->consultaLugares()->consultaLugaresResult;

	$losproductos = array();
	$cuantos = count($result->LugarModelo, COUNT_RECURSIVE);

	if($cuantos == 1){
		$losproductos[0] = array(
			'idLugar'=>$result->LugarModelo->idLugar,
			'nombre'=>$result->LugarModelo->nombre);
	}else{
		for ($i=0; $i < $cuantos; $i++) { 
			$losproductos[$i] = array(
								  'idLugar'=>$result->LugarModelo[$i]->idLugar,
								  'nombre'=>$result->LugarModelo[$i]->nombre);
		}
	}
	return $losproductos;
}
function historialMisVentas($idUsuario)
{
	global $wsdl;
	$client=new SoapClient($wsdl);
	$parametro = array('idUsuario' => $idUsuario);
	$result=$client->historialMisVentas($parametro)->historialMisVentasResult;

	$losproductos = array();
	$cuantos = count($result->ProductosModelo, COUNT_RECURSIVE);

	if($cuantos == 1){
		$losproductos[0] = array(
			'titulo'=>$result->ProductosModelo->titulo,
			'idProductos'=>$result->ProductosModelo->idProductos,
			'estado'=>$result->ProductosModelo->estado);
	} else {
		for ($i=0; $i < $cuantos; $i++) { 
			$losproductos[$i] = array(
								  'titulo'=>$result->ProductosModelo[$i]->titulo,
								  'idProductos'=>$result->ProductosModelo[$i]->idProductos,
								  'estado'=>$result->ProductosModelo[$i]->estado);
		}
	}
	return $losproductos;
}
function historialMisCompras($idUsuario,$tipo)
{
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?wsdl";
	$client=new SoapClient($wsdl);
	$parametro = array('idUsuario' => $idUsuario, 'tipo'=> $tipo);
	$result=$client->historialMisCompras($parametro)->historialMisComprasResult;

	$losproductos = array();
	
	$cuantos = @count($result->ProductosModelo, COUNT_RECURSIVE);

	if($cuantos == 1){
		$losproductos[0] = array(
							  'titulo'=>$result->ProductosModelo->titulo,
							  'idProductos'=>$result->ProductosModelo->idProductos,
							  'estado'=>$result->ProductosModelo->estado);
	} else{
		for ($i=0; $i < $cuantos; $i++) { 
			$losproductos[$i] = array(
								  'titulo'=>$result->ProductosModelo[$i]->titulo,
								  'idProductos'=>$result->ProductosModelo[$i]->idProductos,
								  'estado'=>$result->ProductosModelo[$i]->estado);
		}
	}
	return $losproductos;
}
function historialObjetosPerdidos($idUsuario)
{
	global $wsdl;
	$client=new SoapClient($wsdl);
	$parametro = array('idUsuario' => $idUsuario);
	$result=$client->historialObjetosPerdidos($parametro)->historialObjetosPerdidosResult;

	$losproductos = array();
	$cuantos = count($result->ObjetoPerdidoModelo, COUNT_RECURSIVE);

	if($cuantos == 1){
		$losproductos[0] = array(
			'titulo'=>$result->ObjetoPerdidoModelo->titulo,
			'idObjetoPerdido'=>$result->ObjetoPerdidoModelo->idObjetoPerdido,
			'estado'=>$result->ObjetoPerdidoModelo->estado);
	}
	else{
		for ($i=0; $i < $cuantos; $i++) { 
			$losproductos[$i] = array(
								  'titulo'=>$result->ObjetoPerdidoModelo[$i]->titulo,
								  'idObjetoPerdido'=>$result->ObjetoPerdidoModelo[$i]->idObjetoPerdido,
								  'estado'=>$result->ObjetoPerdidoModelo[$i]->estado);
		}
	}
	return $losproductos;
}