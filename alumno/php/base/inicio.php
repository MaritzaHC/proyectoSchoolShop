<?php

function conexiones()
{
	require_once '../../nusoap/lib/nusoap.php';
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";
	$client=new soapclient($wsdl);
	return $client;
}

function mostrarProductos(){
$client = conexiones();
$parameters=array("pag"=>"1");
$result=$client->productosConsultaprincipal($parameters);
$a = json_encode($result->productosConsultaprincipalResult->ProductosModelo,true);
$x = json_decode($a, true);
$control = count($x);

echo "	<div id='opcompras'>
		<div class=\"categorias\"><p>Categorias<br></p></div>";
	for ($i=0; $i<$control; $i++) { 
	    $titulo = json_encode($result->productosConsultaprincipalResult->ProductosModelo[$i]->titulo);
	    $precio = json_encode($result->productosConsultaprincipalResult->ProductosModelo[$i]->precio);
	    $id = json_encode($result->productosConsultaprincipalResult->ProductosModelo[$i]->idProductos);
	   //$foto = json_encode($result->productosConsultaprincipalResult->ProductosModelo[$i]->foto); 
		echo "	
			<a href='infomracionCompra.php?id=$id'>
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