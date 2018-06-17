<?php 
require '../../nusoap/lib/nusoap.php';
$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?wsdl";
function lugares()
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
	$u = $losproductos;
	foreach ($u as $are) {
		$idLugar = $are['idLugar'];
		$nombre = $are['nombre'];
		echo "<option value=$idLugar>$nombre</option>";
	}
}
function notificaciones($id){
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";
	$client=new SoapClient($wsdl,true);
	$parametro = array('usuario' => $id);
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
@$_SESSION['username'];
settype($uu,'integer');
$x = array();
$x = @notificaciones($uu);	

function titulos()
{
	global $x;
	$i=1;
	$con=count($x);
	if ($x[0]['titulo']==null) {
		echo "No hay notificaciones";
		exit;
	}	
	foreach ($x as $are) {
		$titulo = $are['titulo'];
	    $a=$i."n";
		echo "<div class=\"notificacion\" id=$a onclick=\"mostrar($i,$con)\"><p>$titulo</p></div>";
		$i++;
	}
}

function contenido()
{
	global $x;
	$i=1;
	foreach ($x as $are) {
	    $titulo = $are['titulo'];
	    $texto = $are['texto'];
	    $idNotificaciones = $are['idNotificaciones'];
	    $a=$i."c";
		echo "<div class=\"contenidoNoti\" id=$a>
			<div class=\"titulo\"><p>$titulo</p></div>
			<div class=\"contenido\"><p>$texto</p></div>
			<div class=\"boton\" onclick=\"popup(1,'seguro',0)\">Eliminar</div>
			<input type=\"number\" name=\"idNotificaciones\" value=$idNotificaciones style=\"display: none;\">
		</div>";
		$i++;
	}
}
function almacenistaConsultaDetalle($id)
{
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";
	$client=new SoapClient($wsdl,true);
	$parametro = array('id' => $id);
	$result=$client->call("almacenistaConsultaDetalle", $parametro)["almacenistaConsultaDetalleResult"];
	var_dump($id);
		$losproductos = array(
							  'idAlmacenista'=>$result["AlmacenistaModelo"]["idAlmacenista"],
							  'nombre'=>$result["AlmacenistaModelo"]["nombre"],
							  'foto'=>$result["AlmacenistaModelo"]["foto"],
							  'ubicacion'=>$result["AlmacenistaModelo"]["ubicacion"]);
	return $losproductos;
}