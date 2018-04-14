<?php
require_once '../../nusoap/lib/nusoap.php';
$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";
$client=new soapclient($wsdl);

$result=$client->productosConsultaDetalle(3);
$a = json_encode($result->productosConsultaDetalleResult,true);
$x = json_decode($a, true);

var_dump($result);

echo "<div class=\"imagen\"><img src=\"b.jpg\"></div>
	<div class=\"datos\">
		<div class=\"titulo\"><p>$titulo</p></div>
		<div class=\"descripcion\"><p>Mas pendientes para la base de datps</p></div>
		<div class=\"precio\"><p>0.00 $</p></div>
		<div class=\"boton\" onclick=\"popup(1,'seguro')\">PHPcompra</div>
		<div class=\"botonAzul\">PHPchats</div><br><br><br>
		<div class=\"calificacion\"><p>Calificacion del vendedor</p>
	   	 <div class=\"estrellas\">
	   	 	<img src=\"..\..\imagenes\estrellaL.png\">
	   	 	<img src=\"..\..\imagenes\estrellaL.png\">
	   		<img src=\"..\..\imagenes\estrellaL.png\">
	   		<img src=\"..\..\imagenes\estrellaL.png\">
			<img src=\"..\..\imagenes\estrellaB.png\"></div></div>
	</div>";