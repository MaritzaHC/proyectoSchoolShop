<?php 

$nueva = rand(5, 25)."sc";
$correo = $_POST['email'];

mail ($correo , "Recuperacion de contraseña" , $nueva)

?>