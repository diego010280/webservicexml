<?php
//Table2 -------xml_t2
$rolId=0; $rolNombre=''; $denunciaIdrol=0;

$parteId=0; $rolId=0; $rolNombre=''; $dni_tipo=''; $dni_nro=0; $sexo=''; $apellido=''; $nombre2=''; $domicilio='';
$profesion=''; $domicilioLaboral=''; $email=''; $FchNacimiento=''; $LugarNacimiento=''; $ciudad=''; $nacionalidad='';
$telefono=''; $edad=0; $autorizaEmail=''; $exibe=''; $nombrePadres=''; $alias=''; $EstadoCivilId=0; $EstadoCivilNombre='';
$observaciones=''; $Extranjero=''; $PaisId=0; $Pais=''; $ProvinciaId=0; $DepartamentoId=0; $LocalidadId=0;

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
            
            case 'dni_tipo':
                $dni_tipo=htmlspecialchars($value);
                echo 'dni_tipo:'.$dni_tipo.'<br>';
                break;

            case 'dni_nro':
                $dni_nro=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                echo 'dni_nro:'.$dni_nro.'<br>';
                break;
            
            case 'sexo':
                $sexo=htmlspecialchars($value);
                echo 'sexo:'.$sexo.'<br>';
                break;

            case 'apellido':
                $apellido=htmlspecialchars($value);
                echo 'apellido:'.$apellido.'<br>';
                break;

            case 'nombre':
                $nombre2=htmlspecialchars($value);
                echo 'nombre:'.$nombre2.'<br>';
                break;

            case 'domicilio':
                $domicilio=htmlspecialchars($value);
                echo 'domicilio:'.$domicilio.'<br>';
                break;

            case 'profesion':
                $profesion=htmlspecialchars($value);
                echo 'profesion:'.$profesion.'<br>';
                break;

            case 'domicilioLaboral':
                $domicilioLaboral=htmlspecialchars($value);
                echo 'domicilioLaboral:'.$domicilioLaboral.'<br>';
                break;

            case 'email':
                $email=htmlspecialchars($value);
                echo 'email:'.$email.'<br>';
                break;

            case 'FchNacimiento':
                $FchNacimiento=htmlspecialchars($value);
                echo 'FchNacimiento:'.$FchNacimiento.'<br>';
                break;

            case 'LugarNacimiento':
                $LugarNacimiento=htmlspecialchars($value);
                echo 'LugarNacimiento:'.$LugarNacimiento.'<br>';
                break;

            case 'ciudad':
                $ciudad=htmlspecialchars($value);
                echo 'ciudad:'.$ciudad.'<br>';
                break;

            case 'nacionalidad':
                $nacionalidad=htmlspecialchars($value);
                echo 'nacionalidad:'.$nacionalidad.'<br>';
                break;

            case 'telefono':
                $telefono=htmlspecialchars($value);
                echo 'telefono:'.$telefono.'<br>';
                break;

            case 'edad':
                $edad=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                echo 'edad:'.$edad.'<br>';
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

/* 

$Table2aux= array('parteId' =>$parteId,
                                          
                                          '
                                          
                                          '
                                          '
                                          
                                          
                                          
                                                                                    '
                                          
                                          '
                                          
                                          'edad' =>$edad,
                                          'autorizaEmail' =>$autorizaEmail,
                                          'exibe' =>$exibe,
                                          'nombrePadres' =>$nombrePadres,
                                          'alias' =>$alias,
                                          'EstadoCivilId' =>$EstadoCivilId,
                                          'EstadoCivilNombre' =>$EstadoCivilNombre,
                                          'observaciones' =>$observaciones,
                                          'Extranjero' =>$Extranjero,
                                          'PaisId' =>$PaisId,
                                          'Pais' =>$Pais,
                                          'ProvinciaId' =>$ProvinciaId,
                                          'DepartamentoId' =>$DepartamentoId,
                                          'LocalidadId' =>$LocalidadId,
                                          'denunciaId' =>$denunciaId);


*/

?>