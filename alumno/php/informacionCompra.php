<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\categorias.css">
	<link rel="stylesheet" type="text/css" href="..\css\muestraInicio.css">
	<link rel="stylesheet" type="text/css" href="..\css\informacionCompra.css">
	<script type="text/javascript" src="..\..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\..\javaScript\general.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesEstudiante.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<?php include '..\paginas\primeraBarra.html';
	  include '..\paginas\segundaBarra.html'; 
	  include '..\..\paginas\emergentes.html';?>

	<div class="categorias"><p>Categorias<br></p>
				<!-- PENDIENTE PHP -->
	</div>
	<div class="imagen"><img src="b.jpg"></div>
	<div class="datos">
		<div class="titulo"><p>Pendiente PHP</p></div>
		<div class="descripcion"><p>Mas pendientes para la base de datps</p></div>
		<div class="precio"><p>0.00 $</p></div>
		<div class="boton" onclick="popup(1,'seguro')">PHPcompra</div>
		<div class="botonAzul">PHPchats</div><br><br><br>
		<div class="calificacion"><p>Calificacion del vendedor</p>
	   	 <div class="estrellas">
	   	 	<img src="..\..\imagenes\estrellaL.png">
	   	 	<img src="..\..\imagenes\estrellaL.png">
	   		<img src="..\..\imagenes\estrellaL.png">
	   		<img src="..\..\imagenes\estrellaL.png">
			<img src="..\..\imagenes\estrellaB.png"></div></div>
	</div>
	<div class="reportar">
		<div class="boton" onclick="popup(1,'razones');"><img src="..\..\imagenes\reportar.png"><p>Reportar</p></div>
		
	</div>
	<script type="text/javascript">
			vista("compras");
			$(".razones").css("display","none");
	</script>
</body>
</html>