<?php
include_once 'consultasProductos.php';
$resul = array(); 
$laid = $_GET["id"];
$resul = productosDeta($laid);

	    $titulo = $resul['titulo'];
	    $precio = $resul['precio'];
	    $id = $resul['idProductos'];
	    $descripcion = $resul['descripcion'];
	    $vendedor = $resul['vendedor'];

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
	</div>
	<input type=\"\" name=\"vendedor\" value=$vendedor style=\"display: none;\">
	<input type=\"\" name=\"titulo\" value=\"$titulo\" style=\"display: none;\">
	";
?>
