
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
	<div id="imagen"><img src=""></div>
	<br>
	<form name="ingreso" method="post" action="Consultas/ingreso.php">
	<div id="datos">
		<div class="nombre"><input type="text" name="nombre" size="20" required="required" placeholder="Nombre de Usuario"></div>
		<div class="contrasena"><input type="password" name="contrasena" size="20" placeholder="Contraseña" required="required"></div>
		<input class="boton" type="submit" name="publicar" value="Ingresar">
		<div class="olvidar"><p>Recuperar contraseña</p></div>
		<div class="ej" onclick="window.location='almacenista/php/notificaciones.php'">almacenista</div>
		<div class="ej" onclick="window.location='administrador/php/notificaciones.php'">administrador</div>
	</form>
	</div>
	</div>
</div>
</body>
</html>