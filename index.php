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
	<div id="datos">
		<div class="nombre"><input type="text" name="nombre" size="20"></div>
		<div class="contrasena"><input type="password" name="contrasena" size="20"></div>
		<div class="boton">Ingresar</div>
		<div class="olvidar"><p>Recuperar contraseña</p></div>
		<div class="ej" onclick="window.location='alumno/php/inicio.php?i=compras'">alumno</div>
		<div class="ej" onclick="window.location='almacenista/php/notificaciones.php'">almacenista</div>
		<div class="ej" onclick="window.location='administrador/php/notificaciones.php'">administrador</div>
	</div>
	</div>
</div>
</body>
</html>