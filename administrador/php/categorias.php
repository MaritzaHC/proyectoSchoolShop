<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\barraInicio.css">
	<link rel="stylesheet" type="text/css" href="..\css\categorias.css">
	<script type="text/javascript" src="..\..\javaScript\general.js"></script>
	<script type="text/javascript" src="..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesAdministrador.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<?php include '..\paginas\barraInicio.php'; 
	include '..\..\paginas\emergentes.html';
	include 'base/consultasAdmin.php'; ?>
<div class="contenido">
	<div class="listadoCategorias">
		<form action="base/categoriasB.php" method="POST">
		<p>Listado de categorias</p>
		<?php 
		$x = categorias();
		foreach ($x as $are) {
		?>
		<div class="cuadro">
			<div class="categoria">
				<p><?php echo $are["nombre"]; ?></p>
				<img  onclick="popup(1,'seguro',0)" onmouseenter="valor(<?php echo $are["idCategorias"];?>)" src="..\..\imagenes/basura.png">
			</div>
		</div>
	<?php } ?>
	</div>
	<div id="seguro">
	<div class="popup-contenedor">
		<p>¿Esta seguro de eliminar esta categoria?</p>
		<br>
		<input type="" name="id" id="idCa" value="" style="display: none;">
		<input type="submit" value="Aceptar" class="boton">
		<div class="botonAzul" onclick="popup(2,'seguro')">Cancelar</div>
		<br>
	</div></div>
	</form>

	<form name="publica" method="post" action="base/categorias.php">
	<div class="agregarCategoria">
		<p>Nombre de la categoria</p>
		<input type="text" name="filtro"><br>
		<input type="submit" class="boton" value="Agregar">
	</div>
	</form>
</div>
<script type="text/javascript">
	$(".categorias p").css({"background-color":"#fffade", "color":"#af5145"});	
	function valor(laid){
		$("#idCa").val(laid);
	}
</script>
</body>