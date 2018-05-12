<?php
include_once 'consultasProductos.php';
$x = array();
$uu = @$_SESSION['username'];
settype($uu,'integer');
$con=0;$ven=0;$ob=0;
$com = array();$ve = array();$obj = array();

$com = historialMisCompras($uu, 1);
foreach ($com as $key) {
	if ($key['estado']==2) {
		$con++;
	}
}
$ve = historialMisVentas($uu);
var_dump($ve);
foreach ($ve as $key) {
	if ($key['estado']==2) {
		$ven++;
	}
}
$obj = historialObjetosPerdidos($uu);
foreach ($com as $key) {
	if ($key['estado']==2) {
		$ob++;
	}
}

echo "<div class=\"arriba\">
			<div class=\"mensajes\"  onclick=\"window.location='mensajes.php\">
				<div class=\"titulo\"><p>Mensajes</p></div>
				<div class=\"cuenta\"><p>(0)</p></div>
			</div>		
			<div class=\"compras\" onclick=\"window.location='compras.php'\">
				<div class=\"titulo\"><p>Compras</p></div>
				<div class=\"cuenta\"><p>$con</p></div>
			</div>
		</div>
		<div class=\"abajo\">
			<div class=\"ventas\" onclick=\"window.location='ventas.php'\">
				<div class=\"titulo\"><p>Ventas</p> </div>
				<div class=\"cuenta\"><p>$ven</p> </div>
			</div>
			<div class=\"pedidos\" onclick=\"window.location='pedidos.php'\">
				<div class=\"titulo\"><p>Pedidos</p> </div>
				<div class=\"cuenta\"><p>$ob</p> </div>
			</div>	
		</div>	";
?>