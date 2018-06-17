<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\nuevoObjeto.css">
	<script type="text/javascript" src="..\..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\..\javaScript\general.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesAlmacenista.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<?php include '..\paginas\barraInicio.php';
		  include 'consultas.php'; ?>
<div class="contenido">
	<?php include '..\paginas\menu.html'; ?>
	<form action="publicar.php" method="POST" enctype="multipart/form-data">
	<div class="imagenp" style="background-color: green;">
		<output id="list"><img src="pay.jpg"></output>
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
	<div class="titulo"><input type="text" name="titulo"  placeholder="Titulo de la publicacion"></div>
		<div class="descripcion">
			<p>Descripcion</p><br>
			<textarea name="descripcion" rows="7" cols="60"></textarea>
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
</div></form>

</body>
<script type="text/javascript">
	function quitar(){$("#seguro").css({"display": "none"});}
	</script>
</html>