<?php


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
		INSERT INTO /*NOTIFICACI ONES;*/
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


/*Evento para que una semana despues del inicio del semestre se mande una notificacion a todos los estudiantes para sugerir vender */
CREATE EVENT ventaInicio ON SCHEDULE AT '2018-01-01' + INTERVAL 7 DAY
DO
	INSERT INTO notificaciones (usuario,titulo,texto)
	SELECT usuario, "Es un buen momento para vender", "Es inicio de semestre, en este periodo puedes vender tus utiles escolares que te sosbraron del ultimo semestre" 
	from login where usuario LIKE "1%";
/*Evento para que al final del semestre se mande una notificacion a todos los estudiantes para sugerir vender */
CREATE EVENT ventaInicio ON SCHEDULE AT '2018-01-01' + INTERVAL 91 DAY
DO
	INSERT INTO notificaciones (usuario,titulo,texto)
	SELECT usuario, "Es un buen momento para vender", "Es fin de semestre, en este periodo puedes vender tus utiles escolares que te sosbraron del este semestre" 
	from login where usuario LIKE "1%";

delimiter //
 CREATE TRIGGER reporte BEFORE INSERT ON reportes
       BEGIN
       //falta la calificacion
       		INSERT INTO notificaciones (usuario,titulo,texto) 
       		values (ALGO,"Nuevo reporte","Una publicacion se reporto" );
       		INSERT INTO notificaciones (usuario,titulo,texto) 
       		values (ALGO,"Nuevo reporte","Una publicacion se reporto" ) where variable!=4;//en ese reporte no llega la notificacion al admin
       		update productos SET estadi=4 WHERE vendedor=ALGO;
       END;//
delimiter ;

delimiter //
 CREATE TRIGGER venta BEFORE UPDATE ON productos
       FOR EACH ROW WHEN (new.estado = 2) BEGIN
       		INSERT INTO notificaciones (usuario,titulo,texto) 
       		values (old.vendedor,"Nuevo reporte","Una publicacion se reporto" );
       		INSERT INTO notificaciones (usuario,titulo,texto) 
       		values (4,"Nuevo reporte","Una publicacion se reporto" ) where variable!=4;//en ese reporte no llega la notificacion al admin
       END;//
delimiter ;

delimiter //
 CREATE TRIGGER calificacionA BEFORE UPDATE ON calificacion_alumno
       FOR EACH ROW BEGIN
       		INSERT INTO notificaciones (usuario,titulo,texto) 
       		values (old.vendedor,"Nuevo reporte","Una publicacion se reporto" );
       END;//
delimiter ;