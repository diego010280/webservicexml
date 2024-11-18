<?php
//Table12  ----xml_t12
$VinculoId=0; // Identificador de la vinculación.
$denunciaIdvinc=0; //Identificador de la denuncia.
$DenunciaPadreId=0; //Identificador de la denuncia vinculada.

foreach ($valor as $keyvinc => $valuevinc) {
    
    foreach ($valuevinc as $key => $value) {
        
        switch ($key) {
            case 'vinculoId':
                $VinculoId=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                echo 'vinculoId:'.$VinculoId.'<br>';
                break;

            case 'denunciaId':
                $denunciaIdvinc=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                break;
            
            case 'denunciaPadreId':
                $DenunciaPadreId=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                break;
                              
        }


        if ($VinculoId!= 0 && $denunciaIdvinc!= 0 ){
            $Table12aux= array('VinculoId' =>$VinculoId,
                            'DenunciaId' =>$denunciaIdvinc,
                            'DenunciaPadreId' =>$DenunciaPadreId);

            array_push($Table12,$Table12aux);
          }else {
            $xml_t_errormysql="Error: La ejecución de la lectura xml table12 falló debido a $VinculoId es vacio - $denunciaIdvinc es vacio";
          }
    }//cierra for each segundo
}//cierra for each primero

?>