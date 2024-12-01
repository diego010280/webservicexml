<?php

switch ($Tipo_Error) {
      case '1':
            $xml_t_errormysql=$Error;
            $insert_xml_alta="INSERT INTO xml_auditoria(
                  xml_auditoria_codigo,xml_auditoria_errormysql,
                  xml_auditoria_estado)
            
                  VALUES (1,NULLIF('$xml_t_errormysql',''),0)";
            break;

      case '5':
            $xml_t_errormysql='ERROR CONSULTA ULTIMO ID DENUNCIA CARGADOMIA';
            $insert_xml_alta="INSERT INTO xml_auditoria(
                  xml_auditoria_codigo,xml_auditoria_errormysql,
                  xml_auditoria_estado)
            
                  VALUES (5,NULLIF('$xml_t_errormysql',''),0)";
            break;
      
      case '0':
               
            mysqli_query($conex_xml,"SET NAMES 'utf8'");
            $xml_t_errormysql=mysqli_real_escape_string($conex_xml,$xml_t_errormysql);
            
            $insert_xml_alta="INSERT INTO xml_auditoria(
                              xml_auditoria_nroxml,xml_auditoria_codigo,xml_auditoria_errormysql,
                              xml_auditoria_estado)

                              VALUES (NULLIF('$Table[denunciaId]',0),0,NULLIF('$xml_t_errormysql',''),0)";


            if (!mysqli_query($conex_xml,$insert_xml_alta)) {
                         $xml_t_errormysql="Error: La ejecución de la ALTA DE CARGA EN TABLA XML AUDITORIA debido a:".mysqli_error($conex_xml);

            }else {
                        $xml_t_errormysql='';
            }
            break;
}

?>