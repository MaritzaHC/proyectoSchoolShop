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
	<?php include_once '..\paginas\primeraBarra.php'; 
	include_once 'base\consultasProductos.php';
	include_once 'base/inicio.php';
	$resul = array(); 
	$laid = $_GET["id"];
	$resul = objetosDeta($laid);

	    $titulo = $resul['titulo'];
	    $id = $resul['idObjetoPerdido'];
	    $descripcion = $resul['descripcion'];
	 ?>

	<form name="publica" method="post" action="base/ObjetoModificacion.php">
	<input type="" name="id" style="display: none;" value="<?php echo $laid; ?>">
	<div class="imagenp" style="background-color: green;">
		<output id="list"><img src="pay.jpg"></output>
		<div class="bloqueado"><p>Bloqueado</p></div>
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

	<div class="objeto">
		<p>¿Donde lo dejo?</p>
		<select name="donde">
				<?php
					lugares();
				?>
		</select><br><br>
	</div>
	<div class="boton" onclick="popup(1,'seguro',0)">Publicar</div>
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
	$(".imagenp .bloqueado").css("display","none");
	function quitar(){$("#seguro").css({"display": "none"});}
	</script>
</html>