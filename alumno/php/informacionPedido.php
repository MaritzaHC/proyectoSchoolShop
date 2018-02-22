<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\categorias.css">
	<link rel="stylesheet" type="text/css" href="..\css\muestraInicio.css">
	<link rel="stylesheet" type="text/css" href="..\css\informacionPedido.css">
	<script type="text/javascript" src="..\..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\..\javaScript\general.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesEstudiante.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<?php include '..\paginas\primeraBarra.html';
	  include '..\paginas\segundaBarra.html'; 
	  include '..\..\paginas\emergentes.html';?>

	<div class="imagenn"><img src="ga.jpg"></div>
	<div class="datosPedido">
	<div class="titulo"><p>Titulo del local</p></div>
		<div class="producto">
			<p>Productos</p>
			<select name="producto">
				<option>algo</option>
				<option>php</option>
				<option>:(</option>
			</select>
		</div>
		<div class="cantidad">
			<p>Cantidad</p>
			<input type="text" name="" size="3">
		</div>
		<div class="precio">
			<p>Precio</p>
			<p id="precio">auto %</p>
		</div>
		<div class="dia">
			<p>Fecha</p>
			<input type="text" name="dia" placeholder="Dia" size="1">
			<input type="text" name="mes" placeholder="Mes" size="1">
			<input type="text" name="hor" placeholder="Hora" size="1">
			<input type="text" name="min" placeholder="Min" size="1">
		</div>
		<div class="boton" onclick="popup(1,'seguro')">Enviar</div>
		<div class="botonAzul">Contactar</div>
		<div class="datosLocal">
			<div style="height: 50px"></div>
			<div class="ubicacion"><p>ubicacion</p></div>
			<div class="telefono"><p>Telefono</p></div>
			<div class="calificacion"><p>Calificacion del vendedor</p>
	   	 		<div class="estrellas">
		   	 	<img src="..\..\imagenes\estrellaL.png">
		   	 	<img src="..\..\imagenes\estrellaL.png">
		   		<img src="..\..\imagenes\estrellaL.png">
		   		<img src="..\..\imagenes\estrellaL.png">
				<img src="..\..\imagenes\estrellaB.png"></div></div>
		</div>
		
	</div>

	<script type="text/javascript">
			vista("pedidos");			
	</script>
</body>
</html>