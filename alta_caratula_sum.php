<?php

$ref_altacaratula='';

  mysqli_query($conex_surc,"SET NAMES 'utf8'");


  $verificar_existe="SELECT COUNT(*) as 'valor' FROM surc.surc_caratulas
                      where surc_caratulas_id_sum='$SURC_Sumario_Id';";

  if ($yaexiste_sum=mysqli_query($conex_surc,$verificar_existe)) {

      $row_yaexiste_sum=mysqli_fetch_array($yaexiste_sum);

      if (($row_yaexiste_sum['valor']==0) and (!empty($nombredelito))) {

            $insert_caratula="INSERT INTO surc_caratulas(
              surc_caratulas_id_sum, surc_caratulas_desc)

              VALUES (
              '$SURC_Sumario_Id','$nombredelito')";

              if (mysqli_query($conex_surc,$insert_caratula)) {
                  $ref_altacaratula='***Se dio alta caratulas***';
              }else {
                  $xml_t_errormysql="Error: La ejecución de la ALTA DE CARATULA de sumarios surc debido a:".mysqli_error($conex_surc);
              }

      }

  }else {
     $xml_t_errormysql="Error: La ejecución de la consulta buscando si existe el sum en tabla caratulas:".mysqli_error($conex_surc);
  }


 ?>
