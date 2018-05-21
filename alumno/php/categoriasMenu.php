<div class="categorias"><h3>Categorias</h3>
	<?php 
		require_once 'base/consultasProductos.php';
		$c = array();
		$c = categorias();
		foreach ($c as $are) {
		    $idCategorias = $are['idCategorias'];
			$nombre = $are['nombre'];
			echo "<p onclick=\"window.location='inicio.php?categoria=$idCategorias&i=compras&pag=1'\">$nombre</p>";
		}
	?>
</div>