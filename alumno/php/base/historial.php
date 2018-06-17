<?php
include 'consultasProductos.php';
function compras()
{
	$uu = @$_SESSION['username'];
	settype($uu,'integer');
	$x = array();
	$x = @historialMisCompras($uu,1);

	foreach ($x as $are) {
		$titulo = $are['titulo'];
		$precio = $are['precio'];
		$id = $are['idProductos'];
		$foto = $are['foto'].".jpg";

		if($are['estado']==2){
		    echo "<div class=\"curso\">
				<div class=\"foto\"> <img src=\"http://servicioss.gearhostpreview.com/img/$foto\"> </div>
				<div class=\"resumen\">
					<p>$titulo</p>
					<p style=\"font-family: sans-serif;\">$$precio</p>
				</div>
				<div class=\"detalles\" onclick=\"paraMenu($id,1)\">Ver detalles</div>
				<div class=\"boton\" id=\"curso\">En curso</div>
			</div>";
		}
		elseif ($are['estado']==3) {
			echo "<div class=\"curso\">
				<div class=\"foto\"> <img src=\"http://servicioss.gearhostpreview.com/img/$foto\"> </div>
				<div class=\"resumen\">
					<p>$titulo</p>
					<p style=\"font-family: sans-serif;\">$$precio</p>
				</div>
				<div class=\"detalles\" onclick=\"paraMenu($id,1)\">Ver detalles</div>
				<div class=\"boton\" id=\"curso\">Calificar</div>
			</div>";
		}
		elseif ($are['estado']==5) {
			echo "<div class=\"finalizado\">
				<div class=\"foto\"> <img src=\"http://servicioss.gearhostpreview.com/img/$foto\"> </div>
				<div class=\"resumen\">
					<p>$titulo</p>
					<p style=\"font-family: sans-serif;\">$$precio</p>
				</div>
				<div class=\"detalles\" onclick=\"paraMenu($id,1)\">Ver detalles</div>
				<div class=\"eliminar\"><img src=\"..\..\imagenes\basura.png\"></div>
				<div class=\"boton\" id=\"finalizado\">Finalizado</div>
			</div>";
		}
	}
}
function objetosPerdidos()
{
	$uu = @$_SESSION['username'];
	settype($uu,'integer');
	$x = array();
	$x = @historialObjetosPerdidos($uu);

	foreach ($x as $are) {
		$titulo = $are['titulo'];
		$id = $are['idObjetoPerdido'];
		$foto = $are['foto'].".jpg";

		if($are['estado']==1){
		    echo "<div class=\"curso\">
				<div class=\"foto\"> <img src=\"http://servicioss.gearhostpreview.com/img/$foto\"> </div>
				<div class=\"resumen\">
					<p style=\"margin-top: 10px\">$titulo</p>
				</div>
				<div class=\"detalles\" onclick=\"paraMenu($id,3)\">Ver detalles</div>
				<div class=\"boton\" id=\"publicado\">Publicado</div>
			</div>";
		}
		if($are['estado']==2){
		    echo "<div class=\"curso\">
				<div class=\"foto\"> <img src=\"http://servicioss.gearhostpreview.com/img/$foto\"> </div>
				<div class=\"resumen\">
					<p style=\"margin-top: 10px\">$titulo</p>
				</div>
				<div class=\"detalles\" onclick=\"paraMenu($id,3)\">Ver detalles</div>
				<div class=\"boton\" id=\"curso\">En curso</div>
			</div>";
		}
		if($are['estado']==3){
		    echo "<div class=\"finalizado\">
				<div class=\"foto\"> <img src=\"http://servicioss.gearhostpreview.com/img/$foto\"> </div>
				<div class=\"resumen\">
					<p style=\"margin-top: 10px\">$titulo</p>
				</div>
				<div class=\"detalles\" onclick=\"paraMenu($id,3)\">Ver detalles</div>
				<div class=\"boton\" id=\"finalizado\">Finalizado</div>
				<div class=\"eliminar\"><img src=\"..\..\imagenes\basura.png\"></div>
			</div>";
		}
	}
}

function ventas()
{
	$uu = @$_SESSION['username'];
	settype($uu,'integer');
	$x = array();
	$x = @historialMisVentas($uu);

	foreach ($x as $are) {
		$titulo = $are['titulo'];
		$id = $are['idProductos'];
		$foto = $are['foto'].".jpg";

		if($are['estado']==1){
		    echo "<div class=\"curso\">
				<div class=\"foto\"> <img src=\"http://servicioss.gearhostpreview.com/img/$foto\"> </div>
				<div class=\"resumen\">
					<p style=\"margin-top: 10px\">$titulo</p>
				</div>
				<div class=\"detalles\" onclick=\"paraMenu($id,2)\">Ver detalles</div>
				<div class=\"boton\" id=\"publicado\">Publicado</div>
			</div>";
		}
		if($are['estado']==4){
		    echo "<div class=\"curso\">
				<div class=\"foto\"> <img src=\"http://servicioss.gearhostpreview.com/img/$foto\"> </div>
				<div class=\"resumen\">
					<p style=\"margin-top: 10px\">$titulo</p>
				</div>
				<div class=\"detalles\" onclick=\"paraMenu($id,2)\">Ver detalles</div>
				<div class=\"boton\" id=\"publicado\">Bloqueado</div>
			</div>";
		}
		if($are['estado']==2){
		    echo "<div class=\"curso\">
				<div class=\"foto\"> <img src=\"http://servicioss.gearhostpreview.com/img/$foto\"> </div>
				<div class=\"resumen\">
					<p style=\"margin-top: 10px\">$titulo</p>
				</div>
				<div class=\"detalles\" onclick=\"paraMenu($id,1)\">Ver detalles</div>
				<div class=\"boton\" id=\"curso\">En curso</div>
			</div>";
		}
		if ($are['estado']==3) {
			echo "<div class=\"curso\">
				<div class=\"foto\"> <img src=\"http://servicioss.gearhostpreview.com/img/$foto\"> </div>
				<div class=\"resumen\">
					<p style=\"margin-top: 10px\">$titulo</p>
				</div>
				<div class=\"detalles\" onclick=\"paraMenu($id,1)\">Ver detalles</div>
				<div class=\"boton\" id=\"curso\">Calificar</div>
			</div>";
		}
		if($are['estado']==5){
		    echo "<div class=\"finalizado\">
				<div class=\"foto\"> <img src=\"http://servicioss.gearhostpreview.com/img/$foto\"> </div>
				<div class=\"resumen\">
					<p style=\"margin-top: 10px\">$titulo</p>
				</div>
				<div class=\"detalles\" onclick=\"paraMenu($id,1)\">Ver detalles</div>
				<div class=\"eliminar\"><img src=\"..\..\imagenes\basura.png\"></div>
				<div class=\"boton\" id=\"finalizado\">Finalizado</div>
			</div>";
		}
	}
}

function pedidos()
{
	$uu = @$_SESSION['username'];
	settype($uu,'integer');
	$x = array();
	$x = @historialMisCompras($uu,2);

	foreach ($x as $are) {
		$titulo = $are['titulo'];
		$precio = $are['precio'];
		$id = $are['idProductos'];
		$foto = $are['foto'].".jpg";
		if($are['estado']==2){
		    echo "<div class=\"curso\">
				<div class=\"foto\"> <img src=\"http://servicioss.gearhostpreview.com/img/$foto\"> </div>
				<div class=\"resumen\">
					<p>Titulo</p>
					<p style=\"font-family: sans-serif;\">Precio</p>
				</div>
				<div class=\"detalles\" onclick=\"paraMenu($id,6)\">Ver detalles</div>
				<div class=\"boton\" id=\"curso\">En curso</div>
			</div>";
		}
		if($are['estado']==3){
		    echo "<div class=\"curso\">
				<div class=\"foto\"> <img src=\"http://servicioss.gearhostpreview.com/img/$foto\"> </div>
				<div class=\"resumen\">
					<p>Titulo</p>
					<p style=\"font-family: sans-serif;\">Precio</p>
				</div>
				<div class=\"detalles\" onclick=\"paraMenu($id,6)\">Ver detalles</div>
				<div class=\"boton\" id=\"curso\">Calificar</div>
			</div>";
		}
		elseif ($are['estado']==5) {
			echo "<div class=\"finalizado\">
				<div class=\"foto\"> <img src=\"http://servicioss.gearhostpreview.com/img/$foto\"> </div>
				<div class=\"resumen\">
					<p>$titulo</p>
					<p style=\"font-family: sans-serif;\">$precio</p>
				</div>
				<div class=\"detalles\" onclick=\"paraMenu($id,6)\">Ver detalles</div>
				<div class=\"boton\" id=\"finalizado\">Finalizado</div>
				<div class=\"eliminar\"><img src=\"..\..\imagenes\basura.png\"></div>
			</div>";
		}
	}
	$x = @historialMisCompras($uu,3);

	foreach ($x as $are) {
		$titulo = $are['titulo'];
		$precio = $are['precio'];
		$id = $are['idProductos'];
		$foto = $are['foto'].".jpg";
		if($are['estado']==2){
		    echo "<div class=\"curso\">
				<div class=\"foto\"> <img src=\"http://servicioss.gearhostpreview.com/img/$foto\"> </div>
				<div class=\"resumen\">
					<p>Titulo</p>
					<p style=\"font-family: sans-serif;\">Precio</p>
				</div>
				<div class=\"detalles\" onclick=\"paraMenu($id,6)\">Ver detalles</div>
				<div class=\"boton\" id=\"curso\">En curso</div>
			</div>";
		}
		if($are['estado']==3){
		    echo "<div class=\"curso\">
				<div class=\"foto\"> <img src=\"http://servicioss.gearhostpreview.com/img/$foto\"> </div>
				<div class=\"resumen\">
					<p>Titulo</p>
					<p style=\"font-family: sans-serif;\">Precio</p>
				</div>
				<div class=\"detalles\" onclick=\"paraMenu($id,6)\">Ver detalles</div>
				<div class=\"boton\" id=\"curso\">Calificar</div>
			</div>";
		}
		elseif ($are['estado']==5) {
			echo "<div class=\"finalizado\">
				<div class=\"foto\"> <img src=\"http://servicioss.gearhostpreview.com/img/$foto\"> </div>
				<div class=\"resumen\">
					<p>$titulo</p>
					<p style=\"font-family: sans-serif;\">$precio</p>
				</div>
				<div class=\"detalles\" onclick=\"paraMenu($id,6)\">Ver detalles</div>
				<div class=\"boton\" id=\"finalizado\">Finalizado</div>
				<div class=\"eliminar\"><img src=\"..\..\imagenes\basura.png\"></div>
			</div>";
		}
	}
}