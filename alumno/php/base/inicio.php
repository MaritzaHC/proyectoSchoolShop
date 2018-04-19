<?php
require 'conexion.php';
/*ws
function conexiones()
{
	require_once '../../nusoap/lib/nusoap.php';
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";
	$client=new soapclient($wsdl);
	return $client;
}
*/
function mostrarProductos($tipo,$pag){
/*ws
$client = conexiones();
$result=$client->productosConsultaprincipal($pag,$tipo);
$a = json_encode($result->productosConsultaprincipalResult->ProductosModelo,true);
$x = json_decode($a, true);
$control = count($x);
var_dump($result);*/
global $mysqli;
$sql = "Select idProductos,titulo, descripcion,foto,precio,categoria,tipo from productos where tipo=".$tipo." && estado=1;";
if(!$resultado = $mysqli->query($sql)){
   echo "Error al consultar0.";
   exit;
}

echo "	<div id='opcompras'>
		<div class=\"categorias\"><h3>Categorias<br></h3>";
			categorias(1);
			echo "</div>";

		while($resul = $resultado->fetch_assoc()){
	    $titulo = $resul['titulo'];
	    $precio = $resul['precio'];
	    $id = $resul['idProductos'];
	   //$foto = $resul['foto'];  
		/*ws
	for ($i=0; $i<$control; $i++) { 
	    $titulo = json_encode($result->productosConsultaprincipalResult->ProductosModelo[$i]->titulo);
	    $precio = json_encode($result->productosConsultaprincipalResult->ProductosModelo[$i]->precio);
	    $id = json_encode($result->productosConsultaprincipalResult->ProductosModelo[$i]->idProductos);
	   //$foto = json_encode($result->productosConsultaprincipalResult->ProductosModelo[$i]->foto); */
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
	/*ws
	$client = conexiones();
	$result=$client->productosConsultaprincipal($pag,3);
	$a = json_encode($result->productosConsultaprincipalResult->ProductosModelo,true);
	$x = json_decode($a, true);
	$control = count($x);
var_dump($result);*/
	global $mysqli;
	$sql = "Select idProductos,titulo, descripcion,foto,precio,categoria,tipo from productos where tipo=2 && estado=1;";
	if(!$resultado = $mysqli->query($sql)){
	   echo "Error al consultar0.";
	   exit;
	}
	echo "<div id='oppedidos'>";
	/*ws
	for ($i=0; $i<$control; $i++) { 
	    $titulo = json_encode($result->productosConsultaprincipalResult->ProductosModelo[$i]->titulo);
	    $precio = json_encode($result->productosConsultaprincipalResult->ProductosModelo[$i]->precio);
	    $id = json_encode($result->productosConsultaprincipalResult->ProductosModelo[$i]->idProductos);
	   //$foto = json_encode($result->productosConsultaprincipalResult->ProductosModelo[$i]->foto); */
	    while($resul = $resultado->fetch_assoc()){
	    $titulo = $resul['titulo'];
	    $precio = $resul['precio'];
	    $id = $resul['idProductos'];
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
	/*ws
	$result=$client->productosConsultaprincipal($pag,3);
	$a = json_encode($result->productosConsultaprincipalResult->ProductosModelo,true);
	$x = json_decode($a, true);
	$control = count($x);

	for ($i=0; $i<$control; $i++) { 
	    $titulo = json_encode($result->productosConsultaprincipalResult->ProductosModelo[$i]->titulo);
	    $descripcion = json_encode($result->productosConsultaprincipalResult->ProductosModelo[$i]->descripcion);
	    $id = json_encode($result->productosConsultaprincipalResult->ProductosModelo[$i]->idProductos);
	   //$foto = json_encode($result->productosConsultaprincipalResult->ProductosModelo[$i]->foto);  */
	global $mysqli;
	$sql = "Select idProductos,titulo, descripcion,foto,precio,categoria,tipo from productos where tipo=3 && estado=1;";
	if(!$resultado = $mysqli->query($sql)){
	   echo "Error al consultar0.";
	   exit;
	}
	 while($resul = $resultado->fetch_assoc()){
	    $titulo = $resul['titulo'];
	    $descripcion = $resul['descripcion'];
	    $id = $resul['idProductos'];
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
		  sqlClose();
}
function mostrarObjetos(){
	/*ws
	$client = conexiones();
	$result=$client->productosConsultaprincipal($pag,3);
	$a = json_encode($result->productosConsultaprincipalResult->ProductosModelo,true);
	$x = json_decode($a, true);
	$control = count($x);*/
	global $mysqli;
	$sql = "select * from objetoperdido where estado=1;";
	if(!$resultado = $mysqli->query($sql)){
	   echo "Error al consultar0.";
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
				sqlClose();
}
function categorias($cual)
{
	global $mysqli;
	$sql = "select *from categorias;";

	if(!$resultadoCategoria = $mysqli->query($sql)){
	   echo "Error al consultar0.";
	   exit;
	}

	if ($cual == 1) {
		while($res = $resultadoCategoria->fetch_assoc()){
	    		echo "<p>".$res['nombre']."</p>";
	   }
	}

	else {
		while($res = $resultadoCategoria->fetch_assoc()){
		echo "<option value=".$res['idCategorias'].">".$res['nombre']."</option>";
		}
	}
	sqlClose();
}
?>