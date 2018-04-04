
insert into basess.login (usuario, password, tipoCuenta) values
	(14300190,"a1",1),(14300192,"a1",1),(14300193,"a1",1),(13300444,"a1",1),
	(21414,"c2",2),(21515,"c2",2),(21616,"c2",2),(21818,"c2",2),(21717,"c2",2),
	(31,"a3",3),(32,"a3",3),(33,"a3",3),(34,"a3",3),(35,"a3",3);

insert into basess.alumno values 
(14300190,"Erick","Castelao","Alferez","carpeta/carpeta","erick@gmail.com",14300190),
(14300192,"Diego","Hernandez","Elias","carpeta/carpeta","dogo@gmail.com",14300192),
(14300193,"Yael Arturo","Chavoya","Andalon","carpeta/carpeta","yael@gmail.com",14300193),
(13300444,"Miguel Angel","Nuño","Agila","carpeta/carpeta","Miguel@gmail.com",13300444);

insert into basess.calificacion_alumno (idCalificacion, calificacionVendedor, calificacionComprador, id_alumno)values
	(2,4,4,14300190),(3,4,4,14300192),(4,4,4,14300193),(5,4,4,13300444),(10,1,1,14300191),(11,2,2,14300191);

insert into basess.almacenista (idAlmacenista,nombre,foto,ubicacion,usuario) values
	(1,"ADS","carpeta/carpeta","Almacen de desarrollo de software, edificio F",31),
	(2,"AE","carpeta/carpeta","Almacen de electronica, edificio F",32),
	(3,"Biblioteca","carpeta/carpeta","Biblioteca, edificio F",33),
	(4,"AF1","carpeta/carpeta","Almacen de farmacos 1, edificio F",34),
	(5,"AF2","carpeta/carpeta","Almacen de farmacos 2, edificio F",35);


insert into basess.vendedor
(idVendedor,nombre,foto,telefono,ubicacion,usuario)
values
(15,"Los tacos","x/x","3333333333","Enfrente del estacionamiento",21515),
(16,"Maltiaditas","x/x","3333383333","En la entrada",21414),
(17,"Los colomos","x/x","3337333333","A lado del estacionamiento",21616),
(18,"El pan","x/x","3333433333","Local 45",21717),
(19,"For","x/x","3333332333","En frente de colomos",21818);

insert into basess.factura_vendedor (idFactura, calificacionVendedor,id_vendedor) values
	(1,4,19),(2,3,19),(3,1,19),(4,3,19),(5,4,15),(6,3,15),(7,2,15),(8,4,16),(9,5,17);

insert into basess.objetoperdido (idObjetoPerdido, foto, descripcion, publicador, id_lugar, titulo, estado) values
	(1,"carpeta/carpeta","Cuanto dienero tiene",14300191,1,"cartera",1),
	(2,"carpeta/carpeta","Es de 4G con un documento llamado 'reportito'",14300191,1,"Memoria",1),
	(3,"carpeta/carpeta","Tiene algo adentro de las bolsas",14300192,1,"Chamarra roja",2),
	(4,"carpeta/carpeta","Me pueden encontrar en el f",14300192,1,"Estuche azul con negro",3),
	(5,"carpeta/carpeta","Tiene 5 laminas de georgina",14300190,1,"portalaminas",1);

insert into basess.restricciones (idRestricciones, nombre, estado) values
	(1,"Por temporada, se dará un mes al inicio del semestre y al final para poder vender, el resto del tiempo no se podrá",1),
	(2,"Solo se pueden vender útiles escolares ",1),
	(3,"Se tendrá un límite de publicaciones por semestre en la sección de ventas (5,10,15,20)",1),
	(4,"Por calificación mínima recibida del estudiante como vendedor (1 estrella)",1),
	(5,"Por calificación mínima recibida del estudiante como comprador (1 estrella)",1),
	(6,"Por calificación mínima del estudiante (requiere de permisos de la institución)",2);
 
 
