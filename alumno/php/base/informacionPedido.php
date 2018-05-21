<?php 
require_once 'base/consultasProductos.php';

$resul = array(); 
$laid = $_GET["id"];
settype($laid,'integer');
var_dump($laid);
$datos = consultaDetalleVendedor($laid);

$foto = $datos['foto'];
$nombre = $datos['nombre'];
$ubicacion = $datos['ubicacion'];
$telefono = $datos['telefono'];
var_dump($datos);

?>
		<div class="imagenn"><img src="ga.jpg"></div>
		<div class="datosPedido">
		<div class="titulo"><p><?php echo $nombre;?></p></div>
			<div class="producto">
				<p>Productos</p>
				<select id="producto" onChange="imprimirValor()">
					<?php 
					$c = array();
					$c = historialMisVentas($laid);
					var_dump($c);
					foreach ($c as $are) {
					    $precio = $are['precio'];
					    $titulo = $are['titulo'];
					    $descripcion = $are['descripcion'];
						echo "<option value=\"$precio\">$tiutlo</option>";
						echo "<p id=\"esto\" style=\"display: none;\">$descripcion</p>";
					}
					?>
				</select>
			</div>
			<div class="descripcion">
				<p>Descripcion</p>
				<p class="texto" id="des"></p>
			</div>
			<div class="cantidad">
				<p>Cantidad</p>
				<input type="text" name="cantidad" size="3">
			</div>
			<div class="precio">
				<p>Precio</p>
				<p id="precio">auto %</p>
			</div>
			<div class="dia">
				<p>Fecha</p>
				<input type="text" name="dia" placeholder="Dia" size="1" required="required">
				<input type="text" name="mes" placeholder="Mes" size="1" required="required">
				<input type="text" name="hor" placeholder="Hora" size="1" required="required">
				<input type="text" name="min" placeholder="Min" size="1" required="required">
			</div>
			<div class="boton" onclick="popup(1,'seguro')">Enviar</div>
			<div class="botonAzul">Contactar</div>
			<div class="datosLocal">
				<div style="height: 50px"></div>
				<div class="ubicacion"><p><?php echo $ubicacion; ?></p></div>
				<div class="telefono"><p><?php echo $telefono; ?></p></div>
				<div class="calificacion"><p>Calificacion del vendedor</p>
		   	 		<div class="estrellas">
			   	 	<img src="..\..\imagenes\estrellaL.png">
			   	 	<img src="..\..\imagenes\estrellaL.png">
			   	 	<img src="..\..\imagenes\estrellaL.png">
			   	 	<img src="..\..\imagenes\estrellaL.png">
					<img src="..\..\imagenes\estrellaB.png"></div></div>
			</div>
			
		</div>
