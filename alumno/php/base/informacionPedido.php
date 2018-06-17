<?php 
require_once 'base/consultasProductos.php';
require 'estrellas.php';

$resul = array(); 
$laid = $_GET["id"];
settype($laid,'integer');
$datos = consultaDetalleVendedor($laid);

$foto = $datos['foto'].".jpg";
$nombre = $datos['nombre'];
$ubicacion = $datos['ubicacion'];
$telefono = $datos['telefono'];
$calificacion = $datos['calificacion'];
$idVendedor = $datos['idVendedor'];

$ej = @ConsultaGeneralProductosPublicador($laid);
?>
		<div class="imagenn"><img id="foto" src=<?php echo "http://servicioss.gearhostpreview.com/img/$foto"; ?>></div>
		<div class="datosPedido">
		<div class="titulo"><p><?php echo $nombre;?></p></div>
			<div class="producto">
				<p>Productos</p>
				<select id="producto" name="producto" onChange="imprimirValor()">
					<?php 
					foreach ($ej as $are) {
						var_dump($are);
						if($are['tipo']==2 and $are['estado']==1){
						    $precio = $are['precio'];
						    settype($precio, "integer");
						    $titulo = $are['titulo'];
						    $descripcion = $are['descripcion']; 
						    $id = $are['idProductos']; 
						    $fotoo = $are['foto'];
							echo "<option value=\"$precio,$descripcion,$id,$fotoo,$titulo\">$titulo</option>";
						}
					}
					?>
				</select>
			</div>
			<input type="" name="vendedor" style="display: none;" value=<?php echo $idVendedor;?>>
			<div class="descripcion">
				<p>Descripcion</p><br>
				<p class="texto" id="des"></p>
			</div>
			<div class="cantidad">
				<p>Cantidad</p>
				<input type="text" name="cantidad" size="3" value=1>
			</div>
			<div class="precio">
				<p>Precio</p>
				<p id="precio">auto %</p>
			</div>
			<div class="dia">
				<p>Fecha</p><br>
				<input type="number" name="dia" placeholder="Dia" size="1" required="required" style="width: 50px">
				<input type="number" name="mes" placeholder="Mes" size="1" required="required" style="width: 50px">
				<input type="number" name="hor" placeholder="Hora" size="1" required="required" style="width: 50px">
				<input type="number" name="min" placeholder="Min" size="1" required="required" style="width: 50px">
			</div>
			<div class="boton" onclick="popup(1,'seguro')">Enviar</div>
			<?php echo "<div class=\"botonAzul\" onclick=\"window.location='base/hacerchat.php?ven=$idVendedor'\">";?>Contactar</div>
			<div class="datosLocal">
				<div style="height: 50px"></div>
				<div class="ubicacion">Ubicación: <p><?php echo $ubicacion; ?></p></div>
				<div class="telefono">Telefono: <p><?php echo $telefono; ?></p></div>
				<div class="calificacion"><p>Calificacion del vendedor</p>
		   	 		<?php calificacionaMostrar($calificacion);?>
			</div>
			
		</div>
