<?php
//Table5 ----xml_t5
$viaPublica=''; $tipoLugarId=0; $TipoLugarNombre=''; 
$modalidadId=0; $ModalidadNombre=''; $denunciaIdlugar=0;

// foreach ($valor as $keylugarmod => $valuelugarmod) {
    foreach ($valor as $key => $value) {
    // foreach ($valuelugarmod as $key => $value) {
        
        switch ($key) {
            case 'viaPublica':
                $viaPublica=htmlspecialchars($value);
                $Table5aux['viaPublica']= $viaPublica;
                echo 'viaPublica:'.$viaPublica.'<br>';
                break;

            case 'tipoLugarId':
                $tipoLugarId=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                $Table5aux['tipoLugarId']= $tipoLugarId;
                echo 'tipoLugarId:'.$tipoLugarId.'<br>';
                break;
            
            case 'tipoLugarNombre':
                $TipoLugarNombre=htmlspecialchars($value);
                $Table5aux['TipoLugarNombre']= $TipoLugarNombre;
                echo 'tipoLugarNombre:'.$TipoLugarNombre.'<br>';
                break;

            case 'modalidadId':
                $modalidadId=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                $Table5aux['modalidadId']= $modalidadId;
                echo 'modalidadId:'.$modalidadId.'<br>';
                break;
            
            case 'modalidadNombre':
                $ModalidadNombre=htmlspecialchars($value);
                $Table5aux['ModalidadNombre']= $ModalidadNombre;
                echo 'modalidadNombre:'.$ModalidadNombre.'<br>';
                break;
            
            case 'denunciaId':
                $denunciaIdlugar=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                $Table5aux['denunciaId']= $denunciaIdlugar;
                echo 'denunciaId:'.$denunciaIdlugar.'<br>';
                break;

        } /* fin switch */

     
    // }
}//cierra for each primero

if ($denunciaIdlugar!= 0) {

    array_push($Table5,$Table5aux);
    
}else {

    $xml_t_errormysql="Error: La ejecución de la lectura xml table5 falló debido a $denunciaIdlugar es vacio";
}
?>