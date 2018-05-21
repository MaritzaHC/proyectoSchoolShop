	<?php @session_start(); 

if (@$_SESSION['loggedin'] != true && @$_SESSION['tipo'] != 4) {
	header('Location: ../../index.php');
} 
