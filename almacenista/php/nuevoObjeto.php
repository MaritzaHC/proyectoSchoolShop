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
	<?php include '..\paginas\barraInicio.html'; ?>
<div class="contenido">
	<?php include '..\paginas\menu.html'; ?>

	<div class="imagenp">
		<output id="list"><img src="pay.jpg"></output>
		<div class="imagen"><input type="file" id="files" name="files[]" value=" " /></div>
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
		<div class="boton">Publicar</div>
	</div>
</div>

</body>