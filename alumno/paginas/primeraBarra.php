<link rel="stylesheet" type="text/css" href="..\css\primeraBarra.css">
<link rel="stylesheet" type="text/css" href="..\css\responsi.css">
<?php include '..\php\base\verificacionLogin.php'; ?>
<div id="inicio">
		<div class="logo">
			<img src="..\..\imagenes\logo.png" onclick="iniOtra('compras')">
			<p onclick="iniOtra('compras')">SchoolShop</p>
		</div>
		<div class="cerrar" onclick="salir()"><a href="../php/base/salir.php">Salir</a></div>
		<div class="notificacion">
			<img src="..\..\imagenes\campana.png" onclick="nuevasPaginas('notificaciones')">
		</div>
		<div class="cuenta" onclick="nuevasPaginas('menuMiCuenta')">
			<img src="..\..\imagenes\cuenta.png">
		</div>
		<div class="publicar" onclick="nuevasPaginas('publicacion')"><p>Publicar</p></div>
		<div class="barraBuscar">
			<form method="get" action="inicio.php" name="gg">
				<script type="text/javascript">
					var x = variable("i");
			 		if(x==false) x="compras";
			 	</script>
				<input type="text" name="buscar" class="buscar">
				<img src="..\..\imagenes\buscar.png">
				<input type="submit" name="i" class="botonbuscar">
				<script>document.gg.i.value = x;</script>
			</form>
		</div>
	</div>