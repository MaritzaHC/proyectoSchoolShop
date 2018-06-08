<?php 
require '../../nusoap/lib/nusoap.php';
$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";
function restri()
{
	global $wsdl;
	$client=new SoapClient($wsdl, true);
	$result=$client->call("consultaGeneralRestricciones")["consultaGeneralRestriccionesResult"];

	$cuantos = count($result["RestriccionesModelo"]);

	for ($i=0; $i < $cuantos; $i++) { 
		if($result["RestriccionesModelo"][$i]["idRestricciones"]==1){ ?>
			<div class="restriccion" style="margin-top: 45px">
			<?php estado($result["RestriccionesModelo"][$i]["estado"],1);?>
			<p>Por temporada, se dará un mes al inicio del semestre y al final para poder vender, el resto del tiempo no se podrá</p>
			</div>
		<?php }elseif ($result["RestriccionesModelo"][$i]["idRestricciones"]==2){?>
			<div class="restriccion">
			<?php estado($result["RestriccionesModelo"][$i]["estado"],2);?>
			<p>Solo se pueden vender útiles escolares </p>
			</div>
		<?php }elseif ($result["RestriccionesModelo"][$i]["idRestricciones"]==3){?>
			<div class="restriccion">
			<?php estado($result["RestriccionesModelo"][$i]["estado"],3);?>
			<p>Se tendrá un límite de publicaciones por semestre en la sección de ventas</p>
			<div class="opciones">
				<input type="radio" name="ventas" value="1">5
				<br>
				<input type="radio" name="ventas" value="2">10
				<br>
				<input type="radio" name="ventas" value="3">15
				<br>
				<input type="radio" name="ventas" value="3">20	
			</div>
			</div>
		<?php }elseif ($result["RestriccionesModelo"][$i]["idRestricciones"]==4){?>
			<div class="restriccion">
			<<?php estado($result["RestriccionesModelo"][$i]["estado"],4);?>
			<p>Por calificación mínima recibida del estudiante como vendedor (1 estrella)</p>
			</div>
		<?php }elseif ($result["RestriccionesModelo"][$i]["idRestricciones"]==5){?>
			<div class="restriccion">
			<?php estado($result["RestriccionesModelo"][$i]["estado"],5);?>
			<p>Por calificación mínima recibida del estudiante como comprador (1 estrella)</p>
			</div>
		<?php }elseif ($result["RestriccionesModelo"][$i]["idRestricciones"]==6){?>
		<div class="restriccion">
			<?php estado($result["RestriccionesModelo"][$i]["estado"],6);?>
			<p>Por calificación mínima del estudiante (requiere de permisos de la institución)</p>
		</div>
		<?php 
		}
	}
}

function estado($estado,$id)
{
	if($estado==0){
			echo "<div class=\"boton\" onclick=\"window.location='restricciones.php?id=$id&estado=1'\">Agregar</div>";
	}
	else{
			echo "<div class=\"botonAzul\"  onclick=\"window.location='restricciones.php?id=$id&estado=0'\">Quitar</div>";
	} 
}
function modifi($id,$estado)
{
	global $wsdl;
	settype($id, 'integer');
	settype($estado, 'integer');
	$client=new SoapClient($wsdl, true);
	$parametro = array('estado' => $estado, 'id' => $id);
	$result=$client->call("modificarRestricciones", $parametro)['modificarRestriccionesResult'];
}