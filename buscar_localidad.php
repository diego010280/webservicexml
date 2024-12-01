<?php

      $ref_localidad="SELECT * FROM dbseg.ref_localidad
      where dbseg.ref_localidad.Localidad_Descrip like '$SURC_Sumario_DescripLocalidad';";

      if ($dbsegref_localidad=mysqli_query($conex_dbseg,$ref_localidad)) {

          $row_dbsegref_localidad=mysqli_fetch_array($dbsegref_localidad);
          $num_dbsegref_localidad=$dbsegref_localidad->num_rows;

          if ($num_dbsegref_localidad>0) {
              $SURC_IdLocalMP=$row_dbsegref_localidad['Localidad_Codigo'];
          }else {
              $SURC_IdLocalMP = 8; // SALTA
            //agregar las localidades tabla aux
            //$xml_t_errormysql="Error: No se encuentra id en tabla ref_localidad de MP agregarlo:".$SURC_Sumario_DescripLocalidad;

          }
      }else {
        $xml_t_errormysql="Error: La ejecución de la consulta falló debido a:".mysqli_error($conex_surc);
      }

 ?>
