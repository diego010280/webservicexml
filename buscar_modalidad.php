<?php
      $modalidad="SELECT * FROM surc.surc_modalidad
                  where surc.surc_modalidad.SURC_Modalidad_IdMP='$Sumario_IdModalidad';";

      if ($surc_modalidad=mysqli_query($conex_surc,$modalidad)) {

            $row_surc_modalidad=mysqli_fetch_array($surc_modalidad);
            $num_row_surc_modalidad=$surc_modalidad->num_rows;
            if ($num_row_surc_modalidad>0) {

                $SURC_Sumario_IdModalidad = $row_surc_modalidad['SURC_Modalidad_Id'];
                $SURC_Sumario_DescripModalidad = $row_surc_modalidad['SURC_Modalidad_Descrip'];
                //armar tabla de modalidades del mp

            }else {
              // $SURC_Sumario_IdModalidad = 80; // SIN DEFINICION
		          // $SURC_Sumario_DescripModalidad = "SIN DEFINCION";
              if (!empty($Sumario_IdModalidad)) {
                   include ('alta_modalidadsurc.php');
                   $SURC_Sumario_IdModalidad = 80; // SIN DEFINICION
     		           $SURC_Sumario_DescripModalidad = "SIN DEFINCION";
              }else {
                $SURC_Sumario_IdModalidad = 80; // SIN DEFINICION
  		          $SURC_Sumario_DescripModalidad = "SIN DEFINCION";
              }

            }
      }else {
         $xml_t_errormysql="Error: La ejecución de la consulta falló debido a:".mysqli_error($conex_surc);
      }

 ?>
