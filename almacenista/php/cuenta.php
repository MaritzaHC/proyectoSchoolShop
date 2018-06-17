<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\cuenta.css">
	<script type="text/javascript" src="..\..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\..\javaScript\general.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesAlmacenista.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<?php include '..\paginas\barraInicio.php'; 
	include 'consultas.php';?>
<div class="contenido">
	<?php include '..\paginas\menu.html'; ?>
	<div class="perfil">
		<form action="cuentaF.php" method="POST">
			<?php //@session_start(); 
				  @$_SESSION['username'];
				  settype($uu,'integer');

				  $resul = almacenistaConsultaDetalle($uu);
				  $foto = $resul['foto'];
				  $nombre = $resul['nombre'];
				  $Ubicacion = $resul['Ubicacion'];
				  ?>
		<div class="imagenPerfil">
			<output id="list"><img src=<?php echo "http://servicioss.gearhostpreview.com/img/$foto"; ?>></output>
			<div class="imagen"><input type="file" id="files" name="files" value=" " /></div>	
		</div>
		 <script type="text/javascript">
			function archivo(evt) {
				var evento = evt;
				ar(evento);
			}
	        document.getElementById('files').addEventListener('change', archivo, false);
	      </script>
		<div class="info">
			<p>Nombre lugar</p>
			<input type="text" name="nombre" value=<?php echo"$nombre";?>><br>
			<p>Ubicacion</p>
			<input type="text" name="ubicacion" value=<?php echo"$ubicacion";?>><br>
			<p style="margin-top: 15px">Antigua contraseña</p>
			<input type="password" name="Acontrasena" size="15">
			<p style="margin-top: 15px">Nueva contraseña</p>
			<input type="password" name="Ncontrasena" size="15">
			<p style="margin-top: 15px">Confirmar contraseña</p>
			<input type="password" name="Ccontrasena" size="15">
			<br><br>
			<div class="boton" onclick="popup(1,'seguro',0)">Guardar</div>
			<div id="seguro">
				   <div class="popup-contenedor">
				      <p>¿Esta seguro de realizar esta modificación?</p>
				      <input type="submit" value="Aceptar" class="boton">
				      <div class="botonAzul" onclick="quitar()">Cancelar</div>
				   </div>
			</div>
			</form>
		</div>
	</div>
<script type="text/javascript">
	function quitar(){$("#seguro").css({"display": "none"});}
</script>
</body>
</html>