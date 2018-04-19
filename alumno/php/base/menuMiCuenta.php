<?php
require 'conexion.php';
global $mysqli;
$sql = "Select count(*) as resul from productos where estado=2 && vendedor=14300191;";
if(!$resultado = $mysqli->query($sql)){
   echo "Error al consultar0.";
   exit;
}
$ventas = $resultado->fetch_assoc();
$sql = "Select count(*) as resul from productos where estado=2 && comprador=14300191;";
if(!$resultado = $mysqli->query($sql)){
   echo "Error al consultar0.";
   exit;
}
$compras = $resultado->fetch_assoc();
$sql = "Select count(*) as resul from objetoperdido where estado=2 && publicador=14300191;";
if(!$resultado = $mysqli->query($sql)){
   echo "Error al consultar0.";
   exit;
}
$objetos = $resultado->fetch_assoc();

$com = $compras['resul'];
$ve = $ventas['resul'];
$obj = $objetos['resul'];

echo "<div class=\"arriba\">
			<div class=\"mensajes\"  onclick=\"window.location='mensajes.php\">
				<div class=\"titulo\"><p>Mensajes</p></div>
				<div class=\"cuenta\"><p>(0)</p></div>
			</div>		
			<div class=\"compras\" onclick=\"window.location='compras.php'\">
				<div class=\"titulo\"><p>Compras</p></div>
				<div class=\"cuenta\"><p>$com</p></div>
			</div>
		</div>
		<div class=\"abajo\">
			<div class=\"ventas\" onclick=\"window.location='ventas.php'\">
				<div class=\"titulo\"><p>Ventas</p> </div>
				<div class=\"cuenta\"><p>$ve</p> </div>
			</div>
			<div class=\"pedidos\" onclick=\"window.location='pedidos.php'\">
				<div class=\"titulo\"><p>Pedidos</p> </div>
				<div class=\"cuenta\"><p>$obj</p> </div>
			</div>	
		</div>	";
?>