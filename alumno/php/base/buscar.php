<?php
function buscarProductos($value='')
{
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
	
	echo "</div>
			  <script type=\"text/javascript\">
			  vista(\"i\");
			  </script>";
}
function buscarPedidos($value='')
{
	# code...
}
function buscarObjetos($value='')
{
	# code...
}

