<?php 
include 'consultasMensajes.php';
 @session_start();
$uu = @$_SESSION['username'];
settype($uu,'integer');

	$x = @conversaGeneral($uu);	


	$mijson = array();

	foreach ($x as $cos ) {
		$convo = array(
			"id" =>  $cos["id"],
			"fecha"=> $cos["fecha"],
			"usuarioU"=> $cos["usuarioU"],
			"usuarioD"=> $cos["usuarioD"],
			"mensajes" => array()
		);
		$men = mensajes($cos["id"]);
		foreach ($men as $m) {
			$msg = array(
				"text" => utf8_encode($m["text"]),
				"usuario" => $m["usuario"]
			); 
			$convo["mensajes"][] = $msg;

		}


		$mijson[] = $convo;
	}
	echo json_encode($mijson);
?>