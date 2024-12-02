<?php
    $ref_altasumnuevo='';

    mysqli_query($conex_surc,"SET NAMES 'utf8'");

    $max_surc_sumario = "SELECT MAX(surc.surc_sumario.SURC_Sumario_Id) as 'id' FROM surc.surc_sumario";

    $existe_unique="SELECT COUNT(*) as 'valor' FROM surc.surc_sumario
                    WHERE (surc.surc_sumario.SURC_Sumario_Anio='$SURC_Sumario_Anio') and (surc.surc_sumario.SURC_Sumario_IdDependencia='$SURC_Sumario_IdDependencia')
                    and (surc.surc_sumario.SURC_Sumario_NroSumMP like '$SURC_Sumario_NroSumMP') and (surc.surc_sumario.SURC_Sumario_IdTipoSumario='$SURC_Sumario_IdTipoSumario');";


 if ($yaexiste_unique=mysqli_query($conex_surc,$existe_unique)) {

  /* agregar include dependencia */

       $row_yaexiste_unique=mysqli_fetch_array($yaexiste_unique);

       if ($row_yaexiste_unique['valor']==0){

                     if ($Id_surc_sumario = mysqli_query($conex_surc,$max_surc_sumario)) {
                        // echo "ingreso".'<br>';

                       if ($row = mysqli_fetch_array($Id_surc_sumario)) {
                       $id_sumario = trim($row[0]);
                       $SURC_Sumario_Id=$id_sumario+1;
                       }

                       // echo 'SURC_Sumario_Id es igual a'.$SURC_Sumario_Id.'<br>';
                       $SURC_Sumario_HoraSum_sumar=date('H:i:s');
                       // echo "SURC_Sumario_HoraSum_sumar:".$SURC_Sumario_HoraSum_sumar.'<br>';
                       $SURC_Sumario_HoraSum='1000-01-01'.' '.date('H:i:s',strtotime("$SURC_Sumario_HoraSum_sumar + 3 hours"));
                       $SURC_Sumario_HoraSum=trim($SURC_Sumario_HoraSum);
                       // echo "SURC_Sumario_HoraSum:".$SURC_Sumario_HoraSum.'<br>';

                       $insert_surc_sumario="INSERT INTO surc_sumario(
                         SURC_Sumario_Id, SURC_Sumario_NroSumMP, SURC_Sumario_NroDenunciaMP,
                         SURC_Sumario_Anio, SURC_Sumario_IdDependencia,SURC_Sumario_IdTipoSumario,
                         SURC_Sumario_IdTipoDelitoMP,SURC_Sumario_CoordX,SURC_Sumario_CoordY,
                         SURC_Sumario_NomCalle,SURC_Sumario_FechaSum,SURC_Sumario_HoraSum,
                         SURC_Sumario_FechaDel,SURC_Sumario_HoraDel,SURC_Sumario_IdLocalidad,
                         SURC_Sumario_IdJuzFis,SURC_Sumario_IdOrigSum,SURC_Sumario_TextoRelato,
                         SURC_Sumario_IdHechoDel,SURC_Sumario_IdLugar,SURC_Sumario_IdArmaMec,
                         SURC_Sumario_IdCondClim,SURC_Sumario_IdModoProd,SURC_Sumario_IdModalidad,
                         SURC_Sumario_IdFormaAcc,SURC_Sumario_IdVehicHecho,SURC_HechoDelictivo_VIF,
                         SURC_Sumario_ViolGenero,SURC_Sumario_AlertaVideoVig,SURC_Sumario_MedidasSolVict,
                         SURC_Sumario_ConSecuestros,SURC_Sumario_ConDetenidos,SURC_Sumario_Testigo1,
                         SURC_Sumario_Testigo2,SURC_Sumario_Tentativa,SURC_Sumario_IdCuadricula,
                         SURC_Sumario_Resultado,SURC_Sumario_NroDciaMPVinculo,SURC_Sumario_Codigo,SURC_Sumario_IdTipoActasEscl)

                         VALUES (
                         '$SURC_Sumario_Id','$SURC_Sumario_NroSumMP','$denunciaID_MP',
                         '$SURC_Sumario_Anio','$SURC_Sumario_IdDependencia','$SURC_Sumario_IdTipoSumario',
                         '$SURC_IdHechoDelMP','$SURC_Sumario_CoordX','$SURC_Sumario_CoordY',
                         '$SURC_Sumario_NomCalle',curdate(),'$SURC_Sumario_HoraSum',
                         '$SURC_Sumario_FechaDel','$SURC_Sumario_HoraDel','$SURC_IdLocalMP',
                         '$SURC_Sumario_IdJuzFis','$SURC_Sumario_IdOrigSum',NULLIF('$SURC_Sumario_TextoRelato',''),
                         '$SURC_Sumario_IdTipoDelitoMP','$SURC_Sumario_Idlugar',12,
                         7,5,'$SURC_Sumario_IdModalidad',
                         3,11,'$SURC_HechoDelictivo_VIF',
                         '$SURC_Sumario_ViolGenero','$SURC_Sumario_AlertaVideoVig',NULLIF('$SURC_Sumario_MedidasSolVict',''),
                         '$SURC_Sumario_ConSecuestros','$SURC_Sumario_ConDetenidos',NULLIF('$SURC_Sumario_Testigo1',''),
                         NULLIF('$SURC_Sumario_Testigo2',''),'$SURC_Sumario_Tentativa',1000,
                         NULLIF('$SURC_Sumario_Resultado',''),NULLIF('$SURC_Sumario_NroDciaMPVinculo',''),'$SURC_Sumario_Codigo',1
                         )";

                         if (mysqli_query($conex_surc,$insert_surc_sumario)) {
                                $ref_altasumnuevo='***creacion de sumario nuevo***';
                                include ('alta_caratula_sum.php');
                                include ('alta_tipo_conceptual.php');
                                

                                if (empty($xml_t_errormysql)) {//error alta de caratula
                                      include ('alta_personas_nuevoxml.php');

                                      if (empty($xml_t_errormysql)) {//error en alta de personas nuevo xml

                                                include ('analisis_elemento.php');

                                                if (empty($xml_t_errormysql)) {

                                                       include ('analisis_ampliacion.php');
                                                       if (empty($xml_t_errormysql)) {

                                                           include ('datos_diligencias.php');
                                                           if (empty($xml_t_errormysql)) {

                                                                   include ('datos_estados.php');
                                                                   if (!empty($xml_t_errormysql)) {
                                                                       // errores estados...
                                                                       $error='estados';
                                                                       include ('eliminar_cargas_nuevoxml.php');
                                                                   }
                                                           }else {
                                                             $error='diligencias';
                                                             include ('eliminar_cargas_nuevoxml.php');
                                                             // errores diligencias...
                                                           }

                                                       }else {
                                                         // errores ampliacioones...
                                                         $error='ampliaciones';
                                                         include ('eliminar_cargas_nuevoxml.php');

                                                       }

                                                 }else {
                                                   $error='elementos';
                                                   // errores elementos...
                                                   include ('eliminar_cargas_nuevoxml.php');
                                                 }


                                      }else {
                                        $error='persona';
                                        // eliminar persona sumario elemento y sumario...
                                        include ('eliminar_cargas_nuevoxml.php');
                                      }

                                }



                         }else {

                            $xml_t_errormysql="Error: La ejecución de la ALTA DE SUMARIO GRABAR XML debido a:".mysqli_error($conex_surc);
                            if (!empty($ref_carga_complementario)) {
                                    $ref_eliminarsumario_nuevo='';

                                    $id_borrar_surc_sum_compl="DELETE FROM surc_sumario WHERE SURC_Sumario_Id = '$SURC_Sumario_Id_nuevo';";

                                    if ($sum_id_borrar_surc_sum_compl=mysqli_query($conex_surc,$id_borrar_surc_sum_compl)) {
                                        $ref_eliminarsumario_nuevo=$ref_eliminarsumario_nuevo.'Se elimino sumarioid complemento de tabla surc_sumario por errores';
                                    }else {
                                      $xml_t_errormysql="Error: La ejecución del DELETE surc_sumario complemento falló debido a:".mysqli_error($conex_surc);
                                    }
                            }
                         }

                     }else {
                       $xml_t_errormysql="Error: La ejecución de la consulta buscando el maximo id surc_sumario:".mysqli_error($conex_surc);
                     }

       }else {
         // echo "existe sumaria año dependencia  numero de sumario mp y tipo de sumario...".'<br>';
         //existe sumaria año dependencia  numero de sumario mp y tipo de sumario...
         include ('SURC_Sumario_BuscaGrabaDciaXML.php');
             if (empty($xml_t_errormysql)) {
                 include ('analisis_ampliacion.php');
                 if (empty($xml_t_errormysql)) {
                     include ('datos_diligencias_unique.php');
                     if (empty($xml_t_errormysql)) {
                          include ('datos_estados.php');
                     }
                 }
             }

       }

 }else {
   $xml_t_errormysql="Error: La ejecución de la consulta buscando si existe el unique compuesto surc_sumario:".mysqli_error($conex_surc);
 }



 ?>
