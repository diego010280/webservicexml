<?php
//Table10 ----xml_t10
$DiligenciaId=0; //Identificador de la diligencia
$Diligencia=''; //Descripción de la diligencia.
$Fecha='';//Fecha de la diligencia.
$Fecha_str='';//Fecha de la diligencia, en formato string (dd/MM/yyyy HH:mm:ss). 
$FechaCarga='';//Fecha de carga 
$FechaCarga_str='';//Fecha de carga, en formato string (dd/MM/yyyy HH:mm:ss)
$DependenciaIdCarga=0;//Identificador de la dependencia de carga.
$TipoId=0;//Identificador del tipo de diligencia.
$TipoDiligencia='';//Descripción del tipo de diligencia.
$habidoFecha='';//Fecha en que el extraviado ha sido habido.
$habidoFecha_str='';//Fecha en que el extraviado ha sido habido, en formato string(dd/MM/yyyy HH:mm:ss).
$habidoDependenciaId=0;//Identificador de la dependencia que ha habido al extraviado.
$parteId=0;//Identificador de la parte, en este caso, el extraviado.
$denunciaIdextr=0;// Identificador de la denuncia asociada.

foreach ($valor as $keydilg => $valuedilg) {
    
    foreach ($valuedilg as $key => $value) {
        
        switch ($key) {
            case 'diligenciaId':
                $DiligenciaId=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                $Table10aux['DiligenciaId']= $DiligenciaId;
                echo 'diligenciaId:'.$DiligenciaId.'<br>';
                break;

            case 'diligencia':
                $Diligencia=htmlspecialchars($value);
                $Diligencia = str_replace("'","\'",$Diligencia);
                $Table10aux['Diligencia']= $Diligencia;
                echo 'diligencia:'.$Diligencia.'<br>';
                break;
            
            case 'fecha':
                $Fecha=htmlspecialchars($value);
                $Table10aux['Fecha']= $Fecha;
                echo 'fecha:'.$Fecha.'<br>';
                break;

            case 'fecha_str':
                $Fecha_str=htmlspecialchars($value);
                $Table10aux['Fecha_str']= $Fecha_str;
                echo 'fecha_str:'.$Fecha_str.'<br>';
                break;
            
            case 'fechaCarga':
                $FechaCarga=htmlspecialchars($value);
                $Table10aux['FechaCarga']= $FechaCarga;
                echo 'fechaCarga:'.$FechaCarga.'<br>';
                break;

            case 'fechaCarga_str':
                $FechaCarga_str=htmlspecialchars($value);
                $Table10aux['FechaCarga_str']= $FechaCarga_str;
                echo 'fechaCarga_str:'.$FechaCarga_str.'<br>';
                break;
            
            case 'dependenciaIdCarga':
                $DependenciaIdCarga=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                $Table10aux['DependenciaIdCarga']= $DependenciaIdCarga;
                echo 'dependenciaIdCarga:'.$DependenciaIdCarga.'<br>';
                break;
            
            case 'tipoId':
                $TipoId=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                $Table10aux['TipoId']= $TipoId;
                echo 'tipoId:'.$TipoId.'<br>';
                break;
            
            case 'tipoDiligencia':
                $TipoDiligencia=htmlspecialchars($value);
                $Table10aux['TipoDiligencia']= $TipoDiligencia;
                echo 'tipoDiligencia:'.$TipoDiligencia.'<br>';
                break;
            
            case 'habidoFecha':
                $habidoFecha=htmlspecialchars($value);
                $Table10aux['habidoFecha']= $habidoFecha;
                echo 'habidoFecha:'.$habidoFecha.'<br>';
                break;
    
            case 'habidoFecha_str':
                $habidoFecha_str=htmlspecialchars($value);
                $Table10aux['habidoFecha_str']= $habidoFecha_str;
                echo 'habidoFecha_str:'.$habidoFecha_str.'<br>';
                break;
            
            case 'habidoDependenciaId':
                $habidoDependenciaId=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                $Table10aux['habidoDependenciaId']= $habidoDependenciaId;
                echo 'habidoDependenciaId:'.$habidoDependenciaId.'<br>';
                break;
            
            case 'parteId':
                $parteId=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                $Table10aux['parteId']= $parteId;
                echo 'parteId:'.$parteId.'<br>';
                break;
            
            case 'denunciaId':
                $denunciaIdextr=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                $Table10aux['denunciaId']= $denunciaIdextr;
                echo 'denunciaId:'.$denunciaIdextr.'<br>';
                    break;        
            
        } /* cierra switch */


        
    } /* cierra segundo for each */

    if ($DiligenciaId!= 0 && $denunciaIdextr!= 0 ){
            
        array_push($Table10,$Table10aux);
        $Table10aux=[];

        $DiligenciaId=0; //Identificador de la diligencia
        $Diligencia=''; //Descripción de la diligencia.
        $Fecha='';//Fecha de la diligencia.
        $Fecha_str='';//Fecha de la diligencia, en formato string (dd/MM/yyyy HH:mm:ss). 
        $FechaCarga='';//Fecha de carga 
        $FechaCarga_str='';//Fecha de carga, en formato string (dd/MM/yyyy HH:mm:ss)
        $DependenciaIdCarga=0;//Identificador de la dependencia de carga.
        $TipoId=0;//Identificador del tipo de diligencia.
        $TipoDiligencia='';//Descripción del tipo de diligencia.
        $habidoFecha='';//Fecha en que el extraviado ha sido habido.
        $habidoFecha_str='';//Fecha en que el extraviado ha sido habido, en formato string(dd/MM/yyyy HH:mm:ss).
        $habidoDependenciaId=0;//Identificador de la dependencia que ha habido al extraviado.
        $parteId=0;//Identificador de la parte, en este caso, el extraviado.
        $denunciaIdextr=0;// Identificador de la denuncia asociada.


      }else {
        $xml_t_errormysql="Error: La ejecución de la lectura xml table9 falló debido a $DiligenciaId es vacio - $denunciaIdextr es vacio";
      }

}//cierra for each primero

?>