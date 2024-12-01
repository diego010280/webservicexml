<?php


      $id_juzg_dbgral="SELECT * FROM db_gral.juzgados
                      where juzgado_IdMinPub='$Sumario_IdJuzFis';";

      if ($dbgral_juzgados=mysqli_query($conex_dbgral,$id_juzg_dbgral)) {

          $row_dbgral_juzgados=mysqli_fetch_array($dbgral_juzgados);
          $num_row_dbgral_juzgados=$dbgral_juzgados->num_rows;
          // echo $num_row_dbgral_juzgados.'<br>';
          // echo('<pre>');
          // var_dump($row_dbgral_juzgados);
          // echo('</pre>');

                if ($num_row_dbgral_juzgados>0) {
                      if (!empty($row_dbgral_juzgados['juzgados_surc'])) {

                        $SURC_Sumario_IdJuzFis=$row_dbgral_juzgados['juzgados_surc'];
                        $SURC_Sumario_DescripJuzFis=$row_dbgral_juzgados['juzgados_desc'];
                      }else {//debe insertar en surc juzgados
                            // echo "es vacio surc juzgados dbgral".'<br>';
                            include ('verificar_siexiste_juzg.php');
                      }
                }else {//no existe juzgado de mp en tabla db general
                    include ('verificar_siexiste_juzg2.php');

                }


      }else {

         $xml_t_errormysql="Error: La ejecución de la consulta a db_gral debido a:".mysqli_error($conex_dbgral);
       }




 ?>
