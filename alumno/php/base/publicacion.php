<?php

	require_once '../../../nusoap/lib/nusoap.php';
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";
	$client=new soapclient($wsdl);

if($_POST['tipo'] == 1)
{
	$parametro = array();
	$parametro['idProductos'] = 0;
	$parametro['descripcion'] = $_POST['descripcion'];
	$parametro['foto'] = "prue/";
	$parametro['categoria'] = 1;
	$parametro['tiempo'] = 1;
	$parametro['precio'] = $_POST['precio'];
	$parametro['titulo'] = $_POST['titulo'];
	$parametro['vendedor'] = 1;
	$parametro['comprador'] = 0;
	$parametro['tipo'] = 1;
	$parametro['fecha'] = "1999-01-01";
	$parametro['estado'] = 1;
	$parameters = array("x"=> $parametro);
	json_encode($parameters);
	$result=$client->insertarProducto($parameters);
}  
else{
/*$sql="INSERT INTO objetoperdido (descripcion, titulo) VALUES 
('".$_POST['descripcion']."','".$_POST['titulo'].")";
  		$mysqli->query($sql);*/
}
/*
ALTER TABLE `basess`.`calificacion_alumno` 
ADD CONSTRAINT `calificacion_alumno_ibfk_1`
  FOREIGN KEY ()
  REFERENCES `basess`.`alumno` ();

ALTER TABLE `basess`.`factura_vendedor` 
ADD CONSTRAINT `factura_vendedor_ibfk_2`
  FOREIGN KEY ()
  REFERENCES `basess`.`alumno` ();

ALTER TABLE `basess`.`objetoperdido_solicitante` 
ADD CONSTRAINT `objetoperdido_solicitante_ibfk_2`
  FOREIGN KEY ()
  REFERENCES `basess`.`alumno` ();

ALTER TABLE `basess`.`reportes` 
ADD CONSTRAINT `reportes_ibfk_1`
  FOREIGN KEY ()
  REFERENCES `basess`.`alumno` ();
*/
?>