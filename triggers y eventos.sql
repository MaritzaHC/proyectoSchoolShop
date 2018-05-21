
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

/*Evento para que una semana despues del inicio del semestre se mande una notificacion a todos los estudiantes para sugerir vender */
CREATE EVENT ventaInicio ON SCHEDULE AT '2018-01-01' + INTERVAL 7 DAY
DO
	INSERT INTO notificaciones (usuario,titulo,texto)
	SELECT usuario, "Es un buen momento para vender", "Es inicio de semestre, en este periodo puedes vender tus utiles escolares que te sosbraron del ultimo semestre" 
	from login where tipoCuenta = 1;
/*Evento para que al final del semestre se mande una notificacion a todos los estudiantes para sugerir vender */
CREATE EVENT ventaInicio ON SCHEDULE AT '2018-01-01' + INTERVAL 91 DAY
DO
	INSERT INTO notificaciones (usuario,titulo,texto)
	SELECT usuario, "Es un buen momento para vender", "Es fin de semestre, en este periodo puedes vender tus utiles escolares que te sosbraron del este semestre" 
	from login where tipoCuenta = 1;
/*despues de un mes se bloquea la posibilidad de publicar*/
CREATE EVENT resTiempo ON SCHEDULE AT '2018-01-01' + INTERVAL 30 DAY
DO
  UPDATE restricciones set estado=false;
/*al final te deja publicar*/ 
CREATE EVENT resTiempo ON SCHEDULE AT '2018-01-01' + INTERVAL 91 DAY
DO
  UPDATE restricciones set estado=true;
/*inicio del semestre*/
CREATE EVENT resTiempo ON SCHEDULE STARTS '2018-01-01' 
DO
  UPDATE restricciones set estado=true;
/*final del semestre*/
CREATE EVENT resTiempo ON SCHEDULE STARTS '2018-01-01' 
DO
  UPDATE restricciones set estado=false;
