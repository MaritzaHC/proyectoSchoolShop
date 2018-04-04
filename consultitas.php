se<?php
function mostrarProductos(){
	global $mysqli;
	$sql = "SELECT idProductos, foto, precio, titulo FROM productos WHERE tipo = 1";

	if(!$resultado = $mysqli->query($sql)){
	   echo "Error al consultar0.";
	   exit;
	}
}
function mostrarPedidos(){
	global $mysqli;
	$sql = "SELECT idProductos, foto, precio, titulo FROM productos WHERE tipo = 2";

	if(!$resultado = $mysqli->query($sql)){
	   echo "Error al consultar1.";
	   exit;
	}
}
function mostrarOfertas(){
	global $mysqli;
	$sql = "SELECT idProductos, foto, descripcion, titulo FROM productos WHERE tipo = 3";

	if(!$resultado = $mysqli->query($sql)){
	   echo "Error al consultar2.";
	   exit;
	}
}
function mostrarObjetos(){
	global $mysqli;
	$sql = "SELECT idObjetoPerdido, foto, titulo FROM objetoperdido";

	if(!$resultado = $mysqli->query($sql)){
	   echo "Error al consultar en objetos.";
	   exit;
	}
}
function infomracionProducto{
	global $mysqli;
	$sql = "SELECT productos.idProductos, productos.foto, productos.precio, productos.titulo, productos.detalles, calificacion_alumno.calificacionVendedor FROM productos, calificacion_alumno WHERE productos.idProductos=calificacion_alumno.productos";

	if(!$resultado = $mysqli->query($sql)){
	   echo "Error al consultar0.";
	   exit;
	}
}
function cuenta($registro){
	global $mysqli;
	$sql = "SELECT alumno.idAlumno, alumno.nombre, alumno.apellidoP, alumno.apellidoM, alumno.foto, alumno.correo, calificacion_alumno.calificacionVendedor, calificacion_alumno.calificacionComprador FROM alumno, calificacion_alumno WHERE calificacion_alumno.id_alumno=alumno.idAlumno AND alumno.usuario = ".$registro;
	if(!$resultado = $mysqli->query($sql)){
	   echo "Error al consultar Cuenta";
	   exit;
	}
}
function notificaciones($registro){
	global $mysqli;
	$sql = "SELECT texto, titulo FROM notificaciones WHERE usuario =".$registro;
}
?>