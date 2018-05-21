<!DOCTYPE html>	
<html>
<head>
	<title>SchoolShop</title>
	<link rel="stylesheet" type="text/css" href="..\..\css\general.css">
	<link rel="stylesheet" type="text/css" href="..\css\categorias.css">
	<link rel="stylesheet" type="text/css" href="..\css\muestraInicio.css">
	<script type="text/javascript" src="..\..\javaScript\jquery-3.2.1.js"></script>
	<script type="text	/javascript" src="..\javaScript\funcionesEstudiante.js"></script>
	<meta charset="utf-8">
</head>	
<body>
<?php include '..\paginas\primeraBarra.php';
	  include '..\paginas\segundaBarra.html';
	  require 'base/inicio.php';
	  require 'base/buscar.php'; 

	  if (empty($_GET["pag"])){ $pag=1;}
	  else {$pag = $_GET['pag'];}

	  settype($pag, 'integer');
	  if (!empty($_GET["buscar"])) {
	  		if ($_REQUEST["i"]=="compras"){buscarProductos($_GET["buscar"],$pag);}
	  		elseif ($_REQUEST["i"]=="pedidos"){buscarPedidos($_GET["buscar"],$pag);}
	  		elseif ($_REQUEST["i"]=="objetos"){buscarObjetos($_GET["buscar"],$pag);}
	  }
	  elseif (!empty($_GET["categoria"])) {
	  	buscarCategoria($_GET["categoria"],$pag);
	  }
	  elseif ($_REQUEST["i"]=="compras"){@mostrarProductos(1,$pag);}
	  elseif ($_REQUEST["i"]=="pedidos"){@mostrarPedidos(2,$pag);}
	  elseif ($_REQUEST["i"]=="objetos"){@mostrarObjetos($pag); }
?>	
	<div class="center">
	  <div class="pagination">
	    <div onclick="pagina(0,variable('i'))" class="flechas" id="f1">Anterior</div>
	    <div onclick="pagina(1,variable('i'))" class="flechas" id="f2">Siguiente</div>
	  </div>
	</div>
</body>
<script type="text/javascript">
	if (variable("pag")==1) $("#f1").css("display","none");
	if (siguiente==1) $("#f2").css("display","none");
</script>
</html>
	