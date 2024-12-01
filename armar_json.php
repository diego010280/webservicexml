<?php

$json='';
$tamaño_array_delito="";

$json='{   
    "Error":"" ,
    "Denuncias":[
        {
         "denunciaId":'.$denunciaId.',
         "tipoDenuncia":'.$tipoDenuncia.',
         "tipoDenunciaNombre":"'.$tipoDenunciaNombre.'",
         "actaNro":'.$actaNro.',
         "anio":'.$Anio.',
         "dependenciaCargaId":'.$dependenciaCargaId.',
         "dependenciaCargaSigla":"'.$dependenciaCargaSigla.'",
         "dependenciaCargaNombre":"'.$dependenciaCargaNombre.'",
         "fchRegistro":"'.$fchRegistro.'",
         "fchRegistro_str":".'.$fchRegistro_str.'",
         "fchConfirmacion":"'.$fchConfirmacion.'",
         "fchConfirmacion_str":"'.$fchConfirmacion_str.'",
         "hrExacta":"'.$hrExacta.'",
         "fchHrHecho":"'.$fchHrHecho.'",
         "fchHrHecho_str":"'.$fchHrHecho_str.'",
         "hrHechoLibre":"'.$hrHechoLibre.'",
         "lugarDelHecho":"'.$lugarDelHecho.'",
         "departamentoId":'.$DepartamentoId.',
         "departamentoNombre":"'.$DepartamentoNombre.'",
         "localidadId":'.$LocalidadId.',
         "localidadNombre":"'.$LocalidadNombre.'",
         "barrioId":'.$BarrioId.',
         "barrioNombre":"'.$barrioNombre.'",
         "calleId":'.$CalleId.',
         "calleNombre":"'.$CalleNombre.'",
         "lugarNro":"'.$LugarNro.'",
         "latitud":'.$latitud.',
         "longitud":'.$longitud.',
         "esViolenciaFamiliar":'.$esViolenciaFamiliar.',
         "esViolenciaDeGenero":'.$esViolenciaDeGenero.',
         "alertadosPorSistemaVideoVigilancia":'.$alertadosPorSistemaVideoVigilancia.',
         "fiscaliaIntervinienteId":'.$FiscaliaIntervinienteId.',
         "fiscaliaIntervinienteNombre":"'.$FiscaliaIntervinienteNombre.'",
         "codigo":"'.$codigo.'",
         "actaNroActual":'.$actaNroActual.',
         "AnioActual":'.$AnioActual.',
         "dependenciaActualId":'.$dependenciaActualId.',
         "dependenciaActualSigla":"'.$dependenciaActualSigla.'",
         "dependenciaActualNombre":"'.$dependenciaActualNombre.'",
         "delitos":[';
         
// ***************DELITO****************************************************************************************//

         $tamaño_array_delito= count($Table1);
         $contador=0;
         echo "tamaño array delitos es ".$tamaño_array_delito.'<br>';        
         foreach ($Table1 as $nodotable => $valor) {
            $contador++;
            $json=$json.'{';
              foreach ($valor as $key => $value) {
                            echo "estes es el array".$nodotable."y su elemento es".$key."=$value"."<br>";

                            switch ($key) {
                                case 'delitoId':
                                    $json=$json.'"delitoId":'.$value.',';
                                    break;
                        
                        
                                case 'nombre':
                                    $json=$json.'"nombre":"'.$value.'",';
                                   
                                    break;
                                
                                case 'tentativo':
                                    if (empty($value)) {
                                        $json=$json.'"tentativo":false,';
                                    }
                                    
                                    
                                    break;
                                
                                case 'denunciaId':
                                    $json=$json.'"denunciaId":'.$value;
                                    
                                    break;
                                
                            }

                         }//cierra segundo foreach
                         
                         if ($contador>$tamaño_array_delito) {
                            $json=$json.'},';
                         }else{
                            $json=$json.'}],';
                         }
                        

                   }//cierra primer foreach
 //**********************************************************************************************************/       

 //****************PARTES************************************************************************************/
                  
    $tamaño_array_parte= count($Table2);
    $contador=0;
    echo "tamaño array parte es ".$tamaño_array_parte.'<br>';         
                
        foreach ($Table2 as $nodotable => $valor) {
            $contador++;
            $json=$json.'{';
            
                foreach ($valor as $key => $value) {

                    switch ($key) {
                        case 'rolId':

                            $json=$json.'"rolId":'.$value.',';
                            break;
            
                        case 'rolNombre':

                            $json=$json.'"rolNombre":"'.$value.'",';
                            break;
                        
                        case 'denunciaId':
                            $json=$json.'"denunciaId":'.$value;
                            
                            break;
                        
                    }

                }//cierra segundo foreach

                if ($contador>$tamaño_array_delito) {
                    $json=$json.'},';
                 }else{
                    $json=$json.'}],';
                 }

        }//cierre primer foreach

//*************************************************************************************************************/
            
//             {
//              "delitoId":166,
//              "nombre":"ART 66 ANIMALES SUELTOS",
//              "tentativo":false,
//              "denunciaId":2865525
//             }
//             ],
//          "partes":[
//             {
//              "rolId":1,
//              "rolNombre":"Denunciante/Informante",
//              "denunciaId":2865525
//             },
//             {
//              "rolId":10,
//              "rolNombre":"Contraventor",
//              "denunciaId":2865525
//             }
//         ],
//         "extraviados":[],
//         "institucionExtravio":null,
//         "lugarModalidad":null,
//         "objetosSustraidos":[],
//         "objetosSecuestrados":[],
//         "objetosUtilizados":[],
//         "ampliaciones":[
//             {
//              "ampliacionNro":1,
//              "fchRegistro":"\/Date(1623688689000)\/",
//              "fchRegistro_str":"14/06/2021 13:38:09",
//              "denunciaId":2865525
//             },
//             {
//              "ampliacionNro":2,
//              "fchRegistro":"\/Date(1678448095000)\/",
//              "fchRegistro_str":"10/03/2023 08:34:55",
//              "denunciaId":2865525
//             }
//         ],
//         "diligenciasExtraviado":[],
//         "vinculados":[],
//         "estados":[],
//         "contravencional":
//         {
//             "bConFilmacion":false,
//             "lugarFirmaActa":"",
//             "fechaFirmaActa":"\/Date(1622775600000)\/","fechaFirmaActa_str":"04/06/2021 00:00:00",
//             "horaFirmaActa":"",
//             "bAdvertenciaCeseAccion":false,
//             "bMedidasPrecautorias":false,
//             "denunciaId":2865525
//         }
//      }
//     ]
//   }';
    


?>