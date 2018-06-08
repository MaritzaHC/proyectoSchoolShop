<?php 
//include 'consultasAlumno.php';
$uu = @$_SESSION['username'];
settype($uu,'integer');

echo "<script>var usuario = $uu;</script>";

//	$x = @conversaGeneral($uu);	

function titulos()
{
	global $x;
	$i=1;
	/*$con=count($x);
	if ($x[0]['usuarioU']==null) {
		echo "No hay mensajes";
		exit;
	}	
	foreach ($x as $are) {
		$titulo = $are['usuarioU']."-".$are['usuarioD'];
	    $a=$i."n";
		echo "<div class=\"notificacion\" id=$a onclick=\"mostrar($i,$con)\"><p>$titulo</p></div>";
		$i++;
	}*/
	echo "Cargando...";
}

function contenido()
{
	global $x;
	global $uu;
	$i=1;
	/*foreach ($x as $are) {
	    $id = $are['id'];
	    $men = mensajes($id);
	    $a=$i."c";
		echo "<div class=\"contenidoNoti\" id=$a><div class=\"mensajes\">";
			echo "Cargando...";
			/*foreach ($men as $esto) {
				$text=$esto['text'];
				if ($esto['usuario']==$uu) echo "<div class=\"tues\">$text</div><br><br>";
				else echo "<div class=\"tuno\">$text</div><br><br>";
			}
		echo "</div>";
		?>
		<input type="hidden" name="idConvo" value="<?php ?>">
		<input type="text" class="tb" name="nuevo" size="32">
		<input type="submit" name="enviar" value="enviar" class="enviar"><?php

		echo "<div class=\"boton1\" onclick=\"popup(1,'seguro',0)\">Eliminar</div>
			<input type=\"number\" name=\"$id\" value=$id style=\"display: none;\">";
		echo "</div>";
		$i++;
	}*/
}
?>