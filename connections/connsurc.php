<?php

//Local*****************************//
$host = "localhost";
$user = "polsistemas";
$pass = "z2CEv7awlw1qPzPd";

//**********************************//

//web**********************************//
// $host = "192.168.0.129";
// $user = "usuconsurc"; //LOCAL
// $pass = "u8WEpXYuzJrax6bK";//LOCAL

//*************************************//
$dbname = "surc";

$conex_surc = new mysqli($host, $user, $pass, $dbname);

if ($conex_surc->connect_error) {
 die("La conexion falló: " . $conex_surc->connect_error);
}

$conex_surc->set_charset("utf8");

?>
