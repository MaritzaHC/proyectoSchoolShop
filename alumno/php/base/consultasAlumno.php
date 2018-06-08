 <?php 
@include_once '../../nusoap/lib/nusoap.php';

function alumnosDeta($id)
{
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";
	$client=new SoapClient($wsdl,true);
	$parametro = array('id' => $id);
	$result=$client->call("selectAlumnosid", $parametro)["selectAlumnosidResult"];

		$losproductos = array(
							  'id'=>$result["AlumnoModelo"]["id"],
							  'nombre'=>$result["AlumnoModelo"]["nombre"],
							  'apellidoP'=>$result["AlumnoModelo"]["apellidoP"],
							  'apelldioM'=>$result["AlumnoModelo"]["apelldioM"],
							  //'foto'=>$result["AlumnoModelo"]["foto"],
							  'usuario'=>$result["AlumnoModelo"]["usuario"],
							  'usuario'=>$result["AlumnoModelo"]["usuario"],	
							  'correo'=>$result["AlumnoModelo"]["correo"]);
		//falta estado 
	return $losproductos;
}
function notificaciones($id){
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";
	$client=new SoapClient($wsdl,true);
	$parametro = array('usuario' => $id,'pag' => 1,'cantidad' => 1);
	$result=$client->call("consultaGeneralNotificacion", $parametro)["consultaGeneralNotificacionResult"];

	$losproductos = array();
	$cuantos = @count($result["NotificacionesModelo"]);
	if($cuantos == 1){
		$losproductos[0] = array(
		'idNotificaciones'=>$result["NotificacionesModelo"]["idNotificaciones"],
		'texto'=>$result["NotificacionesModelo"]["texto"],
		'titulo'=>$result["NotificacionesModelo"]["titulo"],
		'usuario'=>$result["NotificacionesModelo"]["usuario"]);
	}else{
		for ($i=0; $i < $cuantos; $i++) { 
			$losproductos[$i] = array(
								  'idNotificaciones'=>$result["NotificacionesModelo"][$i]["idNotificaciones"],
								  'texto'=>$result["NotificacionesModelo"][$i]["texto"],
								  'titulo'=>$result["NotificacionesModelo"][$i]["titulo"],
								  'usuario'=>$result["NotificacionesModelo"][$i]["usuario"]);
		}
	}
	return $losproductos;
}
