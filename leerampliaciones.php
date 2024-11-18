<?php
//Table9 ---xml_t9
$ampliacionNro=0; $fchRegistro=''; $contenido=''; $TestigoActo1=''; $TestigoActo2=''; $denunciaIdampl=0;
$fchRegistro_str='';

foreach ($valor as $keyampl => $valueampl) {
    
    foreach ($valueampl as $key => $value) {
        
        switch ($key) {
            case 'ampliacionNro':
                $ampliacionNro=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                echo 'ampliacionNro:'.$ampliacionNro.'<br>';
                break;

            case 'fchRegistro':
                $fchRegistro=htmlspecialchars($value);
                echo 'fchRegistro:'.$fchRegistro.'<br>';
                break;
            
            case 'fchRegistro_str':
                $fchRegistro_str=htmlspecialchars($value);
                echo 'fchRegistro_str:'.$fchRegistro_str.'<br>';
                break;

            case 'denunciaId':
                $denunciaIdampl=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                echo 'denunciaId:'.$denunciaIdampl.'<br>';
                break;
            
        }


        if ($ampliacionNro!= 0 && $denunciaId!= 0 ){
            $Table9aux= array('ampliacionNro' =>$ampliacionNro,
                              'fchRegistro' => $fchRegistro,
                              'denunciaId' =>$denunciaIdampl);
            array_push($Table9,$Table9aux);
          }else {
            $xml_t_errormysql="Error: La ejecución de la lectura xml table9 falló debido a $ampliacionNro es vacio - $denunciaIdampl es vacio";
          }
    }
}//cierra for each primero




?>