
CREATE TRIGGER compraProducto AFTER INSERT ON comprarproducto FOR EACH ROW BEGIN
INSERT into notificaciones (texto,titulo,usuario) values (
CONCAT("El usuario ",NEW.comprador," quiere comprar ",new.titulo,". Revisa tu historial"),"Posible venta",new.vendedor);
UPDATE productos SET estado=2, comprador=new.comprador WHERE idProductos=new.idProducto;  
END//

CREATE TRIGGER solicitarObjeto AFTER INSERT ON solicitarobjeto FOR EACH ROW BEGIN
INSERT into notificaciones (texto,titulo,usuario) values (
CONCAT("El usuario ",NEW.solicitante," solicita el objeto ",new.titulo,". Revisa tu historial"),"Posible dueño",new.publicador);
UPDATE objetoperdido SET estado=2 WHERE idObjetoPerdido = new.idObjeto;  
INSERT INTO objetoperdido_solicitante (solicitante,objeto_perdido) VALUES (new.solicitante,new.idObjeto);
END//

CREATE TRIGGER reporte AFTER INSERT ON reportarproducto
       FOR EACH ROW BEGIN
       		UPDATE productos set estado=4 WHERE idProducto=new.idProducto;
       		INSERT INTO notificaciones (usuario,titulo,texto) 
       		values (new.vendedor,"Nuevo reporte",CONCAT("La publicacion ",new.titulo," se reporto, por la razon de:  ",NEW.nombre," .Se solcita que se elimine o modifique"));
       	    IF new.tipo <> 4 THEN
       	    INSERT INTO notificaciones (usuario,titulo,texto)
       	    values (123456,"Reporte a una publicacion",CONCAT('La publicacion ',new.titulo,' del estudiante: ',new.vendedor,' se reporto por la razon de ',new.nombre));
       	    END IF;
END//	

CREATE TRIGGER calificacion AFTER UPDATE ON calificacion_alumno
       FOR EACH ROW BEGIN
          IF UPDATE (calificacionComprador) THEN
          UPDATE alumno SET calificacionC = (new.calificacionComprador+(select calificacionC from alumno where idAlumno=new.id_alumnoC))/2 WHERE idAlumno=new.id_alumnoC;
          END IF;
          IF UPDATE (calificacionVendedor) THEN
          UPDATE alumno SET calificacionV = (new.calificacionVendedor+(select calificacionV from alumno where idAlumno=new.id_alumnoV))/2 WHERE idAlumno=new.id_alumnoV;
          END IF;
END// 



/*Evento para que una semana despues del inicio del semestre se mande una notificacion a todos los estudiantes para sugerir vender */
CREATE EVENT ventaInicio ON SCHEDULE AT '2019-01-01' + INTERVAL 7 DAY
DO
  INSERT INTO notificaciones (usuario,titulo,texto)
  SELECT usuario, "Es un buen momento para vender", "Es inicio de semestre, en este periodo puedes vender tus utiles escolares que te sosbraron del ultimo semestre" 
  from login where tipoCuenta = 1;
/*Evento para que al final del semestre se mande una notificacion a todos los estudiantes para sugerir vender */
CREATE EVENT ventaFin ON SCHEDULE AT '2019-01-01' + INTERVAL 91 DAY
DO
  INSERT INTO notificaciones (usuario,titulo,texto)
  SELECT usuario, "Es un buen momento para vender", "Es fin de semestre, en este periodo puedes vender tus utiles escolares que te sosbraron del este semestre" 
  from login where tipoCuenta = 1;
/*despues de un mes se bloquea la posibilidad de publicar*/
CREATE EVENT mesBlo ON SCHEDULE AT '2019-01-01' + INTERVAL 30 DAY
DO
  UPDATE restricciones set estado=false;
/*al final te deja publicar*/ 
CREATE EVENT seBlo ON SCHEDULE AT '2019-01-01' + INTERVAL 91 DAY  
DO
  UPDATE restricciones set estado=true;
/*inicio del semestre*/
CREATE EVENT iniBlo ON SCHEDULE AT '2019-01-01' 
DO
  UPDATE restricciones set estado=true;
/*final del semestre*/
CREATE EVENT finBlo ON SCHEDULE AT '2019-02-01' 
DO
  UPDATE restricciones set estado=false;


DELIMITER $$
CREATE PROCEDURE `fechas`(IN _iniSe date)
BEGIN
  Alter EVENT ventaInicio ON schedule AT _iniSe + INTERVAL 7 DAY ;
  Alter EVENT ventaFin ON schedule AT _iniSe + INTERVAL 91 DAY;
END$$

CREATE PROCEDURE `restriccionA`(IN _iniSe date, IN _finSe date)
BEGIN
  Alter EVENT mesBlo ON SCHEDULE AT _iniSe + INTERVAL 30 DAY;
  Alter EVENT seBlo ON SCHEDULE AT _iniSe + INTERVAL 91 DAY;
  Alter EVENT iniBlo ON SCHEDULE AT _iniSe;
  Alter EVENT finBlo ON SCHEDULE AT _finSe;
END$$

CREATE PROCEDURE `restriccionD`()
BEGIN
  Alter EVENT mesBlo ON SCHEDULE AT '2000-01-01' + INTERVAL 30 DAY;
  Alter EVENT seBlo ON SCHEDULE AT '2000-01-01' + INTERVAL 91 DAY;
  Alter EVENT iniBlo ON SCHEDULE AT '2000-01-01';
  Alter EVENT finBlo ON SCHEDULE AT '2000-02-01';
END$$
DELIMITER ;

DROP PROCEDURE myProcedure;
DROP PROCEDURE pro;
DROP PROCEDURE procediento;

if(!$mysqli->query("call restriccionA('$iniSe','$finSe')")){echo "no";} 