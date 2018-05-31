<?php 
require '../../nusoap/lib/nusoap.php';
$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";
function consultaGeneralRestricciones()
{
	global $wsdl;
	$client=new SoapClient($wsdl, true);
	$result=$client->call("consultaGeneralRestricciones")["consultaGeneralRestriccionesResult"];
	
	$cuantos = count($result["RestriccionesModelo"]);
	$losproductos = array();

	for ($i=0; $i < $cuantos; $i++) { 
		$losproductos[$i] = array(
							  'idRestricciones'=>$result["RestriccionesModelo"][$i]["idRestricciones"],
							  'nombre'=>$result["RestriccionesModelo"][$i]["nombre"],
							  'estado'=>$result["RestriccionesModelo"][$i]["estado"]);
	}
	return $losproductos;
}
function notificaciones($id){
	var_dump($id);
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";
	$client=new SoapClient($wsdl, true);
	$parametro = array('usuario' => $id);
	$result=$client->call("consultaGeneralNotificacion", $parametro)["consultaGeneralNotificacionResult"];

	$losproductos = array();
	$cuantos = count($result["NotificacionesModelo"]);

	if ($cuantos==1) {
		$losproductos[0] = array(
							  'idNotificaciones'=>$result["NotificacionesModelo"][$i]["idNotificaciones"],
							  'texto'=>$result["NotificacionesModelo"][$i]["texto"],
							  'titulo'=>$result["NotificacionesModelo"][$i]["titulo"],
							  'importancia'=>$result["NotificacionesModelo"][$i]["importancia"],
							  'usuario'=>$result["NotificacionesModelo"][$i]["usuario"]);
	}else{

	for ($i=0; $i < $cuantos; $i++) { 
		$losproductos[$i] = array(
							  'idNotificaciones'=>$result["NotificacionesModelo"][$i]["idNotificaciones"],
							  'texto'=>$result["NotificacionesModelo"][$i]["texto"],
							  'titulo'=>$result["NotificacionesModelo"][$i]["titulo"],
							  'importancia'=>$result["NotificacionesModelo"][$i]["importancia"],
							  'usuario'=>$result["NotificacionesModelo"][$i]["usuario"]);
	}
	}
	return $losproductos;
}
function categorias()
{
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
function lugaresConsulta()
{
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