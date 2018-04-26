<?php
function calificacion($parametro)
{
	echo "div class=\"estrellas\">";
	for ($i=0; $i < 5; $i++) { 
		if ($parametro>$i) {
			echo "<img src=\"..\..\..\imagenes\estrellaL.png\">";
		}
		else{
			echo "<img src=\"..\..\imagenes\estrellaB.png\">";
		}
	}
	echo "</div></div>";
}