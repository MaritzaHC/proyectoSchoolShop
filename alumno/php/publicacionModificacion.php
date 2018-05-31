<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\categorias.css">
	<link rel="stylesheet" type="text/css" href="..\css\publicacion.css">
	<script type="text/javascript" src="..\..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\..\javaScript\general.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesEstudiante.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<?php include '..\paginas\primeraBarra.php'; 
	include_once 'base\consultasProductos.php';
	$resul = array(); 
	$laid = $_GET["id"];
	$resul = productosDeta($laid);

	    $titulo = $resul['titulo'];
	    $precio = $resul['precio'];
	    $_SESSION['idProductos
	    '] = $resul['idProductos'];
	    $descripcion = $resul['descripcion'];
	    $foto =  $resul['foto'];
	 ?>

	<form name="publica" method="post" action="base/publicacionModificacion.php">

	<input type="" name="id" style="display: none;" value="<?php echo $laid; ?>">
	<div class="imagenp" style="background-color: green;">
		<output id="list"><img src="pay.jpg"<?php $foto; ?>></output>
		<div class="imagen"><input type="file" id="files" name="files[]" value=" " required="required"/></div>
	</div>
	 <script type="text/javascript">
		function archivo(evt) {
			var evento = evt;
			ar(evento);
		}
        document.getElementById('files').addEventListener('change', archivo, false);
      </script>
  
	<div class="datosPublica" style="width: 40%">

	<div class="titulo"><input type="text" name="titulo"  required="required" placeholder="<?php echo $titulo; ?>" value="<?php echo $titulo; ?>" ></div>

		<div class="descripcion">
			<p>Descripcion</p><br>
			<textarea name="descripcion" rows="7" cols="60" required="required" placeholder="<?php echo $descripcion; ?>" value ="<?php echo $descripcion; ?>"></textarea>
		</div>

	<div class="venta">
		<p>Tiempo disponible </p>
		<select name="tiempoDisponible">
				<option value=1>1 semana</option>
				<option value=2>2 semanas</option>
		</select><br>

		<p>Categorias </p>
		<select name="categorias">
				<?php
					require 'base/inicio.php';
					categoria();
				?>
		</select><br>
		<p>Precio </p>
		<input type="number" name="precio" size="3" placeholder="<?php echo $precio; ?>" value ="<?php echo $precio; ?>"><br><br>	
		<div class="boton" onclick="popup(1,'seguro',0)">Modificar</div>
	</div>

	<div id="seguro">
	   <div class="popup-contenedor">
	      <p>¿Esta seguro de realizar este cambio en la publicación?</p>
	      <input type="submit" value="Aceptar" class="boton">
	      <div class="botonAzul" onclick="quitar()">Cancelar</div>
	   </div>
	</div>

	</form>
</body>
<script type="text/javascript">
	function quitar(){$("#seguro").css({"display": "none"});}
	</script>
</html>