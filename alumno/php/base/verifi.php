<?php @session_start(); 
 if (@$_SESSION['loggedin'] == true && @$_SESSION['tipo'] == 1) {}
 	else {
 		header('Location: ../../../index.php');
 	}

?>
      