<?php
require 'conexion.php';

if($_POST['tipo'] == 1)
{
    $sql="INSERT INTO productos (descripcion, tiempo, precio, titulo,tipo) VALUES 
('".$_POST['descripcion']."',1,".$_POST['precio'].",'".$_POST['titulo']."',1)";
  		$mysqli->query($sql);
}  
else{
$sql="INSERT INTO objetoperdido (descripcion, titulo) VALUES 
('".$_POST['descripcion']."','".$_POST['titulo'].")";
  		$mysqli->query($sql);
}

?>