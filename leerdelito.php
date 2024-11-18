<?php

//Table1 ------xml_t1
$delitoId=0; 
$nombre=''; 
$tentativo=''; 
$denunciaidel=0; 
$nombredelito='';

foreach ($valor as $keydelito => $valuedelito) {
    foreach ($valuedelito as $key => $value) {

        switch ($key) {
            case 'delitoId':
                $delitoId=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                echo 'delitoId:'.$delitoId.'<br>';
                break;
    
    
            case 'nombre':
                $nombre=htmlspecialchars($value);
                echo 'nombre:'.$nombre.'<br>';
                break;
            
            case 'tentativo':
                $tentativo=htmlspecialchars($value);
                echo 'tentativo:'.$tentativo.'<br>';
                break;
            
            case 'denunciaId':
                $denunciaidel=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                echo 'denunciaId:'.$denunciaidel.'<br>';
                break;
            
        }

        if ($delitoId!=0 && $denunciaidel!=0) {
            if (!empty($nombre)) {
                $nombredelito=$nombredelito.$nombre.' | ';
            }

            $Table1aux= array('delitoId' =>$delitoId,
                               'nombre' =>$nombre,
                               'tentativo' =>$tentativo,
                               'denunciaId'=>$denunciaidel);
            array_push($Table1,$Table1aux);
        
        }else {
                $xml_t_errormysql="Error: La ejecución de la lectura xml table falló debido a $delitoId es vacio y $denunciaidel es vacio";
         }

         
         
    }
}//cierra primer foreach



?>