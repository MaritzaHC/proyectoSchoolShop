<?php
  $mysql_host = 'den1.mysql6.gear.host';
  $mysql_user = 'basess';
  $mysql_pass = 'Algodecente1.';
  $mysql_bd   = 'basess';

  $mysqli = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_bd);
  $mysqli->set_charset("UTF8");

  if ($_POST['contrasenaconu']==$_POST['contrasenacon']) {
  	 $sql = "update login set password='".$_POST['contrasenacon']."' where usuario=123456 and password='".$_POST['contrasena']."';";
    if(!$resultado = $mysqli->query($sql)){
       echo "Error al consultar";
       exit;
    }
  }	
header('Location: ../cuenta.php');
  
