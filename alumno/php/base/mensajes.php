<?php 
$uu = @$_SESSION['username'];
settype($uu,'integer');
echo "<script>var usuario = $uu;</script>";
function titulos()
{
	global $x;
	$i=1;
	echo "Cargando...";
}
function contenido()
{
	global $x;
	global $uu;
	$i=1;
}
?>