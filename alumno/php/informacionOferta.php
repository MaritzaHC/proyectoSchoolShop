<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\primeraBarra.css">
	<link rel="stylesheet" type="text/css" href="..\css\segundaBarra.css">
	<link rel="stylesheet" type="text/css" href="..\css\informacionPedido.css">
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
	<div class="imagenn"><img src="na.jpg"></div>
	<div class="datosPedido" style="width: 40%">
	<div class="titulo"><p>Titulo del local</p></div>
		<div class="descripcion">
			<p>Descripcion</p>
			<div class="texto">El veloz murciélago hindú comía feliz cardillo y kiwi. La cigüeña tocaba el saxofón detrás del palenque de paja.  
El pingüino Wenceslao hizo kilómetros bajo exhaustiva lluvia y frío, añoraba a su querido cachorro.</div>
		</div>
		<div class="cantidad">
			<p>Cantidad</p>
			<input type="text" name="" size="3">
		</div>
		<div class="precio">
			<p>Precio</p>
			<p id="precio">auto %</p>
		</div>
		<div class="dia">
			<p>Fecha</p>
			<input type="text" name="dia" placeholder="Dia" size="1">
			<input type="text" name="mes" placeholder="Mes" size="1">
			<input type="text" name="hor" placeholder="Hora" size="1">
			<input type="text" name="min" placeholder="Min" size="1">
		</div>
		<div class="boton">Enviar</div>
		<div class="botonAzul">Contactar</div>
		<div class="datosLocal">
			<div style="height: 50px"></div>
			<div class="ubicacion"><p>ubicacion</p></div>
			<div class="telefono"><p>Telefono</p></div>
			<div class="calificacion"><p>Calificacion del vendedor</p>
	   	 		<div class="estrellas">
		   	 	<img src="..\..\imagenes\estrellaL.png">
		   	 	<img src="..\..\imagenes\estrellaL.png">
		   		<img src="..\..\imagenes\estrellaL.png">
		   		<img src="..\..\imagenes\estrellaL.png">
				<img src="..\..\imagenes\estrellaB.png"></div></div>
		</div>
		
	</div>

	<script type="text/javascript">
			vista("pedidos");			
	</script>
</body>
</html>