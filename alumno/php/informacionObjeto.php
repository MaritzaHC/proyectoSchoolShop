<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\categorias.css">
	<link rel="stylesheet" type="text/css" href="..\css\muestraInicio.css">
	<link rel="stylesheet" type="text/css" href="..\css\informacionObjeto.css">
	<script type="text/javascript" src="..\..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\..\javaScript\general.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesEstudiante.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<?php include '..\paginas\primeraBarra.php';
	  include '..\paginas\segundaBarra.html'; 
	  include '..\..\paginas\emergentes.html';?>

	<form method="post" action="base/informacionObjetoF.php" name="este">
		<?php include 'base/informacionObjeto.php'; ?>

			<div class="botonAzul" onclick="popup(1,'seguro',0)">Contactar</div>

		<div id="seguro">
		   <div class="popup-contenedor">
		      <p>¿Esta seguro de pedir este objeto?</p>	
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
	</div>

	<script type="text/javascript"> 
			vista("objetos");			
	</script>
</body>
</html>