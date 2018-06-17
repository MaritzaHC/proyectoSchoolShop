<?php 
$uu = @$_SESSION['username'];
settype($uu,'integer');
echo "<script>var usuario = $uu;</script>";
function titulosMen()
{
	global $x;
	$i=1;
	echo "Cargando...";
}
function contenidoMen()
{
	global $x;
	global $uu;
	$i=1;
}
?>