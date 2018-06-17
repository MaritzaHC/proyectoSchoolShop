
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
	echo "</div></div>";
}

function calificacion()
{

	echo "<div style=\"width: 180px; padding-left: none;\" class=\"estrellas\">";
	?>
	<input id="1r" class="css-checkbox" type="radio" value=1 name="estrella" onclick="cambio(1)">
	<label class="css-label" for="1r" id="1rr"></label>
	<input id="2r" class="css-checkbox" type="radio" value=2 name="estrella" onclick="cambio(2)">
	<label class="css-label" for="2r" id="2rr"></label>
	<input id="3r" class="css-checkbox" type="radio" value=3 name="estrella" onclick="cambio(3)">
	<label class="css-label" for="3r" id="3rr"></label>
	<input id="4r" class="css-checkbox" type="radio" value=4 name="estrella" onclick="cambio(4)">
	<label class="css-label" for="4r" id="4rr"></label>
	<input id="5r" class="css-checkbox" type="radio" value=5 name="estrella" onclick="cambio(5)">
	<label class="css-label" for="5r" id="5rr"></label>

	<?php
	echo "</div></div>";
	?> 
<script type="text/javascript">
	function cambio(i) {
		for (var x = 1; x <= 5; x++) {
			if(x<=i)
			$("#"+x+"rr").css("background-image","url(../../imagenes/estrellaL.png)");
			else
			$("#"+x+"rr").css("background-image","url(../../imagenes/estrellaB.png)");
		}
	}
</script>
<?php
}
?>
<style type="text/css">
	
	input[type=radio].css-checkbox{
	display: none;
	}
	input[type=radio].css-checkbox + label.css-label{
		padding-left: 27px;
		height: 25px;
		display: inline-block;
		line-height: 18px;
		background-repeat: no-repeat;
		background-position: 0 0;
		vertical-align: middle;
		cursor: pointer;
	}
	label.css-label{
		background-image: url(../../imagenes/estrellaB.png);
		-webkit-touch-callout: none;
		-webkit-user-select: none;
		-khtml-user-select:none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}
</style>
