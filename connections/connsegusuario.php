<?php

//Para local******************
/* $host = "localhost";
$user = "polsistemas";
$pass = "z2CEv7awlw1qPzPd"; */

//*****************************

//Para producción**************
 //$host = "localhost";
 $host = "192.168.0.111";
 $user = "usexptes";
 $pass = "7EuP4daxh3QRSZMj";
//*****************************
$dbname = "segusuario";

$conexion = new mysqli($host, $user, $pass, $dbname);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}


?>
