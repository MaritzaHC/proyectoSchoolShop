
<div id="inicio">
	<?php  include 'verificacionLogin.php';?>
		<div class="logo">
			<img src="..\..\imagenes\logo.png" onclick="irPagina('notificaciones')">
			<p onclick="irPagina('notificaciones')">SchoolShop</p>
		</div>
		<div class="cerrar"><a href="../php/base/salir.php">Salir</a></div>
		<div class="notificacion">
			<img src="..\..\imagenes\campana.png" onclick="irPagina('notificaciones')">
		</div>
		<div class="cuenta" onclick="irPagina('cuenta')">
			<img src="..\..\imagenes\cuenta.png">
			<p>Mi cuenta</p>
		</div>
	</div>
	<div id="barraMenu">
		<div class="comerciantes" onclick="irPagina('comerciantes')"><p>Comerciantes</p></div>
		<div class="almacenistas" onclick="irPagina('almacenistas')"><p>Almacenistas</p></div>
		<div class="alumnos" onclick="irPagina('alumnos')"><p>Alumnos</p></div>
		<div class="restricciones" onclick="irPagina('restricciones')"><p>Restricciones</p></div>
		<div class="estadisticas" onclick="irPagina('estadisticas')"><p>Estadisticas</p></div>
		<div class="categorias" onclick="irPagina('categorias')"><p>Categorias</p></div>
		<div class="lugares" onclick="irPagina('lugares')"><p>Lugares</p></div>
	</div>
