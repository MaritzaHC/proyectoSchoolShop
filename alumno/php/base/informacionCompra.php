<?php
require 'conexion.php';
/*ws
require_once '../../nusoap/lib/nusoap.php';
$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";
$client=new soapclient($wsdl);

$result=$client->productosConsultaDetalle(3);
$a = json_encode($result->productosConsultaDetalleResult,true);
$x = json_decode($a, true);

var_dump($result);*/
global $mysqli;
$laid = $_GET["id"];
settype($laid,'integer');
$sql = "Select * from productos where idProductos = ".$laid.";";//en reconsideracion, agregar tipo
if(!$resultado = $mysqli->query($sql)){
   echo "Error al consultar0.";
   exit;
}
$resul = $resultado->fetch_assoc();
	    $titulo = $resul['titulo'];
	    $precio = $resul['precio'];
	    $id = $resul['idProductos'];
	    $descripcion = $resul['descripcion'];

echo "<div class=\"imagen\"><img src=\"b.jpg\"></div>
	<div class=\"datos\">
		<div class=\"titulo\"><p>$titulo</p></div>
		<div class=\"descripcion\"><p>$descripcion</p></div>
		<div class=\"precio\"><p>Precio: $precio $</p></div>

		<div class=\"boton\" onclick=\"popup(1,'seguro',0)\">Comprar</div>
		<div class=\"botonAzul\">Chats</div><br><br><br>

		<div class=\"calificacion\"><p>Calificacion del vendedor</p>
	   	 <div class=\"estrellas\">
	   	 	<img src=\"..\..\..\imagenes\estrellaL.png\">
	   	 	<img src=\"..\..\imagenes\estrellaL.png\">
	   		<img src=\"..\..\imagenes\estrellaL.png\">
	   		<img src=\"..\..\imagenes\estrellaL.png\">
			<img src=\"..\..\imagenes\estrellaB.png\"></div></div>
	</div>";
