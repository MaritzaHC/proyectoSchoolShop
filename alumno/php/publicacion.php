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
	 ?>

	<form name="publica" method="post" action="base/publicacion.php" enctype="multipart/form-data">

	<div class="imagenp" style="background-color: green;">
		<output id="list"><img src="pay.jpg"></output>
		<div class="imagen"><input type="file" id="files" name="imagen" value=" " required="required"/></div>
	</div>
	 <script type="text/javascript">
		function archivo(evt) {
			var evento = evt;
			ar(evento);
		}
        document.getElementById('files').addEventListener('change', archivo, false);
      </script>
  
	<div class="datosPublica" style="width: 40%">

	<div class="titulo"><input type="text" name="titulo"  placeholder="Titulo de la publicacion" required="required"></div>

		<div class="descripcion">
			<p>Descripcion</p><br>
			<textarea name="descripcion" rows="7" cols="60" required="required"></textarea>
		</div>

	<div class="tipos">
		<p>Tipos</p><br>
		<input type="radio" name="tipo" value=1 onclick="vistaTipos('venta')">Venta
		<input type="radio" name="tipo" value=2 onclick="vistaTipos('objeto')">Objeto Perdido
		<br>
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
		<input type="number" name="precio" size="3"><br><br>	
		<div class="boton" onclick="popup(1,'seguro',0)">Publicar</div>
	</div>
	<div class="objeto">
		<p>¿Donde lo dejo?</p>
		<select name="donde">
				<?php
					lugares();
				?>
		</select><br><br>
		<div class="boton" onclick="popup(1,'seguro',0)">Publicar</div>
	</div>
	</div>

	<div id="seguro">
	   <div class="popup-contenedor">
	      <p>¿Esta seguro de realizar esta publicación?</p>
	      <input type="submit" value="Aceptar" class="boton">
	      <div class="botonAzul" onclick="quitar()">Cancelar</div>
	   </div>
	</div>
	</form>
</body>
<script type="text/javascript">
	$(".datosPublica .venta").css("display","none");
	$(".datosPublica .objeto").css("display","none");
	$(".imagenp .bloqueado").css("display","none");
	function quitar(){$("#seguro").css({"display": "none"});}
	</script>
</html>