<?php


  $ref_dependencias_destino="SELECT * FROM dbseg.ref_dependencias
        where dbseg.ref_dependencias.DepPol_IdMinPub='$SURC_IdDepDestino';";

  if ($dbseg_ref_dependencias_destino=mysqli_query($conex_dbseg,$ref_dependencias_destino)) {

            $row_dbseg_ref_dependencias_destino=mysqli_fetch_array($dbseg_ref_dependencias_destino);
            $num_dbseg_ref_dependencias_destino=$dbseg_ref_dependencias_destino->num_rows;

            if ($num_dbseg_ref_dependencias_destino>0) {

                  $SumarioComplementario="****** ACTA COMPLEMENTARIA Nº".$SURC_Sumario_NroSumMPAct." EN : ".utf8_encode(mysqli_real_escape_string($conex_dbseg,$row_dbseg_ref_dependencias_destino['DepPol_Descrip']))." *****";
                  $SURC_Sumario_IdDepCompl = $row_dbseg_ref_dependencias_destino['DepPol_Codigo'];
                  $SURC_Sumario_DescripDependenciaCompl=utf8_encode(mysqli_real_escape_string($conex_dbseg,$row_dbseg_ref_dependencias_destino['DepPol_Descrip']));


            }else {
                  // $SumarioComplementario = "****** ACTA COMPLEMENTARIA EN : ---SIN RELACIÓN--- *****";
                  // $SURC_Sumario_IdDepCompl = 1	// JEFATURA DE POLICIA
                  include ('alta_dependencia_refdep_dest.php');
                  // $xml_t_errormysql="Error: No se encuentra id en tabla ref_dependencia surc-ingreso un id de MP buscar dependencia destino:".$SURC_IdDepDestino;


            }
  }else {
    $xml_t_errormysql="Error: La ejecución de la consulta refe_dependencia destino falló debido a:".mysqli_error($conex_dbseg);
  }


 ?>
