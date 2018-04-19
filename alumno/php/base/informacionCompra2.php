<?php 
	echo $_GET['este'];
	require 'conexion.php';
	global $mysqli;
	$sql = "update productos set estado = 2, comprador = 14300191 where idProductos =".$_GET['este'].";";
	if(!$resultado = $mysqli->query($sql)){
	   echo "Error al consultar0.";
	   exit;
	}
	header("Location: ../compras.php");
