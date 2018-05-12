<?php
include_once 'consultasProductos.php';
function mostrarProductos($tipo,$pag){
$x = array();
$x = productos(1,1);
$c = array();
$c = categorias();

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
	}
echo "</div>";
echo "</div>
		  <script type=\"text/javascript\">
		  vista(\"id\");
		  </script>";

}
function mostrarPedidos($tipo,$pag){
	$w = array();
	$w = productos(2,1);
	foreach ($w as $are) {
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
/*----------------------------------------------------------------------------------------*/
	$y = array();
	$y = productos(3,1);
	foreach ($y as $are) {
	    $titulo = $are['titulo'];
	    $descripcion = $are['descripcion'];
	    $id = $are['idProductos'];
	echo "<div class='productos' onclick='informacionProducto(\"Pedido\",$id)'>
					<img src='ga.jpg'>
					<div class='info'>
						<div class='titulo'><p>$titulo</p></div>	
						<div class='descripcion'><p>$descripcion</p></div>
					</div>
		  </div>";
	}
	echo "</div>
		  <script type=\"text/javascript\">
		  vista(\"id\");
		  </script>";
}
function mostrarObjetos(){
	$z = array();
	$z = ObjetoPerdido(1,1);

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