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
<?php include '..\paginas\barraInicio.php';
	  include 'base/consultasUsuarios.php'; 
	  $x = array();
	  $id = $_GET['i'];
	  settype($id,'integer');
	  $x = consultaDetalleVendedor($id);
	  $nombre =$x['nombre'];
	  $tele= $x['telefono'];
	  $ubica=$x['ubicacion'];
	  $foto = $x['foto'].".jpeg2wbmp(jpegname, wbmpname, dest_height, dest_width, threshold)";
?>

<div class="contenido">
	<div class="informacionComerciantes">
		<h2>Nombre</h2>
		<h3><?php echo $nombre;?></h3>
		<h2>Telefono</h2>
		<h3><?php echo $tele;?></h3>
		<h2>Ubicacion</h2>
		<h3><?php echo $ubica;?></h3>
		<form action="base/bloquear.php" method="POST">
		<input type="" id="id" name="id" style="display: none;" value=<?php echo $id; ?>>
		<?php if($x['estado']==1){
			echo "<input type=\"submit\" value=\"Bloquear\" class=\"boton\">";
			echo "<input name=\"estado\" id=\"estado\" style=\"display: none;\" value=0>";
		}else{
			echo "<input name=\"estado\" id=\"estado\" style=\"display: none;\" value=1>";
			echo "<input type=\"submit\" value=\"Desbloquear\" class=\"boton\"  style=\"width: 150px\">";
		}?>
	</div></form>
	<div class="imagenCuenta"><img src=<?php echo "http://servicioss.gearhostpreview.com/img/$foto"; ?>></div>
</div>
<script type="text/javascript">
	$(".comerciantes p").css({"background-color":"#fffade", "color":"#af5145"});
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