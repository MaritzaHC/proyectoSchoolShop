<?php 
include 'consultasAlumno.php';
include 'estrellas.php';
$x = array();
	$uu = @$_SESSION['username'];
	settype($uu,'integer');

	$x = @alumnosDeta($uu);
		$id = $x['id'];
		$nombre = $x['nombre']." ".$x['apellidoP']." ".$x['apelldioM'];
		$foto = $x['foto'].".jpg";
		$correo = $x['correo'];
		$calificacionV = $x['calificacionV'];
		$calificacionC = $x['calificacionC'];

		$canV = $calificacionV;
		$canC = $calificacionC;

		settype($canV, "integer");
		settype($canC, "integer");

function mostrar()
{
global $canC;
global $canV;
global $nombre;
global $id;
global $correo;
echo "<div class=\"calificacion\">
				<div class=\"comprador\">
					<p>Comprador</p>";
		   	 		calificacionaMostrar($canC);
				echo "
				<div class=\"vendedor\">
					<p>Vendedor</p>";
		   	 		calificacionaMostrar($canC);
				echo "
			</div>
	</div>
		<div class=\"info\">
			<p>Nombre</p>
			<p>$nombre</p><br>
			<p>Registro</p>
			<p>$id</p><br>
			<p>Correo</p>
			<input type=\"text\" name=\"correo\" size=\"35\" placeholder=\"$correo\" value=\"$correo\">";
}
