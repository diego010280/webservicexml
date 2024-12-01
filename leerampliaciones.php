<?php
//Table9 ---xml_t9
$ampliacionNro=0; $fchRegistro=''; $contenido=''; $TestigoActo1=''; $TestigoActo2=''; $denunciaIdampl=0;
$fchRegistro_str='';

foreach ($valor as $keyampl => $valueampl) {
    
    foreach ($valueampl as $key => $value) {
        
        switch ($key) {
            case 'ampliacionNro':
                $ampliacionNro=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                $Table9aux['ampliacionNro']=$ampliacionNro;
                echo 'ampliacionNro:'.$ampliacionNro.'<br>';
                break;

            case 'contenido':
                $contenido=htmlspecialchars($value);
                $contenido = str_replace("'","\'",$contenido);
                $Table9aux['contenido']=$contenido;
                echo 'contenido:'.$contenido.'<br>';
                break;
            
            case 'fchRegistro':
                $fchRegistro=htmlspecialchars($value);
                $Table9aux['fchRegistro']=$fchRegistro;
                echo 'fchRegistro:'.$fchRegistro.'<br>';
                break;

            case 'fchRegistro_str':
                $fchRegistro_str=htmlspecialchars($value);
                $Table9aux['fchRegistro_str']=$fchRegistro_str;
                echo 'fchRegistro_str:'.$fchRegistro_str.'<br>';
                break;

            case 'TestigoActo1':
                $TestigoActo1=htmlspecialchars($value);
                $Table9aux['TestigoActo1']=$TestigoActo1;
                echo 'TestigoActo1:'.$TestigoActo1.'<br>';
                break;

            case 'TestigoActo2':
                $TestigoActo2=htmlspecialchars($value);
                $Table9aux['TestigoActo2']=$TestigoActo2;
                echo 'TestigoActo2:'.$TestigoActo2.'<br>';
                break;

            case 'denunciaId':
                $denunciaIdampl=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                $Table9aux['denunciaId']=$denunciaIdampl;
                echo 'denunciaId:'.$denunciaIdampl.'<br>';
                break;
            
        } /* fin switch */


        
    } /* fin for each segundo */

    if ($ampliacionNro!= 0 && $denunciaIdampl!= 0 ){
            
        array_push($Table9,$Table9aux);
        $Table9aux=[];
        $ampliacionNro=0; $fchRegistro=''; $contenido=''; $TestigoActo1=''; $TestigoActo2=''; $denunciaIdampl=0;
        $fchRegistro_str='';


      }else {
        $xml_t_errormysql="Error: La ejecución de la lectura xml table9 falló debido a $ampliacionNro es vacio - $denunciaIdampl es vacio";
      }

}//cierra for each primero




?>