<?php
include_once 'consultasProductos.php';
$resul = array(); 
$laid = $_GET["id"];
$resul = objetosDeta($laid);

	    $titulo = $resul['titulo'];
	    $id = $resul['idObjetoPerdido'];
	    $descripcion = $resul['descripcion'];
	    $publicador = $resul['publicador'];
	    var_dump($resul);

echo "
	<div class=\"imagenn\"><img src=\"aa.jpg\"></div>
	<div class=\"datosObjeto\" style=\"width: 40%\">
	<div class=\"titulo\"><p>$titulo</p></div>
		<div class=\"descripcion\">
			<p>Descripcion</p>
			<div class=\"texto\">$descripcion</div>
		</div>

		<input type=\"\" name=\"id\" value=$laid style=\"display: none\">
		<input type=\"\" name=\"publicador\" value=$publicador style=\"display: none\">
		<input type=\"\" name=\"titulo\" value=$titulo style=\"display: none\">
";
?>
