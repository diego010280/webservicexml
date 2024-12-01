<?php

  $ref_carga_complementario='';

// mysqli_query($conex_surc,"SET NAMES 'utf8'");

  $busca_id_sumario="SELECT MAX(surc.surc_sumario.SURC_Sumario_Id) as 'id' FROM surc.surc_sumario";

  $existe_unique="SELECT COUNT(*) as 'valor' FROM surc.surc_sumario
                  WHERE (surc.surc_sumario.SURC_Sumario_Anio='$SURC_Sumario_AnioAct') and (surc.surc_sumario.SURC_Sumario_IdDependencia='$SURC_Sumario_IdDepCompl')
                  and (surc.surc_sumario.SURC_Sumario_NroSumMP like '$SURC_Sumario_NroSumMPAct') and (surc.surc_sumario.SURC_Sumario_IdTipoSumario=2);";

if ($yaexiste_unique=mysqli_query($conex_surc,$existe_unique)) {

  $row_yaexiste_unique=mysqli_fetch_array($yaexiste_unique);

  if ($row_yaexiste_unique['valor']==0){


            if ($Id_surc_sumario = mysqli_query($conex_surc,$busca_id_sumario)) {


                    if ($row = mysqli_fetch_array($Id_surc_sumario)) {
                    $id_sum = trim($row[0]);
                    $SURC_Sumario_Id_nuevo=$id_sum+1;
                    }

                    // echo 'SURC_Sumario_Id_nuevo:'.$SURC_Sumario_Id_nuevo.'<br>';

                    if ($SURC_Sumario_IdDependencia==$SURC_Sumario_IdDepCompl) {
                      $SURC_Sumario_TextoRelato	= "DERIVADO POR SURC - AP Complementaria por Cambio de Numeración de A.P.Nro: ".$SURC_Sumario_NroSumMP." Año: ".$SURC_Sumario_Anio." Dependencia: ".$SURC_Sumario_DescripDependencia." *****";

                    }else {
                      $SURC_Sumario_TextoRelato	= "DERIVADO POR SURC - AP Complementaria por Derivación de Denuncia de A.P.Nro: ".$SURC_Sumario_NroSumMPAct." Año: ".$SURC_Sumario_AnioAct." Dependencia: ".$SURC_Sumario_DescripDependenciaCompl." *****";
                    }

                    // echo "SURC_Sumario_TextoRelato procesado en complemento:".$SURC_Sumario_TextoRelato.'<br>';
                    //*********************************************************************************************************************************//

                    mysqli_query($conex_surc,"SET NAMES 'utf8'");
                    $SURC_Sumario_HoraSum_sumar=date('H:i:s');
                    $SURC_Sumario_HoraSum='1000-01-01'.' '.date('H:i:s',strtotime("$SURC_Sumario_HoraSum_sumar + 3 hours"));

                    $insert_surc_sum="INSERT INTO surc_sumario(
                          SURC_Sumario_Id,SURC_Sumario_NroSumMP,SURC_Sumario_NroDenunciaMP,
                          SURC_Sumario_Anio,SURC_Sumario_IdDependencia,SURC_Sumario_IdTipoSumario,
                          SURC_Sumario_IdOrigSum,SURC_Sumario_TextoRelato,SURC_Sumario_IdTipoDelitoMP,
                          SURC_Sumario_IdLocalidad,SURC_Sumario_FechaSum,SURC_Sumario_HoraSum,
                          SURC_Sumario_CargaUsuario,SURC_Sumario_IdJuzFis,SURC_Sumario_IdLugar,
                          SURC_Sumario_IdArmaMec,SURC_Sumario_IdCondClim,SURC_Sumario_IdModoProd,
                          SURC_Sumario_IdModalidad,SURC_Sumario_IdHechoDel,SURC_Sumario_IdFormaAcc,
                          SURC_Sumario_IdVehicHecho,SURC_Sumario_IdCuadricula)

                          VALUES (
                          '$SURC_Sumario_Id_nuevo','$SURC_Sumario_NroSumMPAct',CONCAT('$Table[denunciaId]','_C'),
                          '$SURC_Sumario_AnioAct','$SURC_Sumario_IdDepCompl',2,
                          100,'$SURC_Sumario_TextoRelato',29,
                          8,curdate(),'$SURC_Sumario_HoraSum',
                          '',135,36,
                          12,7,5,
                          80,78,3,
                          11,1000)";


                     if (!mysqli_query($conex_surc,$insert_surc_sum)) {
                          $xml_t_errormysql="Error: La ejecución de la ALTA DE COMPLEMENTARIA debido a:".mysqli_error($conex_surc);

                     }else {
                        $ref_carga_complementario='******Se dio alta complementario _C******';
                        // echo 'ref_carga_complementario:'.$ref_carga_complementario.'<br>';
                     }


            }else {
              $xml_t_errormysql="Error: La ejecución de la consulta busqueda ultimo id surc_sumario falló debido a:".mysqli_error($conex_surc);
            }
    }
}else {
  $xml_t_errormysql="Error: La ejecución de la consulta para buscar si existe la denuncia en carga_complementario falló debido a:".mysqli_error($conex_surc);
}






 ?>
