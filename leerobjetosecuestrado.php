<?php
//Table7 ----xml_t7
$objetoSecuestradoId=0; $objetoSecuestradoNombre=''; $campo1Nombre=''; $campo1Valor=''; $campo2Nombre='';
$campo2Valor=''; $campo3Nombre=''; $campo3Valor=''; $campo4Nombre=''; $campo4Valor=''; $campo5Nombre='';
$campo5Valor=''; $campo6Nombre=''; $campo6Valor=''; $denunciaId='';

foreach ($valor as $keyobjsec => $valueobjsec) {
    
    foreach ($valueobjsec as $key => $value) {
        
        switch ($key) {
            case 'objetoSecuestradoId':
                $objetoSecuestradoId=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                break;

            case 'objetoSecuestradoNombre':
                $objetoSecuestradoNombre=htmlspecialchars($value);
                break;
            
            case 'campo1Nombre':
                $campo1Nombre=htmlspecialchars($value);
                break;

            case 'campo1Valor':
                $campo1Valor=htmlspecialchars($value);
                break;
            
            case 'campo2Nombre':
                $campo2Nombre=htmlspecialchars($value);
                break;
            
            case 'campo2Valor':
                $campo2Valor=htmlspecialchars($value);
                break;
            
            case 'campo3Nombre':
                $campo3Nombre=htmlspecialchars($value);
                break;

            case 'campo3Valor':
                $campo3Valor=htmlspecialchars($value);
                break;
            
            case 'campo4Nombre':
                $campo4Nombre=htmlspecialchars($value);
                break;

            case 'campo4Valor':
                $campo4Valor=htmlspecialchars($value);
                break;
            
            case 'campo5Nombre':
                $campo5Nombre=htmlspecialchars($value);
                break;
            
            case 'campo5Valor':
                $campo5Valor=htmlspecialchars($value);
                break;
            
            case 'campo6Nombre':
                $campo6Nombre=htmlspecialchars($value);
                break;
            
            case 'campo6Valor':
                $campo6Valor=htmlspecialchars($value);
                break;

            case 'denunciaId':
                $denunciaId=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                break;
            
        }


        if ($objetoSecuestradoId != 0 && $denunciaId != 0){
            $Table7aux= array('objetoSustraidoId' => $objetoSustraidoId,
                            'objetoSustraidoNombre' =>$objetoSustraidoNombre,
                            'campo1Nombre' =>$campo1Nombre,
                            'campo1Valor' =>$campo1Valor,
                            'campo2Nombre' =>$campo2Nombre,
                            'campo2Valor' => $campo2Valor,
                            'campo3Nombre' => $campo3Nombre,
                            'campo3Valor' => $campo3Valor,
                            'campo4Nombre' => $campo4Nombre,
                            'campo4Valor' => $campo4Valor,
                            'campo5Nombre' =>$campo5Nombre,
                            'campo5Valor' => $campo5Valor,
                            'campo6Nombre' => $campo6Nombre,
                            'campo6Valor' =>$campo6Valor,
                            'denunciaId' => $denunciaId);

              array_push($Table7,$Table7aux);

          }else {
            $xml_t_errormysql="Error: La ejecución de la lectura xml table7 falló debido a $objetoSustraidoId es vacio - $denunciaId es vacio";
          }
    }
}//cierra for each primero


?>