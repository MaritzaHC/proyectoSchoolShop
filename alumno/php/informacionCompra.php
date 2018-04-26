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
	  include '..\..\paginas\emergentes.html';
	  ?>
 
	<div class="categorias"><h3>Categorias<h3></div>

	<form method="get" action="base/informacionCompra2.php" name="este">
		<?php include_once 'base/informacionCompra.php';?>	
		
	<div id="seguro">
	   <div class="popup-contenedor">
	      <p>¿Esta seguro de realizar esta compra?</p>
	      <input type="submit" value="Aceptar" class="boton">
	      <input type="" name="este" style="display: none;">
	      <script type="text/javascript">
					var x = variable("id");
			 		document.este.este.value = x;
		   </script>
	      <div class="botonAzul" onclick="popup(2,'seguro')">Cancelar</div>
	   </div>
	</div>
	</form>	

	<form method="get" action="base/informacionCompra3.php" name="id">
	<div class="reportar">
		<div class="boton" onclick="popup(1,'razones');"><img src="..\..\imagenes\reportar.png"><p>Reportar</p></div>
	</div>

	<div id="razones">
	   <div class="popup-contenedor">
	      <div class="popup-cerrar" onclick="popup(2,'razones',0)">X</div>
	      <p>Seleccione la razon</p>
	         <input type="checkbox" name="razon" value="1,Lenguaje inapropiado">Lenguaje inapropiado <br><br>
	         <input type="checkbox" name="razon" value="2,La foto no coincide con la descripcion">La foto no coincide con la descripcion <br><br>
	         <input type="checkbox" name="razon" value="3,La descripcion no coincide con la foto">La descripcion no coincide con la foto <br><br>
	         <input type="checkbox" name="razon" value="4,No corresponden las categorias">No corresponden las categorias <br><br>
	         <input type="checkbox" name="razon" value="5,El precio no es razonable">El precio no es razonable <br><br>

			<input type="submit" value="Enviar" class="boton">
	      	<input type="" name="id" style="display: none;">
		    <script type="text/javascript">
						var x = variable("id");
				 		document.id.id.value = x;
			</script>

	   </div>
	</div>
	</form>

	<script type="text/javascript">
			vista("compras");
			$(".razones").css("display","none");
	</script>
</body>
</html>