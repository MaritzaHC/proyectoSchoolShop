<?php
require_once '../../nusoap/lib/nusoap.php';
$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?wsdl";
/*Esta funcion retorna un arreglo que contien los productos que estan en la base de datos
Se solicita el tipo (1-alumno)(2-vendedor)(3-ofertas) y la pagina*/
function productos($tipo,$pag){
	global $wsdl;	
	$client=new SoapClient($wsdl, true);
	$parametro = array('pag' => $pag,'tipo' => $tipo, 'cuantos' => 13);
	$result=$client->call("productosConsultaprincipal", $parametro)["productosConsultaprincipalResult"];
	if ($result=="") {return 0;}
	$losproductos = array();
	$cuantos = count($result["ProductosModelo"]);
	if($cuantos == 1){
		$losproductos[0] = array(
			'idProductos'=>$result["ProductosModelo"]["idProductos"],
			'descripcion'=>$result["ProductosModelo"]["descripcion"],
			'titulo'=>$result["ProductosModelo"]["titulo"],
			'categoria'=>$result["ProductosModelo"]["categoria"],
			'vendedor'=>$result["ProductosModelo"]["vendedor"],
			'comprador'=>$result["ProductosModelo"]["comprador"],
			'estado'=>$result["ProductosModelo"]["estado"],
			'foto'=>$result["ProductosModelo"]["foto"],
			'precio'=>$result["ProductosModelo"]["precio"]);
	}else{

		for ($i=0; $i < $cuantos; $i++) { 
			$losproductos[$i] = array(
									  'idProductos'=>$result["ProductosModelo"][$i]["idProductos"],
									  'descripcion'=>$result["ProductosModelo"][$i]["descripcion"],
									  'titulo'=>$result["ProductosModelo"][$i]["titulo"],
									  'categoria'=>$result["ProductosModelo"][$i]["categoria"],
									  'vendedor'=>$result["ProductosModelo"][$i]["vendedor"],
									  'comprador'=>$result["ProductosModelo"][$i]["comprador"],
									  'estado'=>$result["ProductosModelo"][$i]["estado"],
									  'foto'=>$result["ProductosModelo"][$i]["foto"],
									  'precio'=>$result["ProductosModelo"][$i]["precio"]);
		}
	}
	return $losproductos;
}
/*Muestra un producto en detalle*/
function productosDeta($id){
	global $wsdl;
	$client=new SoapClient($wsdl, true);
	$parametro = array('id' => $id);
	$result=$client->call("productosConsultaDetalle", $parametro)["productosConsultaDetalleResult"];
	$losproductos = array();
		$losproductos = array(
							  'idProductos'=>$result["ProductosModelo"]["idProductos"],
							  'descripcion'=>$result["ProductosModelo"]["descripcion"],
							  'titulo'=>$result["ProductosModelo"]["titulo"],
							  'categoria'=>$result["ProductosModelo"]["categoria"],
							  'vendedor'=>$result["ProductosModelo"]["vendedor"],
							  'comprador'=>$result["ProductosModelo"]["comprador"],
							  'estado'=>$result["ProductosModelo"]["estado"],
							  'precio'=>$result["ProductosModelo"]["precio"],
							  'foto'=>$result["ProductosModelo"]["foto"]);
	return $losproductos;
}
/*Muestra todos los objetos perdidos que no han sido reclamados*/
function ObjetoPerdido($estado,$pag){
	global $wsdl;
	$client=new SoapClient($wsdl, true);
	$parametro = array('pag' => $pag, 'cantidad' => 12, 'estado' => $estado);
	$result=$client->call("consultaGeneralObjetoPerdido", $parametro)["consultaGeneralObjetoPerdidoResult"];

	$losproductos = array();
	$cuantos = count($result["ObjetoPerdidoModelo"]);
	if($cuantos == 1){
		$losproductos[0] = array(
			'idObjetoPerdido'=>$result["ObjetoPerdidoModelo"]["idObjetoPerdido"],
			'descripcion'=>$result["ObjetoPerdidoModelo"]["descripcion"],
			'publicador'=>$result["ObjetoPerdidoModelo"]["publicador"],
			'id_lugar'=>$result["ObjetoPerdidoModelo"]["id_lugar"],
			'titulo'=>$result["ObjetoPerdidoModelo"]["titulo"],
			'fecha'=>$result["ObjetoPerdidoModelo"]["fecha"],
			'estado'=>$result["ObjetoPerdidoModelo"]["estado"],
			'foto'=>$result["ObjetoPerdidoModelo"]["foto"]);
			//'lugarString'=>$result["ObjetoPerdidoModelo"]["lugarString"]);
	}else {
	for ($i=0; $i < $cuantos; $i++) { 
		$losproductos[$i] = array(
								  'idObjetoPerdido'=>$result["ObjetoPerdidoModelo"][$i]["idObjetoPerdido"],
								  'descripcion'=>$result["ObjetoPerdidoModelo"][$i]["descripcion"],
								  'publicador'=>$result["ObjetoPerdidoModelo"][$i]["publicador"],
								  'id_lugar'=>$result["ObjetoPerdidoModelo"][$i]["id_lugar"],
								  'titulo'=>$result["ObjetoPerdidoModelo"][$i]["titulo"],
								  'fecha'=>$result["ObjetoPerdidoModelo"][$i]["fecha"],
								  'estado'=>$result["ObjetoPerdidoModelo"][$i]["estado"],
								  'foto'=>$result["ObjetoPerdidoModelo"][$i]["foto"]);
								 //'lugarString'=>$result["ObjetoPerdidoModelo"][$i]["lugarString"]);
	}
	}
	return $losproductos;
}
/*Muestra en detalle un objeto perdido*/
function objetosDeta($id){
	global $wsdl;
	$client=new SoapClient($wsdl, true);
	$parametro = array('id' => $id);
	$result=$client->call("consultaDetalleObjetoPerdido", $parametro)["consultaDetalleObjetoPerdidoResult"];

		$losproductos = array(
							  'idObjetoPerdido'=>$result["ObjetoPerdidoModelo"]["idObjetoPerdido"],
							  'descripcion'=>$result["ObjetoPerdidoModelo"]["descripcion"],
							  'publicador'=>$result["ObjetoPerdidoModelo"]["publicador"],
							  'id_lugar'=>$result["ObjetoPerdidoModelo"]["id_lugar"],
							  'titulo'=>$result["ObjetoPerdidoModelo"]["titulo"],
							  'fecha'=>$result["ObjetoPerdidoModelo"]["fecha"],
							  'estado'=>$result["ObjetoPerdidoModelo"]["estado"],
							  'foto'=>$result["ObjetoPerdidoModelo"]["foto"],
							  'lugarString'=>$result["ObjetoPerdidoModelo"]["lugarString"]);
							  
	return $losproductos;
}
function categorias(){
	global $wsdl;
	$client=new SoapClient($wsdl, true);
	$result=$client->call("categoriaConsultaGerneral")["categoriaConsultaGerneralResult"];

	$losproductos = array();
	$cuantos = count($result["CategoriasModelo"]);
	if($cuantos == 1){
		$losproductos[0] = array(
			'idCategorias'=>$result["CategoriasModelo"]["idCategorias"],
			'nombre'=>$result["CategoriasModelo"]["nombre"]);
	}else{
		for ($i=0; $i < $cuantos; $i++) { 
			$losproductos[$i] = array(
								  'idCategorias'=>$result["CategoriasModelo"][$i]["idCategorias"],
								  'nombre'=>$result["CategoriasModelo"][$i]["nombre"]);
		}
	}
	return $losproductos;
}
function lugaresConsulta(){
	global $wsdl;
	$client=new SoapClient($wsdl, true);
	$result=$client->call("consultaLugares")["consultaLugaresResult"];

	$losproductos = array();
	$cuantos = count($result["LugarModelo"]);

	if($cuantos == 1){
		$losproductos[0] = array(
			'idLugar'=>$result["LugarModelo"]["idLugar"],
			'nombre'=>$result["LugarModelo"]["nombre"]);
	}else{
		for ($i=0; $i < $cuantos; $i++) { 
			$losproductos[$i] = array(
								  'idLugar'=>$result["LugarModelo"][$i]["idLugar"],
								  'nombre'=>$result["LugarModelo"][$i]["nombre"]);
		}
	}
	return $losproductos;
}
function historialMisVentas($idUsuario){
	global $wsdl;
	$client=new SoapClient($wsdl, true);
	$parametro = array('idUsuario' => $idUsuario);
	$result=$client->call("historialMisVentas", $parametro)["historialMisVentasResult"];

	$losproductos = array();
	$cuantos = count($result["ProductosModelo"]);

	if($cuantos == 1){
		$losproductos[0] = array(
			'titulo'=>$result["ProductosModelo"]["titulo"],
			'idProductos'=>$result["ProductosModelo"]["idProductos"],
			'precio'=>$result["ProductosModelo"]["precio"],
			'estado'=>$result["ProductosModelo"]["estado"]);
	} else {
		for ($i=0; $i < $cuantos; $i++) { 
			$losproductos[$i] = array(
								  'titulo'=>$result["ProductosModelo"][$i]["titulo"],
								  'idProductos'=>$result["ProductosModelo"][$i]["idProductos"],
								  'precio'=>$result["ProductosModelo"][$i]["precio"],
								  'estado'=>$result["ProductosModelo"][$i]["estado"]);
		}
	}
	return $losproductos;
}
function historialMisCompras($idUsuario,$tipo){
	global $wsdl;
	$client=new SoapClient($wsdl, true);
	$parametro = array('idUsuario' => $idUsuario, 'tipo'=> $tipo, 'pag' => 1, 'cantidad' => 10);
	$result=$client->call("historialMisCompras", $parametro)["historialMisComprasResult"];

	$losproductos = array();
	
	$cuantos = @count($result["ProductosModelo"]);

	if($cuantos == 1){
		$losproductos[0] = array(
							  'titulo'=>$result["ProductosModelo"]["titulo"],
							  'idProductos'=>$result["ProductosModelo"]["idProductos"],
							  'precio'=>$result["ProductosModelo"]["precio"],
							  'estado'=>$result["ProductosModelo"]["estado"]);
	} else{
		for ($i=0; $i < $cuantos; $i++) { 
			$losproductos[$i] = array(
								  'titulo'=>$result["ProductosModelo"][$i]["titulo"],
								  'idProductos'=>$result["ProductosModelo"][$i]["idProductos"],
								  'precio'=>$result["ProductosModelo"][$i]["precio"],
								  'estado'=>$result["ProductosModelo"][$i]["estado"]);
		}
	}
	return $losproductos;
}
function historialObjetosPerdidos($idUsuario){
	global $wsdl;
	$client=new SoapClient($wsdl, true);
	$parametro = array('idUsuario' => $idUsuario,'pag' => 1, 'cantidad' => 10);
	$result=$client->call("historialObjetosPerdidos", $parametro)["historialObjetosPerdidosResult"];

	$losproductos = array();
	$cuantos = count($result["ObjetoPerdidoModelo"]);

	if($cuantos == 1){
		$losproductos[0] = array(
			'titulo'=>$result["ObjetoPerdidoModelo"]["titulo"],
			'idObjetoPerdido'=>$result["ObjetoPerdidoModelo"]["idObjetoPerdido"],
			'estado'=>$result["ObjetoPerdidoModelo"]["estado"]);
	}
	else{
		for ($i=0; $i < $cuantos; $i++) { 
			$losproductos[$i] = array(
								  'titulo'=>$result["ObjetoPerdidoModelo"][$i]["titulo"],
								  'idObjetoPerdido'=>$result["ObjetoPerdidoModelo"][$i]["idObjetoPerdido"],
								  'estado'=>$result["ObjetoPerdidoModelo"][$i]["estado"]);
		}
	}
	return $losproductos;
}
function buscarProductosenCategoria($id,$pag){
	global $wsdl;
	$client=new SoapClient($wsdl, true);
	$parametro = array('categoria' => $id, 'pag' => $pag, 'cantidad' => 10);
	$result=$client->call("buscarProductosenCategoria", $parametro)["buscarProductosenCategoriaResult"];

	$losproductos = array();
	$cuantos = @count($result["ProductosModelo"]);
	if($cuantos == 1){
		$losproductos[0] = array(
			'idProductos'=>$result["ProductosModelo"]["idProductos"],
			'descripcion'=>$result["ProductosModelo"]["descripcion"],
			'titulo'=>$result["ProductosModelo"]["titulo"],
			'categoria'=>$result["ProductosModelo"]["categoria"],
			'vendedor'=>$result["ProductosModelo"]["vendedor"],
			'comprador'=>$result["ProductosModelo"]["comprador"],
			'estado'=>$result["ProductosModelo"]["estado"],
			'foto'=>$result["ProductosModelo"]["foto"],
			'precio'=>$result["ProductosModelo"]["precio"]);
	}else{

	for ($i=0; $i < $cuantos; $i++) { 
		$losproductos[$i] = array(
								  'idProductos'=>$result["ProductosModelo"][$i]["idProductos"],
								  'descripcion'=>$result["ProductosModelo"][$i]["descripcion"],
								  'titulo'=>$result["ProductosModelo"][$i]["titulo"],
								  'categoria'=>$result["ProductosModelo"][$i]["categoria"],
								  'vendedor'=>$result["ProductosModelo"][$i]["vendedor"],
								  'comprador'=>$result["ProductosModelo"][$i]["comprador"],
								  'estado'=>$result["ProductosModelo"][$i]["estado"],
								  'foto'=>$result["ProductosModelo"][$i]["foto"],
								  'precio'=>$result["ProductosModelo"][$i]["precio"]);
	}
	}
	return $losproductos;
}
function buscarenProductoEstudiante($id,$pag){
	global $wsdl;
	$client=new SoapClient($wsdl, true);
	$parametro = array('busqueda' => $id, 'pag' => $pag, 'cantidad' => 10);
	$result=$client->call("buscarenProductoEstudiante", $parametro)["buscarenProductoEstudianteResult"];

	$losproductos = array();
	$cuantos = count($result["ProductosModelo"]);
	if($cuantos == 1){
		$losproductos[0] = array(
			'idProductos'=>$result["ProductosModelo"]["idProductos"],
			'descripcion'=>$result["ProductosModelo"]["descripcion"],
			'titulo'=>$result["ProductosModelo"]["titulo"],
			'categoria'=>$result["ProductosModelo"]["categoria"],
			'vendedor'=>$result["ProductosModelo"]["vendedor"],
			'comprador'=>$result["ProductosModelo"]["comprador"],
			'estado'=>$result["ProductosModelo"]["estado"],
			'foto'=>$result["ProductosModelo"]["foto"],
			'precio'=>$result["ProductosModelo"]["precio"]);
	}else{

	for ($i=0; $i < $cuantos; $i++) { 
		$losproductos[$i] = array(
								  'idProductos'=>$result["ProductosModelo"][$i]["idProductos"],
								  'descripcion'=>$result["ProductosModelo"][$i]["descripcion"],
								  'titulo'=>$result["ProductosModelo"][$i]["titulo"],
								  'categoria'=>$result["ProductosModelo"][$i]["categoria"],
								  'vendedor'=>$result["ProductosModelo"][$i]["vendedor"],
								  'comprador'=>$result["ProductosModelo"][$i]["comprador"],
								  'estado'=>$result["ProductosModelo"][$i]["estado"],
								  'foto'=>$result["ProductosModelo"][$i]["foto"],
								  'precio'=>$result["ProductosModelo"][$i]["precio"]);
	}
	}
	return $losproductos;
}
function buscarenProductosComerciante($id,$pag){
	global $wsdl;
	$client=new SoapClient($wsdl, true);
	$parametro = array('busqueda' => $id, 'pag' => $pag, 'cantidad' => 10);
	$result=$client->call("buscarenProductosComerciante", $parametro)["buscarenProductosComercianteResult"];

	$losproductos = array();
	$cuantos = count($result["ProductosModelo"]);
	if($cuantos == 1){
		$losproductos[0] = array(
			'idProductos'=>$result["ProductosModelo"]["idProductos"],
			'descripcion'=>$result["ProductosModelo"]["descripcion"],
			'titulo'=>$result["ProductosModelo"]["titulo"],
			'categoria'=>$result["ProductosModelo"]["categoria"],
			'vendedor'=>$result["ProductosModelo"]["vendedor"],
			'comprador'=>$result["ProductosModelo"]["comprador"],
			'estado'=>$result["ProductosModelo"]["estado"],
			'foto'=>$result["ProductosModelo"]["foto"],
			'tipo'=>$result["ProductosModelo"]["tipo"],
			'precio'=>$result["ProductosModelo"]["precio"]);
	}else{

	for ($i=0; $i < $cuantos; $i++) { 
		$losproductos[$i] = array(
								  'idProductos'=>$result["ProductosModelo"][$i]["idProductos"],
								  'descripcion'=>$result["ProductosModelo"][$i]["descripcion"],
								  'titulo'=>$result["ProductosModelo"][$i]["titulo"],
								  'categoria'=>$result["ProductosModelo"][$i]["categoria"],
								  'vendedor'=>$result["ProductosModelo"][$i]["vendedor"],
								  'comprador'=>$result["ProductosModelo"][$i]["comprador"],
								  'estado'=>$result["ProductosModelo"][$i]["estado"],
								  'foto'=>$result["ProductosModelo"][$i]["foto"],
								  'tipo'=>$result["ProductosModelo"][$i]["tipo"],
								  'precio'=>$result["ProductosModelo"][$i]["precio"]);
	}
	}
	return $losproductos;
}
function buscarObjetoPerdido($busqueda, $pag){
	global $wsdl;
	$client=new SoapClient($wsdl, true);
	$parametro = array('busqueda' => $busqueda, 'pag' => $pag, 'cantidad' => 10);
	$result=$client->call("buscarObjetoPerdido", $parametro)["buscarObjetoPerdidoResult"];

	$losproductos = array();
	$cuantos = count($result["ObjetoPerdidoModelo"]);
	if($cuantos == 1){
		$losproductos[0] = array(
			'idObjetoPerdido'=>$result["ObjetoPerdidoModelo"]["idObjetoPerdido"],
			'descripcion'=>$result["ObjetoPerdidoModelo"]["descripcion"],
			'publicador'=>$result["ObjetoPerdidoModelo"]["publicador"],
			'id_lugar'=>$result["ObjetoPerdidoModelo"]["id_lugar"],
			'titulo'=>$result["ObjetoPerdidoModelo"]["titulo"],
			'fecha'=>$result["ObjetoPerdidoModelo"]["fecha"],
			'estado'=>$result["ObjetoPerdidoModelo"]["estado"],
			'foto'=>$result["ObjetoPerdidoModelo"]["foto"]);
			//'lugarString'=>$result["ObjetoPerdidoModelo"]["lugarString"]);
	}else {
	for ($i=0; $i < $cuantos; $i++) { 
		$losproductos[$i] = array(
								  'idObjetoPerdido'=>$result["ObjetoPerdidoModelo"][$i]["idObjetoPerdido"],
								  'descripcion'=>$result["ObjetoPerdidoModelo"][$i]["descripcion"],
								  'publicador'=>$result["ObjetoPerdidoModelo"][$i]["publicador"],
								  'id_lugar'=>$result["ObjetoPerdidoModelo"][$i]["id_lugar"],
								  'titulo'=>$result["ObjetoPerdidoModelo"][$i]["titulo"],
								  'fecha'=>$result["ObjetoPerdidoModelo"][$i]["fecha"],
								  'estado'=>$result["ObjetoPerdidoModelo"][$i]["estado"],
								  'foto'=>$result["ObjetoPerdidoModelo"][$i]["foto"]);
								 //'lugarString'=>$result["ObjetoPerdidoModelo"][$i]["lugarString"]);
	}
	}
	return $losproductos;
}
function consultaGeneralVendedor($pag){
	global $wsdl;
	$client=new SoapClient($wsdl, true);
	$parametro = array('pag' => $pag, 'cantidad' => 10);
	$result=$client->call("consultaGeneralVendedor", $parametro)["consultaGeneralVendedorResult"];
	$losproductos = array();
	$cuantos = count($result["VendedorModelo"]);
	if($cuantos == 1){
		$losproductos[0] = array(
			'idVendedor'=>$result["VendedorModelo"]["idVendedor"],
			'nombre'=>$result["VendedorModelo"]["nombre"],
			'foto'=>$result["VendedorModelo"]["foto"],
			'telefono'=>$result["VendedorModelo"]["telefono"],
			'ubicacion'=>$result["VendedorModelo"]["ubicacion"],
			'usuario'=>$result["VendedorModelo"]["usuario"],
			'estado'=>$result["VendedorModelo"]["estado"]);
	}else {
	for ($i=0; $i < $cuantos; $i++) { 
		$losproductos[$i] = array(
								  'idVendedor'=>$result["VendedorModelo"][$i]["idVendedor"],
								  'nombre'=>$result["VendedorModelo"][$i]["nombre"],
								  'foto'=>$result["VendedorModelo"][$i]["foto"],
								  'telefono'=>$result["VendedorModelo"][$i]["telefono"],
								  'ubicacion'=>$result["VendedorModelo"][$i]["ubicacion"],
								  'usuario'=>$result["VendedorModelo"][$i]["usuario"],
								  'estado'=>$result["VendedorModelo"][$i]["estado"]);
	}
	}
	return $losproductos;
}
function consultaDetalleVendedor($id){
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";
	$client=new SoapClient($wsdl, true);
	$parametro = array('idVendedor' => $id);
	$result=$client->call("consultaDetalleVendedor", $parametro)["consultaDetalleVendedorResult"];

		$losproductos = array(
							  'idVendedor'=>$result["VendedorModelo"]["idVendedor"],
							  'nombre'=>$result["VendedorModelo"]["nombre"],
							  'telefono'=>$result["VendedorModelo"]["telefono"],
							  'ubicacion'=>$result["VendedorModelo"]["ubicacion"],
							  //'foto'=>$result["VendedorModelo"]["foto"],
							  'usuario'=>$result["VendedorModelo"]["usuario"],
							  'estado'=>$result["VendedorModelo"]["estado"]);
		//falta estado 
		var_dump($losproductos);
	return $losproductos;
}