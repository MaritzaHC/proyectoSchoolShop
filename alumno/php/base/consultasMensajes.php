 <?php 
@include_once '../../../nusoap/lib/nusoap.php';

function conversaGeneral($id){
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";
	$client=new SoapClient($wsdl,true);
	$parametro = array('usuario' => $id);
	$result=$client->call("conversacionesdelUsuario", $parametro)["conversacionesdelUsuarioResult"];

	$cuantos = @count($result["ConversacionModelo"]["id"]);
	$losproductos = array();
	if($cuantos == 1){
		$losproductos[0] = array(
		'id'=>$result["ConversacionModelo"]["id"],
		'fecha'=>$result["ConversacionModelo"]["fecha"],
		'usuarioU'=>$result["ConversacionModelo"]["usuarioU"],
		'usuarioD'=>$result["ConversacionModelo"]["usuarioD"]);
	}else{	
		$cuantos = @count($result["ConversacionModelo"]);
		for ($i=0; $i < $cuantos; $i++) { 
			$losproductos[$i] = array(
								  'id'=>$result["ConversacionModelo"][$i]["id"],
								  'fecha'=>$result["ConversacionModelo"][$i]["fecha"],
								  'usuarioU'=>$result["ConversacionModelo"][$i]["usuarioU"],
								  'usuarioD'=>$result["ConversacionModelo"][$i]["usuarioD"]);
		}
	}
	return $losproductos;
}
function mensajes($id){
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";
	$client=new SoapClient($wsdl,true);
	$parametro = array('conversacion' => $id);
	$result=$client->call("consultaMensajes", $parametro)["consultaMensajesResult"];

	$cuantos = @count($result["Mensaje"]);
	if($cuantos == 1){
		$losproductos[0] = array(
		'id'=>$result["Mensaje"]["id"],
		'conversacion'=>$result["Mensaje"]["conversacion"],
		'text'=>$result["Mensaje"]["text"],
		'usuario'=>$result["Mensaje"]["usuario"]);
	}else{
		for ($i=0; $i < $cuantos; $i++) { 
			$losproductos[$i] = array(
								  'id'=>$result["Mensaje"][$i]["id"],
								  'conversacion'=>$result["Mensaje"][$i]["conversacion"],
								  'text'=>$result["Mensaje"][$i]["text"],
								  'usuario'=>$result["Mensaje"][$i]["usuario"]);
		}
	}
	return $losproductos;
}
?>