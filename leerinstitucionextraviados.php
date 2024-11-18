<?php

//Table4 ----xml_t4
$iIdInstitucion=0; $denunciaIdisntit=0; $Institucion=''; $NombreContacto=''; 
$DomicilioContacto=''; $TelefonoContacto=''; $EmailContacto='';


// foreach ($valor as $keyinstextraper => $valueinstextrav) {
    
    foreach ($valor as $key => $value) {
        
        switch ($key) {
            case 'iIdInstitucion':
                $iIdInstitucion=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                echo 'iIdInstitucion:'.$iIdInstitucion.'<br>';
                break;

            case 'institucion':
                $Institucion=htmlspecialchars($value);
                echo 'institucion:'.$Institucion.'<br>';
                break;
            
            case 'nombreContacto':
                $NombreContacto=htmlspecialchars($value);
                echo 'nombreContacto:'.$NombreContacto.'<br>';
                break;

            case 'domicilioContacto':
                $DomicilioContacto=htmlspecialchars($value);
                echo 'domicilioContacto:'.$DomicilioContacto.'<br>';
                break;
            
            case 'telefonoContacto':
                $TelefonoContacto=htmlspecialchars($value);
                echo 'telefonoContacto:'.$TelefonoContacto.'<br>';
                break;
            
            case 'emailContacto':
                $EmailContacto=htmlspecialchars($value);
                echo 'emailContacto:'.$EmailContacto.'<br>';
                break;
            
            case 'denunciaId':
                $denunciaIdisntit=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                echo 'denunciaId:'.$denunciaIdisntit.'<br>';
                break;

        }


        if ($denunciaId!= 0) {
            $Table4= array('iIdInstitucion' =>$iIdInstitucion,
                                            'denunciaId' =>$denunciaIdisntit,
                                            'Institucion' =>$Institucion,
                                            'NombreContacto' =>$NombreContacto,
                                            'DomicilioContacto' => $DomicilioContacto,
                                            'TelefonoContacto' =>$TelefonoContacto,
                                            'EmailContacto' => $EmailContacto);

                                    // array_push($Table4,$Table4aux);
        }else {
            $xml_t_errormysql="Error: La ejecución de la lectura xml table4 falló debido a $denunciaIdisntit es vacio";
        }
    // }
}//cierra for each primero
?>