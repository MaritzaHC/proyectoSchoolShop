<?php
require_once '../../../nusoap/lib/nusoap.php';
include 'verificacionLogin.php';
$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";
$client=new soapclient($wsdl,true);
@session_start();
$uu = @$_SESSION['username'];
settype($uu,'integer');
$id = $_POST['id'];
settype($id, 'integer');

if ($_POST['modo']==1){
$parametro = array('idConversacion'=>$id);
$result=$client->call("eliminarConversacion", $parametro);
}
else {
	$parametro = array('conversacion'=>$id, 'texto'=>$_POST['text'], 'usuarioE'=>$uu);
	$result=$client->call("insertarMensaje", $parametro);
}