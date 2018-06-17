<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\barraInicio.css">
	<link rel="stylesheet" type="text/css" href="..\css\agregarCuentas.css">
	<script type="text/javascript" src="..\..\javaScript\general.js"></script>
	<script type="text/javascript" src="..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesAdministrador.js"></script>
	<meta charset="utf-8">
</head>
<body>
<?php include '..\paginas\barraInicio.php'; ?>
<div class="contenido">
	<div class="informacionComerciantes">
		<form method="POST" action="base\agregarComerciante.php" name="f1">
		<p>Nombre</p>
		<input type="text" name="nombre" size="30" required="required">
		<p>Telefono</p>
		<input type="text" name="telefono" required="required">
		<p>Contraseña</p>
		<input type="password" name="contrasena" required="required" id="contrasena">
		<p>Confirmar contraseña</p>
		<input type="password" name="contrasenaC" required="required" id="contrasenaC">
		<p>Ubicacion</p>
		<input type="text" name="ubicacion" size="40" required="required"><br>
		<input type="submit" value="Guardar" class="boton">
		</form>
	</div>
	<div class="imagenCuenta"><img src=<?php echo "http://servicioss.gearhostpreview.com/img/$foto"; ?>></div>
</div>
<script type="text/javascript">
	$(".comerciantes p").css({"background-color":"#fffade", "color":"#af5145"});	
	function verifi() {
		if ($(#contrasena).val()==$(#contrasenaC).val()) {
			document.f1.submit(); 
		}
		else{
			popup(1,"popupNo",1);
		}
	}
</script>
</body>