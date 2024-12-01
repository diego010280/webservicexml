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
                $Table2aux['rolId']=$rolId;
                echo 'rolId:'.$rolId.'<br>';
                break;

            case 'rolNombre':
                $rolNombre=htmlspecialchars($value);
                $Table2aux['rolNombre']=$rolNombre;
                echo 'rolNombre:'.$rolNombre.'<br>';
                break;
            
            case 'dni_tipo':
                $dni_tipo=htmlspecialchars($value);
                $Table2aux['dni_tipo']=$dni_tipo;
                echo 'dni_tipo:'.$dni_tipo.'<br>';
                break;

            case 'dni_nro':
                $dni_nro=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                $Table2aux['dni_nro']=$dni_nro;
                echo 'dni_nro:'.$dni_nro.'<br>';
                break;
            
            case 'sexo':
                $sexo=htmlspecialchars($value);
                $Table2aux['sexo']=$sexo;
                echo 'sexo:'.$sexo.'<br>';
                break;

            case 'apellido':
                $apellido=htmlspecialchars($value);
                $Table2aux['apellido']=$apellido;
                echo 'apellido:'.$apellido.'<br>';
                break;

            case 'nombre':
                $nombre2=htmlspecialchars($value);
                $Table2aux['nombre']=$nombre2;
                echo 'nombre:'.$nombre2.'<br>';
                break;

            case 'domicilio':
                $domicilio=htmlspecialchars($value);
                $Table2aux['domicilio']=$domicilio;
                echo 'domicilio:'.$domicilio.'<br>';
                break;

            case 'profesion':
                $profesion=htmlspecialchars($value);
                $Table2aux['profesion']=$profesion;
                echo 'profesion:'.$profesion.'<br>';
                break;

            case 'domicilioLaboral':
                $domicilioLaboral=htmlspecialchars($value);
                $Table2aux['domicilioLaboral']=$domicilioLaboral;
                echo 'domicilioLaboral:'.$domicilioLaboral.'<br>';
                break;

            case 'email':
                $email=htmlspecialchars($value);
                $Table2aux['email']=$email;
                echo 'email:'.$email.'<br>';
                break;

            case 'FchNacimiento':
                $FchNacimiento=htmlspecialchars($value);
                $Table2aux['FchNacimiento']=$FchNacimiento;
                echo 'FchNacimiento:'.$FchNacimiento.'<br>';
                break;

            case 'LugarNacimiento':
                $LugarNacimiento=htmlspecialchars($value);
                $Table2aux['LugarNacimiento']=$LugarNacimiento;
                echo 'LugarNacimiento:'.$LugarNacimiento.'<br>';
                break;

            case 'ciudad':
                $ciudad=htmlspecialchars($value);
                $Table2aux['ciudad']=$ciudad;
                echo 'ciudad:'.$ciudad.'<br>';
                break;

            case 'nacionalidad':
                $nacionalidad=htmlspecialchars($value);
                $Table2aux['nacionalidad']=$nacionalidad;
                echo 'nacionalidad:'.$nacionalidad.'<br>';
                break;

            case 'telefono':
                $telefono=htmlspecialchars($value);
                $Table2aux['telefono']=$telefono;
                echo 'telefono:'.$telefono.'<br>';
                break;

            case 'edad':
                $edad=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                echo 'edad:'.$edad.'<br>';
                break;
            
            case 'autorizaEmail':
                $autorizaEmail=htmlspecialchars($value);
                $Table2aux['autorizaEmail']=$autorizaEmail;
                echo 'autorizaEmail:'.$autorizaEmail.'<br>';
                break;
            
            case 'exibe':
                $exibe=htmlspecialchars($value);
                $Table2aux['exibe']=$exibe;
                echo 'exibe:'.$exibe.'<br>';
                break;

            case 'nombrePadres':
                $nombrePadres=htmlspecialchars($value);
                $Table2aux['nombrePadres']=$nombrePadres;
                echo 'nombrePadres:'.$nombrePadres.'<br>';
                break;
            
            case 'alias':
                $alias=htmlspecialchars($value);
                $Table2aux['alias']=$alias;
                echo 'alias:'.$alias.'<br>';
                break;
            
            case 'EstadoCivilId':
                $EstadoCivilId=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                $Table2aux['EstadoCivilId']=$EstadoCivilId;
                echo 'EstadoCivilId:'.$EstadoCivilId.'<br>';
                break;
            
            case 'EstadoCivilNombre':
                $EstadoCivilNombre=htmlspecialchars($value);
                $Table2aux['EstadoCivilNombre']=$EstadoCivilNombre;
                echo 'EstadoCivilId:'.$EstadoCivilNombre.'<br>';
                break;
            
            case 'observaciones':
                $observaciones=htmlspecialchars($value);
                $observaciones = str_replace("'","\'",$observaciones);
                $Table2aux['observaciones']=$observaciones;
                echo 'observaciones:'.$observaciones.'<br>';
                break;
            
            case 'Extranjero':
                $Extranjero=htmlspecialchars($value);
                $Table2aux['Extranjero']=$Extranjero;
                echo 'Extranjero:'.$Extranjero.'<br>';
                break;
            
            case 'PaisId':
                $PaisId=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                $Table2aux['PaisId']=$PaisId;
                echo 'PaisId:'.$PaisId.'<br>';
                break;
            
            case 'Pais':
                $Pais=htmlspecialchars($value);
                $Table2aux['Pais']=$Pais;
                echo 'Pais:'.$Pais.'<br>';
                break;
            
            case 'ProvinciaId':
                $ProvinciaId=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                $Table2aux['ProvinciaId']=$ProvinciaId;
                echo 'ProvinciaId:'.$ProvinciaId.'<br>';
                break;
            
            case 'DepartamentoId':
                $DepartamentoId=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                $Table2aux['DepartamentoId']=$DepartamentoId;
                echo 'DepartamentoId:'.$DepartamentoId.'<br>';
                break;
            
            case 'LocalidadId':
                $LocalidadId=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                $Table2aux['LocalidadId']=$LocalidadId;
                echo 'LocalidadId:'.$LocalidadId.'<br>';
                break;

            case 'denunciaId':
                $denunciaIdrol=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                $Table2aux['denunciaId']=$denunciaIdrol;
                echo 'denunciaId:'.$denunciaIdrol.'<br>';
                break;
            
        } /* fin switch */

        
    } /* fin for each segundo */

    if ($rolId != 0 && $denunciaIdrol!=0) {
        
        array_push($Table2,$Table2aux);
        $Table2aux=[];
        $rolId=0; $rolNombre=''; $denunciaIdrol=0;
        $dni_tipo=''; $dni_nro=0; $sexo=''; $apellido=''; $nombre2=''; $domicilio='';
        $profesion=''; $domicilioLaboral=''; $email=''; $FchNacimiento=''; $LugarNacimiento=''; $ciudad=''; $nacionalidad='';
        $telefono=''; $edad=0; $autorizaEmail=''; $exibe=''; $nombrePadres=''; $alias=''; $EstadoCivilId=0; $EstadoCivilNombre='';
        $observaciones=''; $Extranjero=''; $PaisId=0; $Pais=''; $ProvinciaId=0; $DepartamentoId=0; $LocalidadId=0;

    }else {
        $xml_t_errormysql="Error: La ejecución de la lectura xml table2 falló debido a $rolId es vacio";
    }

}//cierra for each primero



?>