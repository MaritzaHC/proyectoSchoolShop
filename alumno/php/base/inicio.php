<?php
require 'conexion.php';

function mostrarProductos(){
global $mysqli;
$sql = "SELECT idProductos, foto, precio, titulo FROM productos WHERE tipo = 1";

if(!$resultado = $mysqli->query($sql)){
   echo "Error al consultar0.";
   exit;
}
echo "	<div id='opcompras'>
		<div class=\"categorias\"><p>Categorias<br></p></div>";
	while($resul = $resultado->fetch_assoc()){
	    $titulo = $resul['titulo'];
	    $precio = $resul['precio'];
	    $id = $resul['idProductos'];
	   //$foto = $resul['foto'];  
		echo "	
			<div class='productos' onclick='informacionProducto(\"Compra\",$id)'>
				<img src='b.jpg'>
				<div class='info'>
					<div class='titulo'><p>$titulo</p></div>
					<div class='precio'><p>$$precio</p></div>
				</div>
			</div>";
	}
echo "</div>";
}
function mostrarPedidos(){
	global $mysqli;
	$sql = "SELECT idProductos, foto, precio, titulo FROM productos WHERE tipo = 2";

	if(!$resultado = $mysqli->query($sql)){
	   echo "Error al consultar1.";
	   exit;
	}
	echo "<div id='oppedidos'>";
	while($resul = $resultado->fetch_assoc()){
	    $titulo = $resul['titulo'];
	    $precio = $resul['precio'];
	    $id = $resul['idProductos'];
	   //$foto = $resul['foto'];  
	echo"
		<div class='productos' onclick='informacionProducto(\"Oferta\",$id)'>
			<img src='na.jpg'>
			<div class='info'>
				<div class='titulo'><p>$titulo</p></div>
				<div class='precio'><p>$$precio</p></div>					
			</div>
		</div>";
	}

	$sql = "SELECT idProductos, foto, descripcion, titulo FROM productos WHERE tipo = 3";

	if(!$resultado = $mysqli->query($sql)){
	   echo "Error al consultar2.";
	   exit;
	}
	while($resul = $resultado->fetch_assoc()){
	    $titulo = $resul['titulo'];
	    $descripcion = $resul['descripcion'];
	    $id = $resul['idProductos'];
	   //$foto = $resul['foto'];  
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
	global $mysqli;
	$sql = "SELECT idObjetoPerdido, foto, titulo FROM objetoperdido";

	if(!$resultado = $mysqli->query($sql)){
	   echo "Error al consultar en objetos.";
	   exit;
	}
	echo "<div id='opobjetos'>";
	while($resul = $resultado->fetch_assoc()){
	    $titulo = $resul['titulo'];
	    $id = $resul['idObjetoPerdido'];
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