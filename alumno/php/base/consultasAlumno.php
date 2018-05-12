<?php 
require '../../nusoap/lib/nusoap.php';
function alumnosDeta($id)
{
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";
	$client=new SoapClient($wsdl);
	$parametro = array('id' => $id);
	$result=$client->selectAlumnosid($parametro)->selectAlumnosidResult;

		$losproductos = array(
							  'id'=>$result->AlumnoModelo->id,
							  'nombre'=>$result->AlumnoModelo->nombre,
							  'apellidoP'=>$result->AlumnoModelo->apellidoP,
							  'apelldioM'=>$result->AlumnoModelo->apelldioM,
							  //'foto'=>$result->AlumnoModelo->foto,
							  'usuario'=>$result->AlumnoModelo->usuario,
							  'correo'=>$result->AlumnoModelo->correo);
		//falta estado 
	return $losproductos;
}
function notificaciones($id){
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";
	$client=new SoapClient($wsdl);
	$parametro = array('usuario' => $id);
	$result=$client->consultaGeneralNotificacion($parametro)->consultaGeneralNotificacionResult;

	$losproductos = array();
	$cuantos = count($result->NotificacionesModelo, COUNT_RECURSIVE);

	for ($i=0; $i < $cuantos; $i++) { 
		$losproductos[$i] = array(
							  'idNotificaciones'=>$result->NotificacionesModelo[$i]->idNotificaciones,
							  'texto'=>$result->NotificacionesModelo[$i]->texto,
							  'titulo'=>$result->NotificacionesModelo[$i]->titulo,
							  'usuario'=>$result->NotificacionesModelo[$i]->usuario);
	}
	return $losproductos;
}