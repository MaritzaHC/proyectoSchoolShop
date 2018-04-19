<?php
require 'conexion.php';

global $mysqli;
$laid = $_GET["id"];
settype($laid,'integer');
echo $laid;

$razon = $_GET["razon"];
settype($razon,'integer');
echo $razon;

$sql = "UPDATE productos SET estado = 4 where idProductos = ".$laid.";";
if(!$resultado = $mysqli->query($sql)){
   echo "Error al consultar0.";
   exit;
}
$sql = "INSERT INTO reportes(titulo,usuario) values (".$razon.",14300191);";
if(!$resultado = $mysqli->query($sql)){
   echo "Error al consultar0.";
   exit;
}
header("Location: ../inicio.php?=compras");
