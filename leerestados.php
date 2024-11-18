<?php

//Table13 ------xml_t13
$denunciasEstadosId=0;//Identificador del estado
$denunciaId=0; // Identificador de la denuncia asociada
$DependenciaId=0;//Identificador de la dependencia que carga el estado
$TipoEstadoId=0;
$TipoEstado='';
$FechaRegistro='';
$FechaRegistro_str='';
$Observaciones='';
$denunciaIdest=0;

foreach ($valor as $keyestad => $valueestad) {
    
    foreach ($valueestad as $key => $value) {
        
        switch ($key) {
            case 'denunciasEstadosId':
                $denunciasEstadosId=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                break;

            case 'dependenciaId':
                $DependenciaId=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                break;
            
            case 'tipoEstadoId':
                $TipoEstadoId=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                break;
            
            case 'tipoEstado':
                # code...
                $TipoEstado=htmlspecialchars($value);
                break;
            
            case 'fechaRegistro':
                $FechaRegistro=htmlspecialchars($value);
                break;
            
            case 'fechaRegistro_str':
                $FechaRegistro_str=htmlspecialchars($value);
                break;

            case 'observaciones':
                $Observaciones=htmlspecialchars($value);
                break;
            
            case 'denunciaId':
                $denunciaIdest=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                break;
                                             
        }


        if ($denunciasEstadosId!=0 && $denunciaIdest!=0){

            $Table13aux= array('denunciasEstadosId' =>$denunciasEstadosId,
                              'DenunciaId' =>$denunciaIdest,
                              'DependenciaId' =>$DependenciaId,
                              'TipoEstadoId' =>$TipoEstadoId,
                              'TipoEstado' =>$TipoEstado,
                              'FechaRegistro' =>$FechaRegistro,
                              'FechaRegistro_str' =>$FechaRegistro_str,
                              'Observaciones' =>$Observaciones);

                    array_push($Table13,$Table13aux);
          }else {
            $xml_t_errormysql="Error: La ejecución de la lectura xml table13 falló debido a $denunciasEstadosId es vacio y $denunciaIdest es vacio";
          }
    }
}//cierra for each primero

?>