/*cuantos productos publicados por estudiante*/
select COUNT(*) as cantidad from productos where
tipo=1 and vendedor=ALGO and (fecha BETWEEN ALGO AND ALGO);
/*cuantos productos vendidos por estudiante*/
select COUNT(*) as cantidad from productos where estado=5 and
tipo=1 and vendedor=ALGO and (fecha BETWEEN ALGO AND ALGO);
/*cuantos productos coomprados por estudiante*/
select COUNT(*) as cantidad from productos where 
tipo=1 and comprador=ALGO and (fecha BETWEEN ALGO AND ALGO);
/*cantidad de productos vendidos con calificacion mala por estudiante*/
select COUNT(*) as cantidad from productos, calificacion_alumno where productos.estado=3 and
productos.tipo=1 and productos.vendedor=ALGO and calificacion_alumno.productos=productos.idProductos and 
calificacion_alumno.calificacionVendedor<2
and (productos.fecha BETWEEN ALGO AND ALGO);

/*cantidad de productos publicados*/
select COUNT(*) as cantidad from productos where estado=3 and
tipo=1 and fecha BETWEEN ALGO AND ALGO;
/*cantidad de alumos*/
SELECT COUNT(*) as cantidad FROM alumno
/*cantidad de productos vendidos con calificacion mala*/
select COUNT(*) as cantidad from productos, calificacion_alumno where productos.estado=3 and
productos.tipo=1 and calificacion_alumno.productos=productos.idProductos and calificacion_alumno.calificacionVendedor<2
and productos.fecha BETWEEN ALGO AND ALGO;


/*cantidad de alumnos con mala calificacion*/
select COUNT(*) as cantidad from alumno, calificacion_alumno where alumno.idAlumno = calificacion_alumno.id_alumno and 
AVG(calificacion_alumno.calificacionVendedor)<2 GROUP BY alumno.idAlumno;
select COUNT(*) as cantidad from alumno, calificacion_alumno where alumno.idAlumno = calificacion_alumno.id_alumno and 
AVG(calificacion_alumno.calificacionComprador)<2 GROUP BY alumno.idAlumno;
 
/*Vistas*/

/*ver a todos los vendedores*/
select vendedor.idVendedor, vendedor.nombre, AVG(factura_vendedor.calificacionVendedor) as "promedio"
from vendedor, factura_vendedor where vendedor.idVendedor=factura_vendedor.id_vendedor GROUP BY idVendedor;
/*ver a todos los almacenistas*/
select nombre from almacenista;
/*ver a todos los alumnos*/
select idAlumno, nombre from alumno;
/*ver todas las restricciones*/
select idRestricciones, estado from restricciones;
/*ver todas las categoiras*/
select *from categorias;
/*ver todos los lugares -PENDIENTE-*/
select *from lugar;
/*Ver en especial al vendedor*/
select vendedor.nombre, vendedor.telefono, login.password, vendedor.ubicacion 
from vendedor, login 
where vendedor.usuario=login.usuario and vendedor.idVendedor=ALGO;
/*ver en especial al alumno*/
select alumno.idAlumno, alumno.nombre, alumno.apellidoP, alumno.apellidoM,  
AVG(calificacion_alumno.calificacionVendedor) as "promedioV",AVG(calificacion_alumno.calificacionComprador) as "promedioC"
from alumno, calificacion_alumno
where alumno.id_alumno=calificacion_alumno.id_alumno and alumno.idAlumno = ALGO 	


UPDATE productos SET categoria=null WHERE categoria = id;
UPDATE categorias SET estado = 0 WHERE idcategoria = id;


/*Restricciones*/
UPDATE restricciones
SET
estado = ALGO
WHERE idRestricciones=ALGO;

SELECT estado from restricciones where idRestricciones=ALGO;


/*Bases de las escuelas*/
use escuela1;

create table calificacion (id int primary key, calificacionGeneral float);
create table maestros (id int primary key, nombre varchar(30),nomina int, materia varchar(30));
create table alumno (id int primary key, nombre varchar(30),
apellidoPaterno varchar(30),apellidoMaterno varchar(30),
direccion varchar(100),fechaNacimiento datetime,
calificacionG int, FOREIGN KEY (calificacionG) REFERENCES calificacion(id));

use escuela2;

create table calificacion (id int primary key, calificacionGeneral float);
create table personal (id int primary key, nombre varchar(30),nomina int, materia varchar(30));
create table estudiante (idAlumno int primary key,
 nombres varchar(30),apellidoPaterno varchar(30),
 apellidoMaterno varchar(30),direccion varchar(100),
 fechaNacimiento datetime, situacion boolean, calificacionG int, FOREIGN KEY (calificacionG) REFERENCES calificacion(id));

use escuela1;	
insert into alumno values (14300002,"Hector","Sanchez","Sanchez","lejos","1999-01-04 04:00:00",1,"Sanchez2@gmail.com"),
						  (14300003,"Margarito","Hernandez","Milan","lejos","1999-01-26 04:00:00",1,"mago@gmail.com"),
						  (14300004,"Alicia","Contreras","Avalos","lejos","1999-04-30 04:00:00",1,"ali@gmail.com"),
						  (14300005,"Fabiola","Garcia","Cuevas","lejos","1999-10-01 04:00:00",1,"fabi@gmail.com"),
						  (14300006,"Ariadne","Calderon","Garcia","lejos","1999-02-04 04:00:00",1,"ari@gmail.com");

use escuela2;
insert into calificacion values(3,90),(4,80);
insert into personal values(151,"Algien",445,"limpieza"),(555,"Persona",85,"Comida");
insert into estudiante values (32555566,"Ricardo","Navarro","Algo","otro lugar","1999-09-18 04:00:00","true",3),
	(85457885,"Abril","Medina","Landeros","otro lugar","1999-041-18 04:00:00","true",4);

create table conversacion (id int primary key, fecha date, usuarioU int, usuarioD int, FOREIGN KEY (usuarioU) REFERENCES (),FOREIGN KEY (usuarioD) REFERENCES ());
create table mensaje (id int primary key, conversacion int, FOREIGN KEY (conversacion) REFERENCES conversacion(id), texto text);