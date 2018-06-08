<?php
require '../../nusoap/lib/nusoap.php';
$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";
function alumnosGeneral($pag)
{
	global $wsdl;
	$client=new SoapClient($wsdl, true);
	$parametro = array('pag' => $pag, 'cantidad' => 3);
	$result=$client->call("selectAlumnosGeneral", $parametro)["selectAlumnosGeneralResult"];
	$cuantos = count($result["AlumnoModelo"]);
	$losproductos = array();

	if ($cuantos==1) {
		$losproductos[0] = array(
							  'id'=>$result["AlumnoModelo"]["id"],
							  'nombre'=>$result["AlumnoModelo"]["nombre"],
							  'apellidoP'=>$result["AlumnoModelo"]["apellidoP"],
							  'apelldioM'=>$result["AlumnoModelo"]["apelldioM"],
							  'Foto'=>$result["AlumnoModelo"]["Foto"],
							  'usuario'=>$result["AlumnoModelo"]["usuario"],
							  'estado'=>$result["AlumnoModelo"]["estado"],
							  'correo'=>$result["AlumnoModelo"]["correo"]);
	}else{

	for ($i=0; $i < $cuantos; $i++) { 
		$losproductos[$i] = array(
							  'id'=>$result["AlumnoModelo"][$i]["id"],
							  'nombre'=>$result["AlumnoModelo"][$i]["nombre"],
							  'apellidoP'=>$result["AlumnoModelo"][$i]["apellidoP"],
							  'apelldioM'=>$result["AlumnoModelo"][$i]["apelldioM"],
							  'Foto'=>$result["AlumnoModelo"][$i]["Foto"],
							  'usuario'=>$result["AlumnoModelo"][$i]["usuario"],
							  'estado'=>$result["AlumnoModelo"][$i]["estado"],
							  'correo'=>$result["AlumnoModelo"][$i]["correo"]);
	}
	}
	return $losproductos;
}
function alumnosDeta($id)
{
	global $wsdl;
	$client=new SoapClient($wsdl, true);
	$parametro = array('id' => $id);
	$result=$client->call("selectAlumnosid", $parametro)["selectAlumnosidResult"];

		$losproductos = array(
							  'id'=>$result["AlumnoModelo"]["id"],
							  'nombre'=>$result["AlumnoModelo"]["nombre"],
							  'apellidoP'=>$result["AlumnoModelo"]["apellidoP"],
							  'apelldioM'=>$result["AlumnoModelo"]["apelldioM"],
							  'Foto'=>$result["AlumnoModelo"]["Foto"],
							  'usuario'=>$result["AlumnoModelo"]["usuario"],
							  'estado'=>$result["AlumnoModelo"]["estado"],
							  'correo'=>$result["AlumnoModelo"]["correo"]);
		//falta estado 
	return $losproductos;
}
function almacenistaDeta($id)
{
	global $wsdl;
	$client=new SoapClient($wsdl, true);
	$parametro = array('id' => $id);
	$result=$client->call("almacenistaConsultaDetalle", $parametro)["almacenistaConsultaDetalleResult"];

		$losproductos = array(
							  'idAlmacenista'=>$result["AlmacenistaModelo"]["idAlmacenista"],
							  'nombre'=>$result["AlmacenistaModelo"]["nombre"],
							  'foto'=>$result["AlmacenistaModelo"]["Foto"],
							  'ubicacion'=>$result["AlmacenistaModelo"]["ubicacion"]);
	return $losproductos;
}
function almacenistaGeneral($pag)
{
	global $wsdl;
	$client=new SoapClient($wsdl, true);
	$parametro = array('pag' => $pag, 'cantidad' => 2);
	$result=$client->call("almacenistaConsultaGeneral",$parametro)["almacenistaConsultaGeneralResult"];
	$cuantos = count($result["AlmacenistaModelo"]);
	$losproductos = array();

	if ($cuantos==1) {
		$losproductos[0] = array(
							  'idAlmacenista'=>$result["AlmacenistaModelo"]["idAlmacenista"],
							  'nombre'=>$result["AlmacenistaModelo"]["nombre"],
							  'foto'=>$result["AlmacenistaModelo"]["foto"],
							  'ubicacion'=>$result["AlmacenistaModelo"]["ubicacion"]);
	}else{
		for ($i=0; $i < $cuantos; $i++) { 
			$losproductos[$i] = array(
								  'idAlmacenista'=>$result["AlmacenistaModelo"][$i]["idAlmacenista"],
								  'nombre'=>$result["AlmacenistaModelo"][$i]["nombre"],
								  'foto'=>$result["AlmacenistaModelo"][$i]["foto"],
								  'ubicacion'=>$result["AlmacenistaModelo"][$i]["ubicacion"]);
		}
	}
	return $losproductos;
}
function consultaGeneralVendedor($pag)
{
	global $wsdl;
	$client=new SoapClient($wsdl, true);
	$parametro = array('pag' => $pag, 'cantidad' => 3);
	$result=$client->call("consultaGeneralVendedor",$parametro)["consultaGeneralVendedorResult"];

	$losproductos = array();
	$cuantos = count($result["VendedorModelo"]);
	if($cuantos == 1){
		$losproductos[0] = array(
			'idVendedor'=>$result["VendedorModelo"]["idVendedor"],
			'nombre'=>$result["VendedorModelo"]["nombre"],
			'foto'=>$result["VendedorModelo"]["foto"],
			'telefono'=>$result["VendedorModelo"]["telefono"],
			'ubicacion'=>$result["VendedorModelo"]["ubicacion"],
			'estado'=>$result["VendedorModelo"]["estado"]);
	}else {
	for ($i=0; $i < $cuantos; $i++) { 
		$losproductos[$i] = array(
								  'idVendedor'=>$result["VendedorModelo"][$i]["idVendedor"],
								  'nombre'=>$result["VendedorModelo"][$i]["nombre"],
								  'foto'=>$result["VendedorModelo"][$i]["foto"],
								  'telefono'=>$result["VendedorModelo"][$i]["telefono"],
								  'ubicacion'=>$result["VendedorModelo"][$i]["ubicacion"],
								  'estado'=>$result["VendedorModelo"][$i]["estado"]);
	}
	}
	return $losproductos;
}
function consultaDetalleVendedor($id)
{
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
							  'estado'=>$result["VendedorModelo"]["estado"]);
		//falta estado 
	return $losproductos;
}
function buscarVendedor($busqueda,$pag)
{
	global $wsdl;
	$client=new SoapClient($wsdl, true);
	$parametro = array('busqueda' => $busqueda, 'pag' => $pag, 'cantidad' => 3);
	$result=$client->call("buscarVendedor",$parametro)["buscarVendedorResult"];

	$losproductos = array();
	$cuantos = count($result);
	if($cuantos == 1){
		$losproductos[0] = array(
			'idVendedor'=>$result["VendedorModelo"]["idVendedor"],
			'nombre'=>$result["VendedorModelo"]["nombre"],
			'foto'=>$result["VendedorModelo"]["foto"],
			'telefono'=>$result["VendedorModelo"]["telefono"],
			'ubicacion'=>$result["VendedorModelo"]["ubicacion"],
			'estado'=>$result["VendedorModelo"]["estado"]);
	}else {
	for ($i=0; $i < $cuantos; $i++) { 
		$losproductos[$i] = array(
								  'idVendedor'=>$result["VendedorModelo"][$i]["idVendedor"],
								  'nombre'=>$result["VendedorModelo"][$i]["nombre"],
								  'foto'=>$result["VendedorModelo"][$i]["foto"],
								  'telefono'=>$result["VendedorModelo"][$i]["telefono"],
								  'ubicacion'=>$result["VendedorModelo"][$i]["ubicacion"],
								  'estado'=>$result["VendedorModelo"][$i]["estado"]);
	}
	}
	return $losproductos;
}
function buscarAlmacenistaNombre($busqueda,$pag)
{
	global $wsdl;
	$client=new SoapClient($wsdl, true);
	$parametro = array('busqueda' => $busqueda, 'pag' => $pag, 'cantidad' => 3);
	$result=$client->call("buscarAlmacenistaNombre",$parametro)["buscarAlmacenistaNombreResult"];

	$losproductos = array();
	$cuantos = count($result);
	if($cuantos == 1){
		$losproductos[0] = array(
			'idAlmacenista'=>$result["AlmacenistaModelo"]["idAlmacenista"],
			'nombre'=>$result["AlmacenistaModelo"]["nombre"],
			'foto'=>$result["AlmacenistaModelo"]["foto"],
			'ubicacion'=>$result["AlmacenistaModelo"]["ubicacion"]);
	}else {
	for ($i=0; $i < $cuantos; $i++) { 
		$losproductos[$i] = array(
								  'idAlmacenista'=>$result["AlmacenistaModelo"][$i]["idAlmacenista"],
								  'nombre'=>$result["AlmacenistaModelo"][$i]["nombre"],
								  'foto'=>$result["AlmacenistaModelo"][$i]["foto"],
								  'ubicacion'=>$result["AlmacenistaModelo"][$i]["ubicacion"]);
	}
	}
	return $losproductos;
}
function buscarBloqueado($pag)
{
	global $wsdl;
	$client=new SoapClient($wsdl, true);
	$parametro = array('pag' => $pag, 'cantidad' => 3);
	$result=$client->call("selectAlumnosGeneral", $parametro)["selectAlumnosGeneralResult"];
	$cuantos = count($result["AlumnoModelo"]);
	$losproductos = array();

	if ($cuantos==1&&$result["AlumnoModelo"]["estado"]==3) {
		$losproductos[0] = array(
							  'id'=>$result["AlumnoModelo"]["id"],
							  'nombre'=>$result["AlumnoModelo"]["nombre"],
							  'apellidoP'=>$result["AlumnoModelo"]["apellidoP"],
							  'apelldioM'=>$result["AlumnoModelo"]["apelldioM"],
							  'Foto'=>$result["AlumnoModelo"]["Foto"],
							  'usuario'=>$result["AlumnoModelo"]["usuario"],
							  'estado'=>$result["AlumnoModelo"]["estado"],
							  'correo'=>$result["AlumnoModelo"]["correo"]);
	}else{

	for ($i=0; $i < $cuantos; $i++) { 
		if ($result["AlumnoModelo"][$i]["estado"]==3) {
		$losproductos[$i] = array(
							  'id'=>$result["AlumnoModelo"][$i]["id"],
							  'nombre'=>$result["AlumnoModelo"][$i]["nombre"],
							  'apellidoP'=>$result["AlumnoModelo"][$i]["apellidoP"],
							  'apelldioM'=>$result["AlumnoModelo"][$i]["apelldioM"],
							  'Foto'=>$result["AlumnoModelo"][$i]["Foto"],
							  'usuario'=>$result["AlumnoModelo"][$i]["usuario"],
							  'estado'=>$result["AlumnoModelo"][$i]["estado"],
							  'correo'=>$result["AlumnoModelo"][$i]["correo"]);
		}
	}
	}
	return $losproductos;
}