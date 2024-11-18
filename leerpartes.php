<?php
//Table2 -------xml_t2
$rolId=0; $rolNombre=''; $denunciaIdrol=0;

foreach ($valor as $keyparte => $valueparte) {
    
    foreach ($valueparte as $key => $value) {
        
        switch ($key) {
            case 'rolId':
                $rolId=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                echo 'rolId:'.$rolId.'<br>';
                break;

            case 'rolNombre':
                $rolNombre=htmlspecialchars($value);
                echo 'rolNombre:'.$rolNombre.'<br>';
                break;
            
            case 'denunciaId':
                $denunciaIdrol=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                echo 'denunciaId:'.$denunciaIdrol.'<br>';
                break;
            
        }

        if ($rolId != 0) {
            $Table2aux= array('rolId' =>$rolId,
                              'rolNombre' =>$rolNombre,
                              'denunciaId' =>$denunciaIdrol);

            array_push($Table2,$Table2aux);
        }else {
            $xml_t_errormysql="Error: La ejecución de la lectura xml table2 falló debido a $rolId es vacio";
        }
    }
}//cierra for each primero



?>