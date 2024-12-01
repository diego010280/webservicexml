<?php

  $hechodelictivo="SELECT * FROM surc.surc_hechodelictivo
                    where surc.surc_hechodelictivo.SURC_HechoDelictivo_IdTipoDeli='$SURC_IdHechoDelMP';";

  if ($surc_hechodelictivo=mysqli_query($conex_surc,$hechodelictivo)) {

    $row_surc_hechodelictivo=mysqli_fetch_array($surc_hechodelictivo);
    $num_surc_hechodelictivo=$surc_hechodelictivo->num_rows;


    if ($num_surc_hechodelictivo>0) {

      $SURC_Sumario_IdTipoDelitoMP = $row_surc_hechodelictivo['SURC_HechoDelictivo_Id'];
      $SURC_Sumario_DescripTipoDelitoMP = $row_surc_hechodelictivo['SURC_HechoDelictivo_Descrip'];

      // echo $SURC_Sumario_IdTipoDelitoMP.'<br>';

    }else {

       $xml_t_errormysql="Error: No se encuentra id en tabla surc_hechodelictivo de MP agregarlo:".$SURC_IdHechoDelMP;
    }

  }else {
   $xml_t_errormysql="Error: La ejecución de la consulta surc_hechodelictivo falló debido a:".mysqli_error($conex_surc);
}
 ?>
