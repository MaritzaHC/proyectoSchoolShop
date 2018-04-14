<?php

function conexiones()
{
	require_once '../../nusoap/lib/nusoap.php';
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";
	$client=new soapclient($wsdl);
	return $client;
}

function mostrarProductos($tipo,$pag){
$client = conexiones();
$result=$client->productosConsultaprincipal($pag,$tipo);
$a = json_encode($result->productosConsultaprincipalResult->ProductosModelo,true);
$x = json_decode($a, true);
$control = count($x);
var_dump($result);

echo "	<div id='opcompras'>
		<div class=\"categorias\"><p>Categorias<br></p></div>";
	for ($i=0; $i<$control; $i++) { 
	    $titulo = json_encode($result->productosConsultaprincipalResult->ProductosModelo[$i]->titulo);
	    $precio = json_encode($result->productosConsultaprincipalResult->ProductosModelo[$i]->precio);
	    $id = json_encode($result->productosConsultaprincipalResult->ProductosModelo[$i]->idProductos);
	   //$foto = json_encode($result->productosConsultaprincipalResult->ProductosModelo[$i]->foto); 
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
	$client = conexiones();
	$result=$client->productosConsultaprincipal($pag,3);
	$a = json_encode($result->productosConsultaprincipalResult->ProductosModelo,true);
	$x = json_decode($a, true);
	$control = count($x);
var_dump($result);
	echo "<div id='oppedidos'>";
	for ($i=0; $i<$control; $i++) { 
	    $titulo = json_encode($result->productosConsultaprincipalResult->ProductosModelo[$i]->titulo);
	    $precio = json_encode($result->productosConsultaprincipalResult->ProductosModelo[$i]->precio);
	    $id = json_encode($result->productosConsultaprincipalResult->ProductosModelo[$i]->idProductos);
	   //$foto = json_encode($result->productosConsultaprincipalResult->ProductosModelo[$i]->foto); 
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
	$result=$client->productosConsultaprincipal($pag,3);
	$a = json_encode($result->productosConsultaprincipalResult->ProductosModelo,true);
	$x = json_decode($a, true);
	$control = count($x);

	for ($i=0; $i<$control; $i++) { 
	    $titulo = json_encode($result->productosConsultaprincipalResult->ProductosModelo[$i]->titulo);
	    $descripcion = json_encode($result->productosConsultaprincipalResult->ProductosModelo[$i]->descripcion);
	    $id = json_encode($result->productosConsultaprincipalResult->ProductosModelo[$i]->idProductos);
	   //$foto = json_encode($result->productosConsultaprincipalResult->ProductosModelo[$i]->foto);  

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
	$client = conexiones();
	$result=$client->productosConsultaprincipal($pag,3);
	$a = json_encode($result->productosConsultaprincipalResult->ProductosModelo,true);
	$x = json_decode($a, true);
	$control = count($x);

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