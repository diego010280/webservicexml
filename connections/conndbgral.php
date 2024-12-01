<?php
/* $host = "localhost";
$user = "usexptes";
$pass = "7EuP4daxh3QRSZMj"; */

$host = "192.168.0.111";
$user = "usexptes";
$pass = "7EuP4daxh3QRSZMj";


$dbname = "db_gral";


$conex_dbgral = new mysqli($host, $user, $pass, $dbname);

if ($conex_dbgral->connect_error) {
 die("La conexion falló: " . $conex_dbgral->connect_error);
}


 ?>
