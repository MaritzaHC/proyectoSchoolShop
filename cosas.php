<?php
//Solo un estudiante
//cuantos productos publicados
global $mysqli;
$sql = "SELECT idProductos.productos FROM productos, calificacion_alumno WHERE tipo.productos = 1 and idProductos.productos = productos.calificacion_alumno and id_alumno.calificacion_alumno = ALGO and calificacionComprador.calificacion_alumno = NULL and fecha.productos < algo and fecha.productos > algo";

$cantidad = mysql_num_rows($sql);

//cuantos productos comprados
$sql = "SELECT idProductos.productos FROM productos, calificacion_alumno WHERE tipo.productos = 1 and idProductos.productos = productos.calificacion_alumno and id_alumno.calificacion_alumno = ALGO and calificacionVendedor.calificacion_alumno = NULL";

$cantidad = mysql_num_rows($sql);

//porcentaje con la calificacion de las publicaciones
global $mysqli;
$sql = "SELECT idProductos.productos FROM productos, calificacion_alumno WHERE tipo.productos = 1 and idProductos.productos = productos.calificacion_alumno and id_alumno.calificacion_alumno = ALGO and calificacionComprador.calificacion_alumno = NULL";

$cantidad = mysql_num_rows($sql);

$sql = "SELECT idProductos.productos FROM productos, calificacion_alumno WHERE tipo.productos = 1 and idProductos.productos = productos.calificacion_alumno and id_alumno.calificacion_alumno = ALGO and calificacionComprador.calificacion_alumno = NULL and calificacionVendedor.calificacion_alumno < 2";

$malaC = mysql_num_rows($sql);

$buenaC = $cantidad-$malaC; 

//todos los estudiantes
//cantidades de publicaciones
$sql = "SELECT idProductos.productos FROM productos, calificacion_alumno WHERE tipo.productos = 1 and idProductos.productos = productos.calificacion_alumno and calificacionComprador.calificacion_alumno = NULL and fecha.productos < algo and fecha.productos > algo";

$cantidad = mysql_num_rows($sql);
//promedio
$sql ="SELECT idAlumno FROM alumno"

$promedio = $cantidad/mysql_num_rows($sql);
//porcentaje con la calificacion de las publicaciones
global $mysqli;
$sql = "SELECT idProductos.productos FROM productos, calificacion_alumno WHERE tipo.productos = 1 and idProductos.productos = productos.calificacion_alumno and calificacionComprador.calificacion_alumno = NULL";

$cantidad = mysql_num_rows($sql);

$sql = "SELECT idProductos.productos FROM productos, calificacion_alumno WHERE tipo.productos = 1 and idProductos.productos = productos.calificacion_alumno and calificacionComprador.calificacion_alumno = NULL and calificacionVendedor.calificacion_alumno < 2";

$malaC = mysql_num_rows($sql);

$buenaC = $cantidad-$malaC; 
?>
<?php
include('lib/nusoap.php');
$client = new nusoap_client('',true);

if(isset($_POST[])){
	$param=array(
		
	)
}

INSERT INTO tabla (campo1, campo2)
VALUES (NOW(), valor);

create trigger NOMBRE MOMENTO EVENTO on TABLA for each row SENTENCIA (BEGIN --- END)

CREATE TRIGGER testref BEFORE INSERT ON test1
  FOR EACH ROW BEGIN
    INSERT INTO test2 SET a2 = NEW.a1;
    DELETE FROM test3 WHERE a3 = NEW.a1;  
    UPDATE test4 SET b4 = b4 + 1 WHERE a4 = NEW.a1;
  END

create trigger calificacion before update on calificacion_alumno for each row begin 

if (calificacionVendedor < 2 || calificacionComprador < 2) insert into notificaciones (texto,titulo,usuario) values ("Cuenta bloqueada","...");
end
delimiter ;

DO
	BEGIN
		INSERT INTO /*NOTIFICACIONES;*/
	END |
DELIMITER ;

DELIMITER |/*notificacion vender*/

CREATE EVENT diass ON SCHEDULE AT '2018-01-01' + INTERVAL 91 DAY
DO
	BEGIN
		INSERT INTO /*NOTIFICACIONES;*/
	END |
DELIMITER ;

create trigger NOMBRE MOMENTO EVENTO on TABLA for each row SENTENCIA (BEGIN --- END)

create trigger calificacionVerificar after 
update on calificacion_alumno for each row 
begin 
/*consusulta y guardar el usuario*/
	if (NEW.calificacionVendedor < 2 || NEW.calificacionComprador < 2) THEN
	insert into notificaciones (texto,titulo,usuario) 
	values ("Cuenta bloqueada","...",);
	end if;
end;
delimiter;

/*Usar tabla notificacion como reporte o agregar un campo*/
/*Conteo de calificacines*/



create table reportes (idReportes int primary key, 
                             titulo smallint, alumno int, 
                             FOREIGN KEY (alumno) REFERENCES alumno(idAlumno)); 