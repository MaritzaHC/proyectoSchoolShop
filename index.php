
<!DOCTYPE html>
<html>
	<link rel="stylesheet" type="text/css" href="css\general.css">
	<link rel="stylesheet" type="text/css" href="css\login.css">
	<meta charset="utf-8">
<head>
	<title>SchoolShop</title>
</head>
<body>
<div id="con">
	<div class="conn">
	<br>
	<div id="datos">
		<form name="ingreso" method="post" action="Consultas/ingreso.php">
			<p>Usuario</p>
		<div class="nombre"><input type="text" name="nombre" size="20" required="required" placeholder="Usuario"></div>
		<p>Contreseña</p>
		<div class="contrasena"><input type="password" name="contrasena" size="20" placeholder="Contraseña" required="required"></div>
		<input class="boton" type="submit" name="publicar" value="Ingresar">
		<div class="olvidar" onclick="window.location='Recuperar.html'"><p>Recuperar contraseña</p></div>
		</form>
	</div>
	</div>
</div>
</body>
</html>