<?php

mysqli_query($conex_xml,"SET NAMES 'utf8'");
$ref_altaorigensum='';

$buscar_si_esta="SELECT * FROM xml.xml_mp_origensumario
                where xml_mp_origensumario_idmp='$IdOrigSum';";

if ($origensum_buscar_si_esta=mysqli_query($conex_xml,$buscar_si_esta)) {

          $num_origensum_buscar_si_esta=$origensum_buscar_si_esta->num_rows;

          if ($num_origensum_buscar_si_esta=0) {
                    $insert_mp_origensum="INSERT INTO xml_mp_origensumario(
                          xml_mp_origensumario_idmp,xml_mp_origensumario_desc)

                          VALUES ('$IdOrigSum','$Desc_OrigSum')";


                     if (!mysqli_query($conex_xml,$insert_mp_origensum)) {
                          $xml_t_errormysql="Error: La ejecución de la ALTA DE XML ORIGEN SUM MP debido a:".mysqli_error($conex_xml);

                     }else {
                       $ref_altaorigensum='***Se dio de alta un origen de sumario nuevo para agregar a tabla***';
                     }
            }
}else {
    $xml_t_errormysql="Error: La ejecución de la busqueda si existe ya cargado el origen de sumario en XML ORIGEN SUM MP debido a:".mysqli_error($conex_xml);
}



 ?>
