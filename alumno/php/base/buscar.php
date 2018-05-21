<?php
include_once 'consultasProductos.php';
function buscarProductos($cadena,$pag)
{
	$x = array();
	$x = buscarenProductoEstudiante($cadena,$pag);
	$c = array();
	$c = categorias();
	$si=0;
	$xx = buscarenProductoEstudiante($cadena,($pag+1));
	if ($xx==0) {
	echo "
	<script type=\"text/javascript\">
			var siguiente = 1;
	</script>
	";
	}

	echo "<div id='opcompras'>";
			include 'categoriasMenu.php';

		foreach ($x as $are) {
		    $titulo = $are['titulo'];
		    $precio = $are['precio'];
		    $id = $are['idProductos'];

			echo "	
				<a href='informacionCompra.php?id=$id'>
				<div class='productos'>
					<img src='b.jpg'>
					<div class='info'>
						<div class='titulo'><p>$titulo</p></div>
						<div class='precio'><p>$$precio</p></div>
					</div>
				</div>
				</a>";
				$si++;
		}
		if ($si==0) {
			echo "<h3  style=\"padding-top: 150px\">No se encontraron resultados</h3>";
		}
	echo "</div>";
	echo "</div>
			  <script type=\"text/javascript\">
			  vista(\"id\");
			  </script>";
}
function buscarPedidos($cadena,$pag)
{
	$w = array();
	$w = buscarenProductosComerciante($cadena,$pag);
	$si=0;
	$xx = buscarenProductosComerciante($cadena,($pag+1));
	if ($xx==0) {
	echo "
	<script type=\"text/javascript\">
			var siguiente = 1;
	</script>
	";
	}
	foreach ($w as $are) {
		$si++;
		if ($are['tipo']==3) {
			$titulo = $are['titulo'];
		    $precio = $are['precio'];
		    $id = $are['idProductos'];
			echo"
				<div class='productos' onclick='informacionProducto(\"Oferta\",$id)'>
					<img src='na.jpg'>
					<div class='info'>
						<div class='titulo'><p>$titulo</p></div>
						<div class='precio'><p>$$precio</p></div>					
					</div>
				</div>";
		}
		else {
			$titulo = $are['titulo'];
		    $descripcion = $are['descripcion'];
		    $id = $are['idProductos'];
			echo "<div class='productos' onclick='informacionProducto(\"Pedido\",$id)'>
						<img src='ga.jpg'>
						<div class='info'>
							<div class='titulo'><p>$titulo</p></div>	
						</div>
			  </div>";
		}
	    
	}
	if ($si==0) {
		echo "<h3  style=\"padding-top: 150px\">No se encontraron resultados</h3>";
	}
	echo "</div>
		  <script type=\"text/javascript\">
		  vista(\"id\");
		  </script>";
}

function buscarObjetos($cadena,$pag)
{
	$z = array();
	$z = buscarObjetoPerdido($cadena,$pag);
	$si=0;
	$xx =buscarObjetoPerdido($cadena,($pag+1));
	if ($xx==0) {
	echo "
	<script type=\"text/javascript\">
			var siguiente = 1;
	</script>
	";
	}
	echo "<div id='opobjetos'>";
		foreach ($z as $are) {
		$si++;
	    $titulo = $are['titulo'];
	    $id = $are['idObjetoPerdido'];
	   //$foto = $resul['foto']; 
		echo "
					<div class='productos' onclick='informacionProducto(\"Objeto\",$id)'>
						<img src='aa.jpg'>
						<div class='info'>
							<div class='titulo'>
								<p>$titulo</p>
							</div>
						</div>
					</div>
				";
		}
		if ($si==0) {
		echo "<h3  style=\"padding-top: 150px\">No se encontraron resultados</h3>";
		}	
		echo "</div>
				<script type=\"text/javascript\">
					vista(\"id\");
					</script>";
}
function buscarCategoria($id,$pag){
settype($id,'integer');
$x = array();
$x = buscarProductosenCategoria($id,$pag);
$c = array();
$c = categorias();
$si=0;
$xx =buscarProductosenCategoria($id,($pag+1));
	if ($xx==0) {
	echo "
	<script type=\"text/javascript\">
			var siguiente = 1;
	</script>
	";
	}

echo "	<div id='opcompras'>";
		include 'categoriasMenu.php';

	foreach ($x as $are) {
	    $titulo = $are['titulo'];
	    $precio = $are['precio'];
	    $id = $are['idProductos'];

		echo "	
			<a href='informacionCompra.php?id=$id'>
			<div class='productos'>
				<img src='b.jpg'>
				<div class='info'>
					<div class='titulo'><p>$titulo</p></div>
					<div class='precio'><p>$$precio</p></div>
				</div>
			</div>
			</a>";
			$si++;
	}
	if ($si==0) {
		echo "<h3  style=\"padding-top: 150px\">No se encontraron resultados</h3>";
	}
echo "</div>";
echo "</div>
		  <script type=\"text/javascript\">
		  vista(\"id\");
		  </script>";

}
