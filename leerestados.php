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
                $Table13aux['denunciasEstadosId']=$denunciasEstadosId;
                echo 'denunciasEstadosId:'.$denunciasEstadosId.'<br>';
                break;

            case 'dependenciaId':
                $DependenciaId=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                $Table13aux['DependenciaId']=$DependenciaId;
                echo 'DependenciaId:'.$DependenciaId.'<br>';
                break;
            
            case 'tipoEstadoId':
                $TipoEstadoId=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                $Table13aux['TipoEstadoId']=$TipoEstadoId;
                echo 'TipoEstadoId:'.$TipoEstadoId.'<br>';
                break;
            
            case 'tipoEstado':
                # code...
                $TipoEstado=htmlspecialchars($value);
                $Table13aux['TipoEstado']=$TipoEstado;
                echo 'TipoEstado:'.$TipoEstado.'<br>';
                break;
            
            case 'fechaRegistro':
                $FechaRegistro=htmlspecialchars($value);
                $Table13aux['FechaRegistro']=$FechaRegistro;
                echo 'FechaRegistro:'.$FechaRegistro.'<br>';
                break;
            
            case 'fechaRegistro_str':
                $FechaRegistro_str=htmlspecialchars($value);
                $Table13aux['FechaRegistro_str']=$FechaRegistro_str;
                echo 'FechaRegistro_str:'.$FechaRegistro_str.'<br>';
                break;

            case 'observaciones':
                $Observaciones=htmlspecialchars($value);
                $Observaciones = str_replace("'","\'",$Observaciones);
                $Table13aux['Observaciones']=$Observaciones;
                echo 'FechaRegistro_str:'.$FechaRegistro_str.'<br>';
                break;
            
            case 'denunciaId':
                $denunciaIdest=filter_var($value, 
                FILTER_SANITIZE_NUMBER_INT);
                $Table13aux['denunciaId']=$denunciaIdest;
                echo 'denunciaId:'.$denunciaIdest.'<br>';
                break;
                                             
        } /* fin switch */


        
    } /* cierra segundo foreach */

    if ($denunciasEstadosId!=0 && $denunciaIdest!=0){

        array_push($Table13,$Table13aux);
        $Table13aux=[];            
        $denunciasEstadosId=0;//Identificador del estado
        $denunciaId=0; // Identificador de la denuncia asociada
        $DependenciaId=0;//Identificador de la dependencia que carga el estado
        $TipoEstadoId=0;
        $TipoEstado='';
        $FechaRegistro='';
        $FechaRegistro_str='';
        $Observaciones='';
        $denunciaIdest=0;

      }else {
        $xml_t_errormysql="Error: La ejecución de la lectura xml table13 falló debido a $denunciasEstadosId es vacio y $denunciaIdest es vacio";
      }


}//cierra for each primero

?>