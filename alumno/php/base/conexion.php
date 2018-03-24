
<?php 

 /* $mysql_host = 'localhost';
  $mysql_user = 'root';
  $mysql_pass = '';*/

  $mysql_host = 'den1.mysql6.gear.host';
  $mysql_user = 'baseSS';
  $mysql_pass = 'Algodecente1.';
  $mysql_bd   = 'baseSS';

  $mysqli = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_bd);
  $mysqli->set_charset("UTF8");

  if($mysqli->connect_errno){
    echo "Error en la conexión.";
    exit;
  }

  function sqlClose(){
  global $mysqli;
  $mysqli->close();
}

?>
