<?php

//***************************************ref_dependencia**************************************************************//
            $ref_dependencias_origen="SELECT * FROM dbseg.ref_dependencias
                              where dbseg.ref_dependencias.DepPol_IdMinPub='$SURC_IdDepOrigen';";

            if ($dbseg_ref_dependencias_origen=mysqli_query($conex_dbseg,$ref_dependencias_origen)) {

                        $row_dbseg_ref_dependencias_origen=mysqli_fetch_array($dbseg_ref_dependencias_origen);
                        $num_dbseg_ref_dependencias_origen=$dbseg_ref_dependencias_origen->num_rows;

                        if ($num_dbseg_ref_dependencias_origen>0) {
                                   $SURC_Sumario_IdDependencia=$row_dbseg_ref_dependencias_origen['DepPol_Codigo'];
                                   $SURC_Sumario_DescripDependencia=utf8_encode(mysqli_real_escape_string($conex_dbseg,$row_dbseg_ref_dependencias_origen['DepPol_Descrip']));

                        }else {
                                  // $SURC_Sumario_IdDependencia = 1	// JEFATURA DE POLICIA
                            include ('alta_dependencia_refdep.php');        
                            // $xml_t_errormysql="Error: No se encuentra id en tabla ref_dependencia surc-ingreso un id de MP:".$SURC_IdDepOrigen;

                        }

            }else {
               $xml_t_errormysql="Error: La ejecución de la consulta refe_dependencia origen falló debido a:".mysqli_error($conex_dbseg);

            }
  //************************************************************************************************************************************************************//


 ?>
