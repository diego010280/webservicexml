<?php

mysqli_query($conex_xml,"SET NAMES 'utf8'");

$xml_t_errormysql=utf8_encode(utf8_decode(mysqli_real_escape_string($conex_xml,$xml_t_errormysql)));
$insert_xml_alta="INSERT INTO xml_auditoria(
      xml_auditoria_codigo,xml_auditoria_errormysql,
      xml_auditoria_estado)

      VALUES (0,NULLIF('$xml_t_errormysql',''),0)";


?>