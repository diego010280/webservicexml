<?php
//Table7 ----xml_t7
$objetoSecuestradoId=0; $objetoSecuestradoNombre=''; $campo1Nombre=''; $campo1Valor=''; $campo2Nombre='';
$campo2Valor=''; $campo3Nombre=''; $campo3Valor=''; $campo4Nombre=''; $campo4Valor=''; $campo5Nombre='';
$campo5Valor=''; $campo6Nombre=''; $campo6Valor=''; $denunciaIdsecuestr=0;

foreach ($valor as $keyobjsec => $valueobjsec) {
    
    foreach ($valueobjsec as $key => $value) {
        
        switch ($key) {
            case 'objetoSecuestradoId':
                $objetoSecuestradoId=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                $Table7aux['objetoSecuestradoId']= $objetoSecuestradoId;
                break;

            case 'objetoSecuestradoNombre':
                $objetoSecuestradoNombre=htmlspecialchars($value);
                $Table7aux['objetoSecuestradoNombre']= $objetoSecuestradoNombre;
                break;
            
            case 'campo1Nombre':
                $campo1Nombre=htmlspecialchars($value);
                $Table7aux['campo1Nombre']= $campo1Nombre;
                break;

            case 'campo1Valor':
                $campo1Valor=htmlspecialchars($value);
                $Table7aux['campo1Valor']= $campo1Valor;
                break;
            
            case 'campo2Nombre':
                $campo2Nombre=htmlspecialchars($value);
                $Table7aux['campo2Nombre']= $campo2Nombre;
                break;
            
            case 'campo2Valor':
                $campo2Valor=htmlspecialchars($value);
                $Table7aux['campo2Valor']= $campo2Valor;
                break;
            
            case 'campo3Nombre':
                $campo3Nombre=htmlspecialchars($value);
                $Table7aux['campo3Nombre']= $campo3Nombre;
                break;

            case 'campo3Valor':
                $campo3Valor=htmlspecialchars($value);
                $Table7aux['campo3Valor']= $campo3Valor;
                break;
            
            case 'campo4Nombre':
                $campo4Nombre=htmlspecialchars($value);
                $Table7aux['campo4Nombre']= $campo4Nombre;
                break;

            case 'campo4Valor':
                $campo4Valor=htmlspecialchars($value);
                $Table7aux['campo4Valor']= $campo4Valor;
                break;
            
            case 'campo5Nombre':
                $campo5Nombre=htmlspecialchars($value);
                $Table7aux['campo5Nombre']= $campo5Nombre;
                break;
            
            case 'campo5Valor':
                $campo5Valor=htmlspecialchars($value);
                $Table7aux['campo5Valor']= $campo5Valor;
                break;
            
            case 'campo6Nombre':
                $campo6Nombre=htmlspecialchars($value);
                $Table7aux['campo6Nombre']= $campo6Nombre;
                break;
            
            case 'campo6Valor':
                $campo6Valor=htmlspecialchars($value);
                $Table7aux['campo6Valor']= $campo6Valor;
                break;

            case 'denunciaId':
                $denunciaIdsecuestr=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                $Table7aux['denunciaIdsecuestr']= $denunciaIdsecuestr;
                break;
            
        } /* cierra switch */


        
    } /* cierra segunao for each */

    if ($objetoSecuestradoId != 0 && $denunciaIdsecuestr != 0){
        array_push($Table7,$Table7aux);
        $Table7aux=[];
        $objetoSecuestradoId=0; $objetoSecuestradoNombre=''; $campo1Nombre=''; $campo1Valor=''; $campo2Nombre='';
        $campo2Valor=''; $campo3Nombre=''; $campo3Valor=''; $campo4Nombre=''; $campo4Valor=''; $campo5Nombre='';
        $campo5Valor=''; $campo6Nombre=''; $campo6Valor=''; $denunciaIdsecuestr=0;


      }else {
        $xml_t_errormysql="Error: La ejecución de la lectura xml table7 falló debido a $objetoSustraidoId es vacio - $denunciaId es vacio";
      }
}//cierra for each primero


?>