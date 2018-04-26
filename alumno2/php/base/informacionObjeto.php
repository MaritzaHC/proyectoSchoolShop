<?php
include_once 'consultasProductos.php';
$resul = array(); 
$laid = $_GET["id"];
$resul = objetosDeta($laid);

	    $titulo = $resul['titulo'];
	    $id = $resul['idObjetoPerdido'];
	    $descripcion = $resul['descripcion'];

echo "
	<div class=\"imagenn\"><img src=\"aa.jpg\"></div>
	<div class=\"datosObjeto\" style=\"width: 40%\">
	<div class=\"titulo\"><p>$titulo</p></div>
		<div class=\"descripcion\">
			<p>Descripcion</p>
			<div class=\"texto\">$descripcion</div>
		</div>
";