<?php

    $SURC_Sumario_Codigo=trim($Table['codigo']);

    if ($SURC_Sumario_IdOrigSum==8) {
      $SURC_Sumario_IdTipoSumario=6;  //****vif
      $SURC_Sumario_IdHechoDel=104; //*****hecho vif
      $SURC_HechoDelictivo_VIF="S";

    }elseif ($SURC_Sumario_IdOrigSum==9) {
        $SURC_Sumario_IdTipoSumario=9; // ********* EXTRAVIO
        $SURC_Sumario_IdHechoDel=161; // ********* A CARATULAR - EXTRAVIO DE PERSONA
        $SURC_HechoDelictivo_VIF="N";

      }elseif ($SURC_Sumario_IdOrigSum==10) {
        $SURC_Sumario_IdTipoSumario=10; // ********* CONTRAVENCIONES
        $SURC_Sumario_IdHechoDel=$SURC_Sumario_IdTipoDelitoMP; // ********* A CARATULAR - EXTRAVIO DE PERSONA
        $SURC_HechoDelictivo_VIF="N";
    }else {
          if (empty($SURC_Sumario_IdTipoSumario)) {
                $SURC_Sumario_IdTipoSumario=1; //// ********* ACTUACION DE PREVENCION
              }else {
                  $SURC_Sumario_IdTipoSumario=$SURC_Sumario_IdTipoSumario+100; // ********* 101 APERTURA, 102 PROCEDIMIENTO VIA PUBLICA, 103 ALLANAMIENTO, 104 INFORME DE ESTUPEFACIENTE
            }
          $SURC_Sumario_IdHechoDel=$SURC_Sumario_IdTipoDelitoMP;
        }



    // switch ($SURC_Sumario_IdOrigSum) {
    //     case '8':
    //           $SURC_Sumario_IdTipoSumario=6;  //****vif
    //           $SURC_Sumario_IdHechoDel=104; //*****hecho vif
    //           $SURC_HechoDelictivo_VIF="S";
    //
    //       break;
    //
    //     case '9':
    //             $SURC_Sumario_IdTipoSumario=9; // ********* EXTRAVIO
    //             $SURC_Sumario_IdHechoDel=161; // ********* A CARATULAR - EXTRAVIO DE PERSONA
    //             $SURC_HechoDelictivo_VIF="N";
    //
    //       break;
    //
    //     case '10':
    //               $SURC_Sumario_IdTipoSumario=10; // ********* CONTRAVENCIONES
    //               $SURC_Sumario_IdHechoDel=$SURC_Sumario_IdTipoDelitoMP; // ********* A CARATULAR - EXTRAVIO DE PERSONA
    //               $SURC_HechoDelictivo_VIF="N";
    //
    //         break;
    //
    //     default:
    //           if (empty($SURC_Sumario_IdTipoSumario)) {
    //               $SURC_Sumario_IdTipoSumario=1; //// ********* ACTUACION DE PREVENCION
    //           }else {
    //               $SURC_Sumario_IdTipoSumario=$SURC_Sumario_IdTipoSumario+100; // ********* 101 APERTURA, 102 PROCEDIMIENTO VIA PUBLICA, 103 ALLANAMIENTO, 104 INFORME DE ESTUPEFACIENTE
    //           }
    //
    //           $SURC_Sumario_IdHechoDel=$SURC_Sumario_IdTipoDelitoMP;
    //
    //         break;
    //   }//cierra switch



// echo "ingreso alta sumario nuevo";
      include ('sumario_grabarMP_xml.php');






 ?>
