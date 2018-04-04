/*cuantos productos publicados por estudiante*/
select COUNT(*) from productos where estado=3 and
tipo=1 and vendedor=ALGO and fecha BETWEEN ALGO AND ALGO;
/*cuantos productos coomprados por estudiante*/
select COUNT(*) from productos where 
tipo=1 and comprador=ALGO and fecha BETWEEN ALGO AND ALGO;
/*cantidad de productos vendidos con calificacion mala por estudiante*/
select COUNT(*) from productos, calificacion_alumno where productos.estado=3 and
productos.tipo=1 and productos.vendedor=ALGO and calificacion_alumno.productos=productos.idProductos and calificacion_alumno.calificacionVendedor<2
and productos.fecha BETWEEN ALGO AND ALGO;

/*cantidad de productos publicados*/
select COUNT(*) from productos where estado=3 and
tipo=1 and fecha BETWEEN ALGO AND ALGO;
/*cantidad de alumos*/
SELECT idAlumno FROM alumno
/*cantidad de productos vendidos con calificacion mala*/
select COUNT(*) from productos, calificacion_alumno where productos.estado=3 and
productos.tipo=1 and calificacion_alumno.productos=productos.idProductos and calificacion_alumno.calificacionVendedor<2
and productos.fecha BETWEEN ALGO AND ALGO;
/*cantidad de alumnos con mala calificacion*/
select COUNT(*) from alumno, calificacion_alumno where alumno.idAlumno = calificacion_alumno.id_alumno and 
AVG(calificacion_alumno.calificacionVendedor)<2 GROUP BY alumno.idAlumno;
select COUNT(*) from alumno, calificacion_alumno where alumno.idAlumno = calificacion_alumno.id_alumno and 
AVG(calificacion_alumno.calificacionComprador)<2 GROUP BY alumno.idAlumno;


/*Vistas*/
select vendedor.idVendedor, vendedor.nombre, AVG(factura_vendedor.calificacionVendedor) as "promedio"
from vendedor, factura_vendedor where vendedor.idVendedor=factura_vendedor.id_vendedor GROUP BY idVendedor;

select nombre from almacenista;

select idAlumno, nombre from alumno;

select idRestricciones, estado from restricciones;

select *from categorias;

select *from lugar;

select vendedor.nombre, vendedor.telefono, login.password, vendedor.ubicacion 
from vendedor, login 
where vendedor.usuario=login.usuario and vendedor.idVendedor=ALGO;

select 