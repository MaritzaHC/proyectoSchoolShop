<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\barraInicio.css">
	<link rel="stylesheet" type="text/css" href="..\css\configuracion.css">
	<script type="text/javascript" src="..\..\javaScript\general.js"></script>
	<script type="text/javascript" src="..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesAdministrador.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<?php include '..\paginas\barraInicio.php'; 
	include '..\..\paginas\emergentes.html'; ?>
<div class="contenido">
	<div class="base">
		<form method="POST" action="base/configuracionB.php">
			<h1>Datos de la base de datos de la escuela</h1>
			<p>Servidor</p>
			<input type="text" name="Servidor" required="required">
			<p>Nombre de la base de datos</p>
			<input type="text" name="nombreBase" required="required">
			<p>Nombre del usuario de la base de datos</p>
			<input type="text" name="usuarioBase" required="required">
			<p>Contraseña de la base de datos</p>
			<input type="password" name="contrasena" required="required">
			<p>Confirmar contraseña de la base de datos</p>
			<input type="password" name="contrasenaC" required="required">
			<p>Nombre de la tabla de alumnos</p>
			<input type="text" name="tabla" required="required">
			<p>Nombre del campo del registro del alumno</p>
			<input type="text" name="id" required="required">
			<p>Nombre del campo del nombre del alumo</p>
			<input type="text" name="alumnoNom" required="required">
			<p>Nombre del campo del apellido paterno del alumo</p>
			<input type="text" name="alumnoPa" required="required">
			<p>Nombre del campo del apellido materno del alumo</p>
			<input type="text" name="alumnoMa" required="required">
			<p>Nombre del campo del correo del alumo</p>
			<input type="text" name="alumnoCo" required="required">
			<input type="submit" value="Guardar" class="boton">
		</form>
	</div>
	<div class="semestre">
		<form method="POST" action="base/configuracionS.php">
			<h1>Datos del semestre*</h1>
			<p>Inicio del semestre</p>
			<input type="date" name="iniSe" step="1" min="2018-01-01" required="required">
			<p>Fin del semestre</p>
			<input type="date" name="finSe" step="1" min="2018-01-01" required="required">
			<input type="submit" value="Guardar" class="boton"><br><br><br>
			<p class="detalles">*Esta configuracion se tiene que hacer una semana antes del inico del semestre	 para el buen funcionamiento del sitema</p>
		</form>
	</div>
	
</div>
<script type="text/javascript">
	$(".configuracion p").css({"background-color":"#fffade", "color":"#af5145"});	
</script>
</body>