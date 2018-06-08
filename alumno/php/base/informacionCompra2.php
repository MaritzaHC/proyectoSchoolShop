<?php
include_once 'consultasProductos.php';
$resul = array(); 
$laid = $_GET["id"];
$resul = productosDeta($laid);

	    $titulo = $resul['titulo'];
	    $vendedor = $resul['vendedor'];

echo "
	<input type=\"\" name=\"vendedor\" value=$vendedor style=\"display: none;\">
	<input type=\"\" name=\"titulo\" value=\"$titulo\" style=\"display: none;\">
	";
?>
