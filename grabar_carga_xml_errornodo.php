<?php

  mysqli_query($conex_xml,"SET NAMES 'utf8'");
  $xml_t_errormysql=mb_convert_encoding("mysqli_real_escape_string($conex_xml,$xml_t_errormysql)",'UTF-8', 'ISO-8859-1');
  $insert_xml_alta="INSERT INTO xml_auditoria(
        xml_auditoria_nroxml,xml_auditoria_codigo,xml_auditoria_errormysql,
        xml_auditoria_ubicacion,xml_auditoria_estado)

        VALUES (NULLIF('$denunciaId',0),0,NULLIF('$xml_t_errormysql',''),0)";


   if (!mysqli_query($conex_xml,$insert_xml_alta)) {
        $xml_t_errormysql="Error: La ejecución de la ALTA DE CARGA EN TABLA XML AUDITORIA debido a:".mysqli_error($conex_xml);

   }else {
     $xml_t_errormysql='';
   }


 ?>
