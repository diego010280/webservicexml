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
                $Table1aux['delitoId']=$delitoId;

                echo 'delitoId:'.$delitoId.'<br>';
                break;
    
    
            case 'nombre':
                $nombre=htmlspecialchars($value);
                $Table1aux['nombre']=$nombre;
                echo 'nombre:'.$nombre.'<br>';
                break;
            
            case 'tentativo':
                $tentativo=htmlspecialchars($value);
                $Table1aux['tentativo']=$tentativo;
                echo 'tentativo:'.$tentativo.'<br>';
                break;
            
            case 'denunciaId':
                $denunciaidel=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                $Table1aux['denunciaId']=$denunciaidel;
                echo 'denunciaId:'.$denunciaidel.'<br>';
                break;
            
        } /* fin switch */

     } /* fin segundo foreach */

     if ($delitoId!=0 && $denunciaidel!=0) {
        if (!empty($nombre)) {
            $nombredelito=$nombredelito.$nombre.' | ';
        }

       array_push($Table1,$Table1aux);

        $Table1aux=[];
        $delitoId=0; 
        $nombre=''; 
        $tentativo=''; 
        $denunciaidel=0; 
        $nombredelito='';
    
    }else {
            $xml_t_errormysql="Error: La ejecución de la lectura xml table falló debido a $delitoId es vacio y $denunciaidel es vacio";
     }

}//cierra primer foreach



?>