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