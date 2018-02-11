<!DOCTYPE html>
<html>
<head>
	<title>SchoolShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\categorias.css">
	<link rel="stylesheet" type="text/css" href="..\css\muestraInicio.css">
	<script type="text/javascript" src="..\..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesEstudiante.js"></script>
	<meta charset="utf-8">
</head>
<body>
<?php include '..\paginas\primeraBarra.html';
	  include '..\paginas\segundaBarra.html'; ?>

		<div id="opcompras">
			<div class="categorias"><p>Categorias<br></p>
				<!-- PENDIENTE PHP -->
			</div>
			<!-- TEMPORAL -->
			<div class="productos" onclick="informacionCompra()">
				<img src="b.jpg">
				<div class="info">
					<div class="titulo">
						<p>Titulo lsdlisdjsdlvjlskvlks</p>
					</div>
					<div class="precio">
						<p>$0.00</p>
					</div>
				</div>
			</div>
		</div>
		<div id="oppedidos">
			<div class="productos" onclick="informacionOferta()">
				<img src="na.jpg">
				<div class="info">
					<div class="titulo">
						<p>Titulo soy una oferta</p>
					</div>
					<div class="precio">
						<p>$0.00</p>
					</div>
				</div>
			</div>
			<div class="productos" onclick="informacionPedido()">
				<img src="ga.jpg">
				<div class="info">
					<div class="titulo">
						<p>Titulo soy un pedido</p>
					</div>
					<div class="descripcion">
						<p>Pequeña descripcion</p>
					</div>
				</div>
			</div>
		</div>
		<div id="opobjetos">
			<div class="productos" onclick="informacionObjeto()">
				<img src="aa.jpg">
				<div class="info">
					<div class="titulo">
						<p>Titulo lsdlisdjsdlvjlskvlks</p>
					</div>
				</div>
			</div>
		</div>
		<!-- FIN TEMPORAL -->
		<script type="text/javascript">
			var id="compras";
			vista(id);
		</script>
</body>
</html>
	