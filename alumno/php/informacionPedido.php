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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesEstudiante.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<?php include '..\paginas\primeraBarra.php';
	  include '..\paginas\segundaBarra.html'; 
	  include '..\..\paginas\emergentes.html';?>
	<form method="post" action="base/informacionPedidoF.php">
		<?php include_once 'base/informacionPedido.php';?>
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
	<script type="text/javascript">
			vista("pedidos");
			imprimirValor();	
			function imprimirValor(){
 			 var resultado = document.getElementById("producto").value;
			 var parte = resultado.split(',');

			 var foto = "http://servicioss.gearhostpreview.com/img/"+parte[3]+".jpg";
			  document.getElementById("precio").innerHTML = parte[0];
			  document.getElementById("des").innerHTML = parte[1];
			  document.getElementById("foto").src = foto;
			}		
	</script>
</body>
</html>