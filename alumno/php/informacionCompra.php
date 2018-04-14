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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<?php include '..\paginas\primeraBarra.html';
	  include '..\paginas\segundaBarra.html'; 
	  include '..\..\paginas\emergentes.html';?>

	<div class="categorias"><p>Categorias<br></p>
				<!-- PENDIENTE PHP -->
	</div>
	<?php include'base/informacionCompra.php';?>
	
	<div class="reportar">
		<div class="boton" onclick="popup(1,'razones');"><img src="..\..\imagenes\reportar.png"><p>Reportar</p></div>
		
	</div>
	<script type="text/javascript">
			vista("compras");
			$(".razones").css("display","none");
	</script>
</body>
</html>