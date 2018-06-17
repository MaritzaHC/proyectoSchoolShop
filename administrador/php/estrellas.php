<?php
function calificacionaMostrar($can)
{
	$can=$can-1;
	?>
	<div class="estrellas">
	<?php 
	for ($i=0; $i < 5; $i++) { 
		if ($can<$i) {
			echo "<img src=\"../../imagenes/estrellaB.png\">";
		}
		else{
			echo "<img src=\"../../imagenes/estrellaL.png\">";
		}
	}
	echo "</div>";
}
?>