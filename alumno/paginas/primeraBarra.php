<link rel="stylesheet" type="text/css" href="..\css\primeraBarra.css">
<link rel="stylesheet" type="text/css" href="..\css\responsi.css">
<?php include '..\php\base\verificacionLogin.php'; ?>
<div id="inicio">
		<div class="logo">
			<img src="..\..\imagenes\logo.png" onclick="window.location='inicio.php?i=compras&pag=1'">
			<p onclick="window.location='inicio.php?i=compras&pag=1'">SchoolShop</p>
		</div>
		<div class="cerrar" onclick="salir()"><a href="../php/base/salir.php">Salir</a></div>
		<div class="notificacion">
			<img src="..\..\imagenes\campana.png" onclick="window.location='notificaciones.php'">
		</div>
		<div class="cuenta" onclick="window.location='menuMiCuenta.php'">
			<img src="..\..\imagenes\cuenta.png">
		</div>
		<div class="publicar" onclick="window.location='publicacion.php'"><p>Publicar</p></div>
		<div class="barraBuscar">
			<form method="get" action="inicio.php" name="gg">
				<script type="text/javascript">
					var bus = variable("i");
			 		if(bus==false) bus="compras";
			 	</script>
				<input type="text" name="buscar" class="buscar">
				<img src="..\..\imagenes\buscar.png">
				<input type="submit" name="i" class="botonbuscar">
				<script>document.gg.i.value = bus;</script>
			</form>
		</div>
	</div>