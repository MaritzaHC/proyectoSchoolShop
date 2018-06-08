<?php
include_once 'consultasProductos.php';
function mostrarProductos($tipo,$pag){
	$x = array();
	$x = productos(1,$pag);
	$c = array();
	$c = categorias();

	$xx = productos(1,($pag+1));
	if ($xx[0]["idProductos"]==null) {
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
		    $imagen = $are['foto'];
		    $foto = "img/".$imagen;

			echo "	
				<a href='informacionCompra.php?id=$id'>
				<div class='productos'>
					<img src=$foto>
					<div class='info'>
						<div class='titulo'><p>$titulo</p></div>
						<div class='precio'><p>$$precio</p></div>
					</div>
				</div>
				</a>";
		}
	echo "</div>";
	echo "</div>
			  <script type=\"text/javascript\">
			  vista(\"id\");
			  </script>";
}
function mostrarPedidos($tipo,$pag){
	$w = array();
	$w = productos(3,$pag);
$xx = @buscarenProductosComerciante($cadena,($pag+1));
	if ($xx[0]['idProductos']==null||$xx[0]['idProductos']=="") {
	echo "
	<script type=\"text/javascript\">
			var siguiente = 1; 
	</script>
	";
	$x = null;
	}
	if ($w[0]['idProductos']=!0||$w[0]['idProductos']=!"") {
		echo "<div class='barraofertas'>";
		foreach ($w as $are) {
		    $titulo = $are['titulo'];
		    $precio = $are['precio'];
		    $id = $are['idProductos'];
		    $vendedor = $are['vendedor'];
			echo"
				<div class='productos' onclick='informacionProducto(\"Oferta\",\"$id\")'>
					<img src='na.jpg'>
					<div class='info'>
						<div class='titulo'><p>$titulo</p></div>
						<div class='precio'><p>$$precio</p></div>					
					</div>
				</div>";
			}
			echo "
			<div class='productos' onclick='informacionProducto(\"Oferta\",\"$id\")'>
					<img src='mas.jpg'>
					<div class='info'>
						<div class='titulo'><p>$titulo</p></div>
						<div class='precio'><p>$$precio</p></div>					
					</div>
			</div>
		</div>";
	}
/*----------------------------------------------------------------------------------------*/
	$y = array();
	$y =consultaGeneralVendedor($pag);
	foreach ($y as $are) {
	    $nombre = $are['nombre'];
	    $descripcion = $are['descripcion'];
	    $idVendedor = $are['idVendedor'];
	echo "<div class='productos' onclick='informacionProducto(\"Pedido\",$idVendedor)'>
					<img src='ga.jpg'>
					<div class='info'>
						<div class='titulo'><p>$nombre</p></div>	
						<!--<div class='descripcion'><p>$descripcion</p></div>-->
					</div>
		  </div>";
	}
	echo "</div>
		  <script type=\"text/javascript\">
		  vista(\"id\");
		  </script>";
}
function mostrarObjetos($pag){
	$z = array();
	$z = ObjetoPerdido(1,$pag);
	$xx = ObjetoPerdido(1,($pag+1));

	if ($xx[0]['idObjetoPerdido']==NULL) {
	echo "
	<script type=\"text/javascript\">
			var siguiente = 1; 
	</script>
	";
	$x = null;
	}

	echo "<div id='opobjetos'>";
		foreach ($z as $are) {
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
	echo "</div>
			<script type=\"text/javascript\">
				vista(\"id\");
				</script>";
}
function categoria()
{
		$c = array();
		$c = categorias();
		foreach ($c as $are) {
		    $idCategorias = $are['idCategorias'];
			$nombre = $are['nombre'];
			echo "<option value=$idCategorias>$nombre</option>";
		}
}
function lugares()
{
	$u = array();
	$u = lugaresConsulta();
	foreach ($u as $are) {
		$idLugar = $are['idLugar'];
		$nombre = $are['nombre'];
		echo "<option value=$idLugar>$nombre</option>";
	}
}

?>