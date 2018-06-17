<?php 
@session_start(); 
if (@$_SESSION['loggedin'] != true && @$_SESSION['tipo'] != 3) 
header('Location: ../../index.php');