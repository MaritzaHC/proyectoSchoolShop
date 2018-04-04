<!DOCTYPE html>
<html>
<head>
	<title>SchoolShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\categorias.css">
	<link rel="stylesheet" type="text/css" href="..\css\muestraInicio.css">
	<script type="text/javascript" src="..\..\javaScript\jquery-3.2.1.js"></script>
	<script type="text/javascript" src="..\javaScript\funcionesEstudiante.js"></script>
	<meta charset="utf-8">
</head>	
<body>
<?php include '..\paginas\primeraBarra.html';
	  include '..\paginas\segundaBarra.html';
	  require 'base/inicio.php';
	  require 'base/buscar.php'; 

	  if (!empty($_GET["buscar"])) {
	  		if ($_REQUEST["i"]=="compras"){buscarProductos();}
	  		elseif ($_REQUEST["i"]=="pedidos"){buscarPedidos();}
	  		elseif ($_REQUEST["i"]=="objetos"){buscarObjetos();}
	  }
	  elseif ($_REQUEST["i"]=="compras"){mostrarProductos();}
	  elseif ($_REQUEST["i"]=="pedidos"){mostrarPedidos();}
	  elseif ($_REQUEST["i"]=="objetos"){mostrarObjetos(); }
?>	
</body>
</html>
	