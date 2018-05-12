<?php
include 'consultasProductos.php';
$resul = array();
$laid = $_GET["id"];
$resul = productosDeta($laid);
	    $titulo = $resul['titulo'];
	    $precio = $resul['precio'];
	    $id = $resul['idProductos'];
	    $descripcion = $resul['descripcion'];
	    $vendedor = $resul['vendedor'];

echo "<div class=\"imagenn\"><img src=\"na.jpg\"></div>
	<div class=\"datosPedido\" style=\"width: 40%\">
	<div class=\"titulo\"><p>$vendedor</p></div>
		<div class=\"descripcion\">
			<p>Descripcion</p>
			<div class=\"texto\">$descripcion</div>
		</div>
		<div class=\"cantidad\">
			<p>Cantidad</p>
			<input type=\"text\" name=\"\" size=\"3\">
		</div>
		<div class=\"precio\">
			<p>$precio</p>
			<p id=\"precio\">auto %</p>
		</div>
		<div class=\"dia\">
			<p>Fecha</p>
			<input type=\"text\" name=\"dia\" placeholder=\"Dia\" size=\"1\">
			<input type=\"text\" name=\"mes\" placeholder=\"Mes\" size=\"1\">
			<input type=\"text\" name=\"hor\" placeholder=\"Hora\" size=\"1\">
			<input type=\"text\" name=\"min\" placeholder=\"Min\" size=\"1\">
		</div>
		<div class=\"boton\" onclick=\"popup(1,'seguro')\">Enviar</div>
		<div class=\"botonAzul\">Contactar</div>
		<div class=\"datosLocal\">
			<div style=\"height: 50px\"></div>
			<div class=\"ubicacion\"><p>ubicacion</p></div>
			<div class=\"telefono\"><p>Telefono</p></div>
			<div class=\"calificacion\"><p>Calificacion del vendedor</p>
	   	 		<div class=\"estrellas\">
		   	 	<img src=\"..\..\imagenes\estrellaL.png\">
		   	 	<img src=\"..\..\imagenes\estrellaL.png\">
		   		<img src=\"..\..\imagenes\estrellaL.png\">
		   		<img src=\"..\..\imagenes\estrellaL.png\">
				<img src=\"..\..\imagenes\estrellaB.png\"></div></div>
		</div>";