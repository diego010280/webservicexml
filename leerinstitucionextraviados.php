<?php

//Table4 ----xml_t4
$iIdInstitucion=0; $denunciaIdisntit=0; $Institucion=''; $NombreContacto=''; 
$DomicilioContacto=''; $TelefonoContacto=''; $EmailContacto='';


// foreach ($valor as $keyinstextraper => $valueinstextrav) {
    
    foreach ($valor as $key => $value) {
        
        switch ($key) {
            case 'iIdInstitucion':
                $iIdInstitucion=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                $Table4['iIdInstitucion']= $iIdInstitucion;
                echo 'iIdInstitucion:'.$iIdInstitucion.'<br>';
                break;

            case 'institucion':
                $Institucion=htmlspecialchars($value);
                $Table4['Institucion']= $Institucion;
                echo 'institucion:'.$Institucion.'<br>';
                break;
            
            case 'nombreContacto':
                $NombreContacto=htmlspecialchars($value);
                $Table4['NombreContacto']= $NombreContacto;
                echo 'nombreContacto:'.$NombreContacto.'<br>';
                break;

            case 'domicilioContacto':
                $DomicilioContacto=htmlspecialchars($value);
                $Table4['DomicilioContacto']= $DomicilioContacto;
                echo 'domicilioContacto:'.$DomicilioContacto.'<br>';
                break;
            
            case 'telefonoContacto':
                $TelefonoContacto=htmlspecialchars($value);
                $Table4['TelefonoContacto']= $TelefonoContacto;
                echo 'telefonoContacto:'.$TelefonoContacto.'<br>';
                break;
            
            case 'emailContacto':
                $EmailContacto=htmlspecialchars($value);
                $Table4['EmailContacto']= $EmailContacto;
                echo 'emailContacto:'.$EmailContacto.'<br>';
                break;
            
            case 'denunciaId':
                $denunciaIdisntit=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                $Table4['denunciaId']= $denunciaIdisntit;
                echo 'denunciaId:'.$denunciaIdisntit.'<br>';
                break;

        }

      
    // }
}//cierra for each primero

if ($denunciaIdisntit == 0) {
            
    $xml_t_errormysql="Error: La ejecución de la lectura xml table4 falló debido a $denunciaIdisntit es vacio";
}
?>