<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\cuenta.css">
	<script type="text/javascript" src="..\..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\..\javaScript\general.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesEstudiante.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<?php include '..\paginas\primeraBarra.php'; 
	include '..\..\paginas\emergentes.html';?>
<div class="contenido">
	<?php include '..\paginas\menui.html'; ?>
	<form name="publica" method="post" action="base/cuentaF.php">
	<div class="perfil">
		<div class="primero">
			<div class="imagenPerfil">
				<div class="imagen"><output id="list"><img src="niche.jpg"></output></div>
				<div class="agregar"><input type="file" id="files" name="files[]" value=" " /></div>
			</div>
			<script type="text/javascript">
			function archivo(evt) {
				var evento = evt;
				ar(evento);
			}
	        document.getElementById('files').addEventListener('change', archivo, false);
	      </script>

			<?php include "base/cuenta.php"; ?>
			<p style="margin-top: 15px">Antigua contraseña</p>
			<input type="password" name="Acontrasena" size="15">
			<p style="margin-top: 15px">Nueva contraseña</p>
			<input type="password" name="Ncontrasena" size="15">
			<p style="margin-top: 15px">Confirmar contraseña</p>
			<input type="password" name="Ccontrasena" size="15">
			<br>
			<div class="boton" onclick="popup(1,'seguro',0)">Guardar</div>
		</div>
		<div id="seguro">
		   <div class="popup-contenedor">
		      <p>¿Esta seguro de realizar los cambios?</p><br>
		      <input type="submit" value="Aceptar" class="boton">
		      <div class="botonAzul" onclick="popup(0,'seguro',0)">Cancelar</div><br>
		   </div>
		</div>
		</form>
		
	</div>
</div>
</body>