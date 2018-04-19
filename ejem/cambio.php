<?php
require_once 'lib/nusoap.php';
/*Esta funcion retorna un arreglo que contien los productos que estan en la base de datos
Se solicita el tipo (1-alumno)(2-vendedor)(3-ofertas) y la pagina*/
function productos($tipo,$pag)
{
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";
	$client=new SoapClient($wsdl);
	$parametro = array('pag' => $pag,'tipo' => $tipo);
	$result=$client->productosConsultaprincipal($parametro)->productosConsultaprincipalResult;

	$losproductos = array();
	$cuantos = count($result->ProductosModelo, COUNT_RECURSIVE);

	for ($i=0; $i < $cuantos; $i++) { 
		$losproductos[$i] = array(
								  'idProductos'=>$result->ProductosModelo[$i]->idProductos,
								  'descripcion'=>$result->ProductosModelo[$i]->descripcion,
								  'titulo'=>$result->ProductosModelo[$i]->titulo,
								  'categoria'=>$result->ProductosModelo[$i]->categoria,
								  'vendedor'=>$result->ProductosModelo[$i]->vendedor,
								  'comprador'=>$result->ProductosModelo[$i]->comprador,
								  'estado'=>$result->ProductosModelo[$i]->estado,
								  'foto'=>$result->ProductosModelo[$i]->foto);
	}
	return $losproductos;
	/*
	$x = array();
	$x = productos(1);
	echo $x[0]['titulo'];
	*/
}
function productosDeta($id)
{
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";
	$client=new SoapClient($wsdl);
	$parametro = array('id' => $id);
	$result=$client->productosConsultaDetalle($parametro)->productosConsultaDetalleResult;

		$losproductos = array(
							  'idProductos'=>$result->ProductosModelo->idProductos,
							  'descripcion'=>$result->ProductosModelo->descripcion,
							  'titulo'=>$result->ProductosModelo->titulo,
							  'categoria'=>$result->ProductosModelo->categoria,
							  'vendedor'=>$result->ProductosModelo->vendedor,
							  'comprador'=>$result->ProductosModelo->comprador,
							  'estado'=>$result->ProductosModelo->estado,
							  'foto'=>$result->ProductosModelo->foto);
	return $losproductos;
}

function objetosDeta($id)
{
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";
	$client=new SoapClient($wsdl);
	$parametro = array('id' => $id);
	$result=$client->consultaDetalleObjetoPerdido($parametro)->consultaDetalleObjetoPerdidoResult;

		$losproductos = array(
							  'idObjetoPerdido'=>$result->ObjetoPerdidoModelo->idObjetoPerdido,
							  'descripcion'=>$result->ObjetoPerdidoModelo->descripcion,
							  'titulo'=>$result->ObjetoPerdidoModeloObjetoPerdidoModelo->titulo,
							  'lugarString'=>$result->ObjetoPerdidoModelo->lugarString,
							  'publicador'=>$result->ObjetoPerdidoModelo->publicador,
							  'id_lugar'=>$result->ObjetoPerdidoModelo->id_lugar,
							  'estado'=>$result->ObjetoPerdidoModelo->estado,
							  'foto'=>$result->ObjetoPerdidoModelo->foto);
	return $losproductos;
}

function alumnosDeta($id)
{
	$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";
	$client=new SoapClient($wsdl);
	$parametro = array('id' => $id);
	$result=$client->selectAlumnosid($parametro)->selectAlumnosidResult;

		$losproductos = array(
							  'id'=>$result->AlumnoModelo->id,
							  'nombre'=>$result->AlumnoModelo->nombre,
							  'apellidoP'=>$result->AlumnoModelo->apellidoP,
							  'apelldioM'=>$result->AlumnoModelo->apelldioM,
							  'Foto'=>$result->AlumnoModelo->Foto,
							  'usuario'=>$result->AlumnoModelo->usuario,
							  'correo'=>$result->AlumnoModelo->correo);
		//falta estado 
	return $losproductos;
}

?>