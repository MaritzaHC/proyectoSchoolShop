<?php
//require 'conexion.php';
require '../../../lib/nusoap.php';

$wsdl="http://localhost:26439/ServiceSS.asmx?WSDL";

$cliente=new nusoap_client($wsdl,true);

$result=$cliente->call('productosConsultaprincipal');

echo $result;

var_dump($result)."</br>";

echo $result['productosConsultaprincipalResult'][0]." ";

$columnas = ceil(count($result,1)/count($result,0))-1;

echo $columnas;
/*$j=0;
for ($i=0; $i <(3); $i++) { 
	$j++;
	if ($j==5) {
		echo "</br>";
		$j=1;
	}
	echo $result['productosConsultaprincipalResult']['ProductosModelo'][$i]." ";
}*/

?>