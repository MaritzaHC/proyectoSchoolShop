DROP TRIGGER comprarproducto//
CREATE TRIGGER compraProducto AFTER INSERT ON comprarproducto FOR EACH ROW BEGIN
INSERT into notificaciones (texto,titulo,usuario) values (
CONCAT("El usuario ",NEW.comprador," quiere comprar ",new.titulo,". Revisa tu historial"),"Posible venta",new.vendedor);
UPDATE productos SET estado=2, comprador=new.comprador WHERE idProductos=new.idProducto;  
INSERT into calificacion_alumno (id_alumnoC,productos,id_alumnoV) values (new.comprador,new.idProducto,new.vendedor);
END//

DROP TRIGGER solicitarobjeto//
CREATE TRIGGER solicitarObjeto AFTER INSERT ON solicitarobjeto FOR EACH ROW BEGIN
INSERT into notificaciones (texto,titulo,usuario) values (
CONCAT("El usuario ",NEW.solicitante," solicita el objeto ",new.titulo,". Revisa tu historial"),"Posible dueño",new.publicador);
UPDATE objetoperdido SET estado=2 WHERE idObjetoPerdido = new.idObjeto;  
INSERT INTO objetoperdido_solicitante (solicitante,objeto_perdido) VALUES (new.solicitante,new.idObjeto);
END//

DROP TRIGGER comprarVendedor//
CREATE TRIGGER comprarVendedor AFTER INSERT ON comprarVendedor FOR EACH ROW BEGIN
INSERT INTO notificaciones (texto,titulo,usuario) values(
CONCAT("El alumno ",new.nomAlum," quiere comprar ", new.cantidad,"x", new.nomProdu," para el: ",new.fecha),CONCAT("Venta-",new.fecha),new.idven);
INSERT INTO factura_vendedor (id_vendedor,id_alumno,id_producto,precio,cantidad) values(new.idven,new.idcom,new.idprodu,new.precio,new.cantidad);
END//

DROP TRIGGER reporte//
CREATE TRIGGER reporte AFTER INSERT ON reportarproducto
       FOR EACH ROW BEGIN
       		UPDATE productos set estado=4 WHERE idProductos=new.idProducto;
       		INSERT INTO notificaciones (usuario,titulo,texto) 
       		values (new.vendedor,"Nuevo reporte",CONCAT("La publicacion ",new.nombre," se reporto, por la razon de:  ",NEW.titulo," .Se solcita que se elimine o modifique"));
       	    IF new.tipo <> 4 THEN
       	  INSERT INTO notificaciones (usuario,titulo,texto)
       	  values (123456,"Reporte a una publicacion",CONCAT('La publicacion ',new.nombre,' del estudiante: ',new.vendedor,' se reporto por la razon de ',new.titulo));
       	  UPDATE login set fecha = curdate() WHERE usuario=new.vendedor;
            END IF;
END//	

DROP TRIGGER calificacion//
CREATE TRIGGER calificacion AFTER UPDATE ON calificacion_alumno
       FOR EACH ROW BEGIN
          IF (old.calificacionComprador<>new.calificacionComprador) THEN
          UPDATE alumno SET calificacionC = 
          new.calificacionComprador+(select calificacionC from alumno where idAlumno=new.id_alumnoC)/2 WHERE idAlumno=new.id_alumnoC;
          END IF;
          IF (old.calificacionVendedor<>new.calificacionVendedor) THEN
          UPDATE alumno SET calificacionV = 
          (new.calificacionVendedor+(select calificacionV from alumno where idAlumno=new.id_alumnoV))/2 WHERE idAlumno=new.id_alumnoV;
          END IF;
END//  
/***/
DROP TRIGGER calaificacionA//
CREATE TRIGGER calaificacionA AFTER UPDATE ON alumno
       FOR EACH ROW BEGIN
       IF(old.calificacionC <> new.calificacionC) THEN
        IF new.calificacionC<2 THEN
          UPDATE login set estado=3 WHERE usuario=new.usuario;
        end IF;
      END IF;
      IF(old.calificacionV <> new.calificacionV) THEN
        IF new.calificacionV<2 THEN
          UPDATE login set estado=3 WHERE usuario=new.usuario;
        end IF;
      END IF;
END// 

DROP TRIGGER calificacionVend//
CREATE TRIGGER calificacionVend AFTER UPDATE ON factura_vendedor
       FOR EACH ROW BEGIN
          IF (old.calificacionVendedor <> new.calificacionVendedor) THEN
          UPDATE vendedor SET calificacion = 
          (new.calificacionVendedor+(select calificacion from vendedor where idVendedor=new.id_vendedor))/2 WHERE idVendedor=new.id_vendedor;
          UPDATE productos set estado=5 WHERE idProductos=id_producto;
          END IF;
END//  

DROP TRIGGER calificacionV//
CREATE TRIGGER calaificacionV AFTER UPDATE ON vendedor
       FOR EACH ROW BEGIN
       IF(old.calificacion <> new.calificacion) THEN
        IF new.calificacion<2 THEN
          UPDATE login set estado=3 WHERE usuario=new.idVendedor;
        end IF;
      END IF;
END// 
  
DROP EVENT tiemposCalificar//
  CREATE EVENT tiemposCalificar ON SCHEDULE EVERY 1 DAY STARTS '2012-10-04'
  DO
  begin
    call tresdias();
    call findia();
    call exactodia();
    call findia2();
  end//

/*Evento para que una semana despues del inicio del semestre se mande una notificacion a todos los estudiantes para sugerir vender */
DROP EVENT ventaInicio//
CREATE EVENT ventaInicio ON SCHEDULE AT '2019-01-01' + INTERVAL 7 DAY
DO
  INSERT INTO notificaciones (usuario,titulo,texto)
  SELECT usuario, "Es un buen momento para vender", "Es inicio de semestre, en este periodo puedes vender tus utiles escolares que te sosbraron del ultimo semestre" 
  from login where tipoCuenta = 1;
/*Evento para que al final del semestre se mande una notificacion a todos los estudiantes para sugerir vender */
DROP EVENT ventaFin//
CREATE EVENT ventaFin ON SCHEDULE AT '2019-01-01' + INTERVAL 91 DAY
DO
  INSERT INTO notificaciones (usuario,titulo,texto)
  SELECT usuario, "Es un buen momento para vender", "Es fin de semestre, en este periodo puedes vender tus utiles escolares que te sosbraron del este semestre" 
  from login where tipoCuenta = 1;
/*despues de un mes se bloquea la posibilidad de publicar*/
DROP EVENT mesBlo//
CREATE EVENT mesBlo ON SCHEDULE AT '2019-01-01' + INTERVAL 30 DAY
DO
  UPDATE restricciones set estado=false;
/*al final te deja publicar*/ 
DROP EVENT seBlo//
CREATE EVENT seBlo ON SCHEDULE AT '2019-01-01' + INTERVAL 91 DAY  
DO
  UPDATE restricciones set estado=true;
/*inicio del semestre*/
DROP EVENT iniBlo//
CREATE EVENT iniBlo ON SCHEDULE AT '2019-01-01' 
DO
  UPDATE restricciones set estado=true;
/*final del semestre*/
DROP EVENT finBlo//
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

  CREATE PROCEDURE tresdias() BEGIN
      declare vid int;
      DECLARE done int default false;
      
      DECLARE micursor CURSOR
    FOR
      SELECT idProductos FROM productos WHERE estado=2 and datediff(NOW(), fecha)=3 and tipo=1;
      
      DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = TRUE;
    OPEN micursor;
      
    buscar: LOOP 
      FETCH micursor INTO vid;
      IF done THEN
        LEAVE buscar;
      END IF;
          
          update productos set estado=3 where idProductos=vid;
          
    END LOOP;
      
      CLOSE micursor;

  END$$
  DROP PROCEDURE exactodia$$
  CREATE PROCEDURE exactodia() BEGIN
      declare vid int;
      DECLARE done int default false;
      
      DECLARE micursor CURSOR
    FOR
      SELECT id_producto FROM factura_vendedor WHERE estado=2 and datediff(NOW(), fecha)=0 ;
      
      DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = TRUE;
    OPEN micursor;
      
    buscar: LOOP 
      FETCH micursor INTO vid;
      IF done THEN
        LEAVE buscar;
      END IF;
          
          update factura_vendedor set estado=3 where id_producto=vid;
          
    END LOOP;
      
      CLOSE micursor;

  END$$

  CREATE PROCEDURE findia() BEGIN
      declare vid int;
      DECLARE done int default false;
      
      DECLARE micursor CURSOR
    FOR
      SELECT idProductos FROM productos WHERE estado=3 and datediff(NOW(), fecha)=4 and tipo=1;
      
      DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = TRUE;
    OPEN micursor;
      
    buscar: LOOP 
      FETCH micursor INTO vid;
      IF done THEN
        LEAVE buscar;
      END IF;
          
          update productos set estado=5 where idProductos=vid;
          
    END LOOP;
      
      CLOSE micursor;

  END$$
   -- estas mal
  DROP PROCEDURE findia2$$
  CREATE PROCEDURE findia2() BEGIN
      declare vid int;
      DECLARE done int default false;
      
      DECLARE micursor CURSOR
    FOR
      SELECT id_producto FROM factura_vendedor WHERE estado=3 and datediff(NOW(), fecha)=1;
      
      DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = TRUE;
    OPEN micursor;
      
    buscar: LOOP 
      FETCH micursor INTO vid;
      IF done THEN
        LEAVE buscar;
      END IF;
          
          update factura_vendedor set estado=5 where id_producto=vid;
          
    END LOOP;
      
      CLOSE micursor;

  END$$
  DELIMITER ;

CREATE PROCEDURE findia() BEGIN
      declare vid int;
      DECLARE done int default false;
      
      DECLARE micursor CURSOR
    FOR
      SELECT idProductos FROM productos WHERE estado=3 and datediff(NOW(), fecha)=4 and tipo=1;
      
      DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = TRUE;
    OPEN micursor;
      
    buscar: LOOP 
      FETCH micursor INTO vid;
      IF done THEN
        LEAVE buscar;
      END IF;
          
          update productos set estado=5 where idProductos=vid;
          
    END LOOP;
      
      CLOSE micursor;

  END$$
  