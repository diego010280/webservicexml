<?php
// FTP server details

$ftpHost   = "192.168.0.80";

$ftpUsername = 'analisisftp';
$ftpPassword = 'iv-z+%d-hr';



// open an FTP connection
$connftp = ftp_connect($ftpHost) or die("La Conexión del ftp falló a: $ftpHost");



// close the connection
//ftp_close($connId);

 ?>
