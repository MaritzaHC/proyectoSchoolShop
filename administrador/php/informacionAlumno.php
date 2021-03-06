<!DOCTYPE html>
<html>
<head>
	<title>SchollShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\barraInicio.css">
	<link rel="stylesheet" type="text/css" href="..\css\informacionAlumno.css">
	<link rel="stylesheet" type="text/css" href="..\css\estadisticas.css">
	<script type="text/javascript" src="..\..\javaScript\general.js"></script>
	<script type="text/javascript" src="..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesAdministrador.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<?php include '..\paginas\barraInicio.php'; 
	include 'base/consultasUsuarios.php';
	include '../../ejem/grafi.php';
	include 'estrellas.php';
	  $x = array();
	  $id = $_GET['i'];
	  settype($id,'integer');
	  $x = @alumnosDeta($id);
	  $nombre =$x['nombre']." ".$x['apellidoP']." ".$x['apelldioM'];
	  $canV = $x['calificacionV'];
	  settype($canV, "integer");
	  $canC = $x['calificacionC'];
	  settype($canC, "integer");
?>
<div class="contenido">
	<div class="informacionAlumnos">
		<p>Nombre</p>
		<p><b><?php echo $nombre; ?></b></p>
		<p>Registro</p>
		<p><b><?php echo $id; ?></b></p>
		<p>Calificacion</p>
		<div class="calificacion">
			<div class="comprador">
				<p>Comprador</p>
	   	 		<?php calificacionaMostrar($canC);?>
			</div>
			<div class="vendedor">
				<p>Vendedor</p>
	   	 		<?php calificacionaMostrar($canV);?>
			</div>
		</div>
		<br><br><br><br><br>
		<form action="base/bloquear.php" method="POST">
		<input type="" name="id" id="id" style="display: none;" value=<?php echo $id; ?>>
		<?php if($x['estado']==1){
			echo "<input type=\"submit\" value=\"Bloquear\" class=\"boton\">";
			echo "<input name=\"estado\" id=\"estado\" style=\"display: none;\" value=0>";
		}else{
			echo "<input name=\"estado\" id=\"estado\" style=\"display: none;\" value=1>";
			echo "<input type=\"submit\" value=\"Desbloquear\" class=\"boton\"  style=\"width: 150px\">";
		}?>
	</div></form>
	<div class="estadisticasAlumno">
		<?php $mes =date("m");
		if($mes<=6){$periodo=2;}else {$periodo=8;}?>
		<div class="estadistica"><?php grafixAlumno($id,$periodo,1); ?></div>
		<div class="estadistica"><?php grafixAlumnoMala($id,$periodo,1); ?></div>
	</div>
</div>
<script type="text/javascript">
	$(".alumnos p").css({"background-color":"#fffade", "color":"#af5145"});	
	$("form").submit(function(e){
		e.preventDefault();
		var mid = document.getElementById("id").value;
		var mestado =  document.getElementById("estado").value;
		$.post(
			"base/bloquear.php",
			{
				id: mid,
				estado: mestado
			}).
			done(function(data){
				if(mestado == 0){
				 document.getElementById("estado").value = 1;
				 $(".boton").attr("value", "Desbloquear");	
				}
				else if(mestado == 1){
				 document.getElementById("estado").value = 0;
				 $(".boton	").attr("value", "Bloquear");	
				}
			});
	});
</script>
</body>