<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\primeraBarra.css">
	<link rel="stylesheet" type="text/css" href="..\css\segundaBarra.css">
	<link rel="stylesheet" type="text/css" href="..\css\informacionCompra.css">
	<link rel="stylesheet" type="text/css" href="..\css\categorias.css">
	<script type="text/javascript" src="..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesEstudiante.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<div id="inicio">
		<div class="logo">
			<img src="..\..\imagenes\logo.png" onclick="ini()">
			<p onclick="ini()">SchoolSop</p>
		</div>
		<div class="notificacion">
			<img src="..\..\imagenes\campana.png" onclick="notifica()">
		</div>
		<div class="cuenta" onclick="cuenta()">
			<img src="..\..\imagenes\cuenta.png">
			<p>Mi cuenta</p>
		</div>
		<div class="publicar" onclick="publica()"><p>Publicar</p></div>
		<div class="barraBuscar">
			<input type="text" name="">
			<img src="..\..\imagenes\buscar.png"><!--PENDIENTE PHP-->
		</div>
	</div>
	<div id="opciones">
		<div class="objetos" tabindex="0" onclick="iniOtra('objetos');"><p>Objetos perdidos</p></div>
		<div class="pedidos" tabindex="1" onclick="iniOtra('pedidos');"><p>Pedidos</p></div>
		<div class="compras" tabindex="2" onclick="iniOtra('compras');"><p>Compras</p></div>
	</div>

	<div class="categorias"><p>Categorias<br></p>
				<!-- PENDIENTE PHP -->
	</div>
	<div class="imagen"><img src="b.jpg"></div>
	<div class="datos">
		<div class="titulo"><p>Pendiente PHP</p></div>
		<div class="descripcion"><p>Mas pendientes para la base de datps</p></div>
		<div class="precio"><p>0.00 $</p></div>
		<div class="boton">PHPcompra</div>
		<div class="botonAzul">PHPchats</div><br><br><br>
		<div class="calificacion"><p>Calificacion del vendedor</p>
	   	 <div class="estrellas">
	   	 	<img src="..\..\imagenes\estrellaL.png">
	   	 	<img src="..\..\imagenes\estrellaL.png">
	   		<img src="..\..\imagenes\estrellaL.png">
	   		<img src="..\..\imagenes\estrellaL.png">
			<img src="..\..\imagenes\estrellaB.png"></div></div>
	</div>
	<div class="reportar">
		<div class="boton" onclick="reportar();"><img src="..\..\imagenes\reportar.png"><p>Reportar</p></div>
		<div class="razones"><p>Seleccione la razon</p>
			<input type="checkbox" name="razon" value="1">Lenguaje inapropiado <br>
			<input type="checkbox" name="razon" value="2">La foto no coincide con la descripcion <br>
			<input type="checkbox" name="razon" value="3">La descripcion no coincide con la foto <br>
			<input type="checkbox" name="razon" value="5">No corresponden las categorias <br>
			<input type="checkbox" name="razon" value="6">El precio no es razonable	<br>
			<button>Enviar</button>
		</div>
	</div>
	<script type="text/javascript">
			vista("compras");
			$(".razones").css("display","none");
	</script>
</body>
</html>