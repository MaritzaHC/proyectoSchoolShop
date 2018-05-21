<?php
  $mysql_host = 'den1.mysql6.gear.host';
  $mysql_user = 'basess';
  $mysql_pass = 'Algodecente1.';
  $mysql_bd   = 'basess';

  $mysqli = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_bd);
  $mysqli->set_charset("UTF8");

  if($mysqli->connect_errno){
    echo "Error en la conexión.";
    exit;
  }

function publicacionesxalum($id,$ini,$fin){
	global $mysqli;
	$sql = "select COUNT(*) as cantidad from productos where estado=3 and tipo=1 and vendedor=".$id." and (fecha BETWEEN ".$ini." AND ".$fin.");";
	if(!$resultado = $mysqli->query($sql)){
	   echo "Error al consultar0.";
	   exit;
	}
	$fila = mysql_fetch_assoc($resultado);
	sqlClose();
	return $fila['cantidad']
}


  function sqlClose(){
    global $mysqli;
    $mysqli->close();
  }