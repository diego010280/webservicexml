<?php


  $existedenunciamp="SELECT COUNT(*) as 'valor' FROM surc.surc_sumario
                    where surc.surc_sumario.SURC_Sumario_NroDenunciaMP LIKE '$Table[denunciaId]';";

  if ($yaexistedenunciamp=mysqli_query($conex_surc,$existedenunciamp)) {

    $row_yaexistedenunciamp=mysqli_fetch_array($yaexistedenunciamp);
    // echo $row_yaexistedenunciamp['valor'];
  }else {
      $xml_t_errormysql="Error: La ejecución de la consulta si existe denuncia falló debido a:".mysqli_error($conex_surc);
  }




 ?>
