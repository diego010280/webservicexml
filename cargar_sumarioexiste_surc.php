<?php
$ref_carga_complementario='';
$ref_altasumnuevo='';
$ref_altapersonasurc='';
$ref_surcsumpersonas='';
$ref_grabarpersonaextraviada='';
$ref_elemento='';
$ref_ampliacion='';
$ref_diligencias='';
$ref_estados='';
$ref_grabarderivadocambionro='';
$ref_eliminarsumariorepetidos='';
$ref_upd_de_laderivada='';
$ref_eliminarsumario_nuevo='';
$SumarioComplementario='';
$SURC_Sumario_TextoRelato='';
$SURC_Sumario_Id='';
$ref_altasumnuevo='';
$ref_actualiz_delito='';
$ref_altacaratula='';
$ref_altamodalidad ='';
$ref_altadependencia ='';
$ref_altaorigensum ='';


              //*********************************************busquedaid de sumario*******************************************************************************************************************************************//
$denunciaID_MP=trim($Table['denunciaId']);
// echo $denunciaID_MP.'<br>';
                $id_sum="SELECT surc.surc_sumario.SURC_Sumario_Id,surc.surc_sumario.SURC_Sumario_Anio,
                surc.surc_sumario.SURC_Sumario_NroDenunciaMP,
                surc.surc_sumario.SURC_Sumario_IdDependencia,
                surc.surc_sumario.SURC_Sumario_IdTipoSumario,
                surc.surc_sumario.SURC_Sumario_IdOrigSum
                 FROM surc.surc_sumario
                         where surc.surc_sumario.SURC_Sumario_NroDenunciaMP LIKE '$Table[denunciaId]';";

  if ($id_sumario=mysqli_query($conex_surc,$id_sum)) {

              $row_id_sumario=mysqli_fetch_array($id_sumario);
              // echo $row_id_sumario['SURC_Sumario_Id'].'<br>';
              $SURC_Sumario_Id=intval($row_id_sumario['SURC_Sumario_Id']);
              // echo $SURC_Sumario_Id.'<br>';
              //*********************************************************************************************************************************************************************************************************//

              //**************************************************datos ampliaciones*******************************************************************************************************************************************************//
          include ('analisis_ampliacion.php');


          if (empty($xml_t_errormysql)) {//1
              // echo "PASO A DILIGENCIAS".'<BR>';
                //++++++++++++++++++++++++++++++++++++++++DILIGENCIAS***********************************************************//
                include ('datos_diligencias_unique.php');
                // include ('diligencias_existexml.php');

                //**************************************************************************************************************//
                if (empty($xml_t_errormysql)) {//2
                    // echo "paso a estados".'<br>';
                   //++++++++++++++++++++++++++++++++++++++++Estados***********************************************************//
                   // include ('estados_existexml.php');
                   include ('datos_estados.php');

                   //**************************************************************************************************************//
                   if (empty($xml_t_errormysql)) {// 3
                        // echo "paso a derivaciones y cambio de numero";
                       //	**************** Inicio DATOS DERIVACIONES Y/O CAMBIO NÚMERO************************************************//
                       include ('derivacion_cambionroxml.php');


                       //**************************************************************************************************************//
                   }//cierra if 3


                }//cierra if 2

          }//cierra if de error 1




  }else {
    $xml_t_errormysql="Error: La ejecución de la consulta si existe id_sumario de la bd falló debido a:".mysqli_error($conex_surc);
  }



 ?>
