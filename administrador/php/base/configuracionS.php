<?php
include '../../../Consultas/conexion.php';

$finSe = $_POST['finSe'];
$iniSe = $_POST['iniSe'];
echo $iniSe;
if(!$mysqli->query("call fechas('$iniSe')")){echo "no";}
if(!$mysqli->query("call restriccionD()")){echo "noo";}
	