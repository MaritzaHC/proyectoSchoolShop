<?php
include_once 'consultasProductos.php';
include_once 'consultasAlumno.php';
include 'estrellas.php';
$resul = array(); 
$laid = $_GET["id"];
$resul = productosDeta($laid);

	    $titulo = $resul['titulo'];
	    $precio = $resul['precio'];
	    $id = $resul['idProductos'];
	    $descripcion = $resul['descripcion'];
	    $vendedor = $resul['vendedor'];
	    $estado = $resul['estado'];
	    $foto = $resul['foto'].".jpg";

$datos = @alumnosDeta($vendedor);

@session_start(); 
$uu = @$_SESSION['username'];
settype($uu,'integer'); 

echo "<div class=\"imagen\"><img src=\"http://servicioss.gearhostpreview.com/img/$foto\"></div>
	<div class=\"datos\">
		<div class=\"titulo\"><p>$titulo</p></div>
		<div class=\"descripcion\"><p>$descripcion</p></div>
		<div class=\"precio\"><p>Precio: $precio $</p></div>

		<div class=\"boton\" id=\"nono\" onclick=\"popup(1,'seguro',0)\">Comprar</div>
		<div class=\"botonAzul\" onclick=\"window.location='base/hacerchat.php?ven=$vendedor'\">Chats</div><br><br><br>

		<div class=\"calificacion\"><p id=\"p1\">Calificacion del vendedor</p>";

		if ($estado==1||$estado==2||$estado==4) {
			$cal =$datos['calificacionV'];
			settype($cal, "integer");
			calificacionaMostrar($cal);
		}

echo "</div>
	<input type=\"\" name=\"vendedor\" value=$vendedor style=\"display: none;\">
	<input type=\"\" name=\"titulo\" value=\"$titulo\" style=\"display: none;\">
	";

if ($vendedor==$uu&&$estado==3) {
	echo "
	<style type=\"text/css\">
	#nono,.botonAzul,.reportar{
		display: none;
	}
	</style>
	<script type=\"text/javascript\">
		document.getElementById(\"p1\").innerHTML = \"Calificacion Comprador\";
	</script>";
}
elseif ($vendedor==$uu) {
	echo "
	<style type=\"text/css\">
		.calificacion, #nono,.botonAzul,.reportar{
			display: none;
		}
	</style>";
}
elseif ($estado==3) {
	echo "
	<style type=\"text/css\">
	#nono,.botonAzul,.reportar{
		display: none;
	}
	</style>";
}
?>
