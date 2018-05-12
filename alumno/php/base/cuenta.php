<?php 
include 'consultasAlumno.php';
	$x = array();
	$uu = @$_SESSION['username'];
	settype($uu,'integer');

	$x = alumnosDeta($uu);
		$id = $x['id'];
		$nombre = $x['nombre']." ".$x['apellidoP']." ".$x['apelldioM'];
		//$foto = $x['foto'];
		$correo = $x['correo'];

echo "<div class=\"calificacion\">
				<div class=\"comprador\">
					<p>Comprador</p>
		   	 		<div class=\"estrellas\">
			   	 	<img src=\"..\..\imagenes\estrellaL.png\">
			   	 	<img src=\"..\..\imagenes\estrellaL.png\">
			   		<img src=\"..\..\imagenes\estrellaL.png\">
			   		<img src=\"..\..\imagenes\estrellaL.png\">
					<img src=\"..\..\imagenes\estrellaB.png\"></div>
				</div>
				<div class=\"vendedor\">
					<p>Vendedor</p>
		   	 		<div class=\"estrellas\">
			   	 	<img src=\"..\..\imagenes\estrellaL.png\">
			   	 	<img src=\"..\..\imagenes\estrellaL.png\">
			   		<img src=\"..\..\imagenes\estrellaL.png\">
			   		<img src=\"..\..\imagenes\estrellaL.png\">
					<img src=\"..\..\imagenes\estrellaB.png\"></div>
				</div>
			</div>
	</div>
		<div class=\"info\">
			<p>Nombre</p>
			<p>$nombre</p><br>
			<p>Registro</p>
			<p>$id</p><br>
			<p>Correo</p>
			<input type=\"text\" name=\"correo\" size=\"35\" placeholder=\"$correo\" value=\"$correo\">";
