<?php
//Table8 ----xml_t8
$objetoUtilizadoId=0; $objetoUtilizadoNombre=''; $campo1Nombre=''; $campo1Valor=''; $campo2Nombre='';
$campo2Valor=''; $campo3Nombre=''; $campo3Valor=''; $campo4Nombre=''; $campo4Valor=''; $campo5Nombre='';
$campo5Valor=''; $campo6Nombre=''; $campo6Valor=''; $denunciaIdobjutil='';

foreach ($valor as $keyobjutil => $valueobjutil) {
    
    foreach ($valueobjutil as $key => $value) {
        
        switch ($key) {
            case 'objetoUtilizadoId':
                $objetoUtilizadoId=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                break;

            case 'objetoUtilizadoNombre':
                $objetoUtilizadoNombre=htmlspecialchars($value);
                echo 'objetoUtilizadoNombre:'.$objetoUtilizadoNombre.'<br>';
                break;
            
            case 'campo1Nombre':
                $campo1Nombre=htmlspecialchars($value);
                echo 'campo1Nombre:'.$campo1Nombre.'<br>';
                break;

            case 'campo1Valor':
                $campo1Valor=htmlspecialchars($value);
                echo 'campo1Valor:'.$campo1Valor.'<br>';
                break;
            
            case 'campo2Nombre':
                $campo2Nombre=htmlspecialchars($value);
                echo 'campo2Nombre:'.$campo2Nombre.'<br>';
                break;
            
            case 'campo2Valor':
                $campo2Valor=htmlspecialchars($value);
                echo 'campo2Valor:'.$campo2Valor.'<br>';
                break;
            
            case 'campo3Nombre':
                $campo3Nombre=htmlspecialchars($value);
                echo 'campo3Nombre:'.$campo3Nombre.'<br>';
                break;

            case 'campo3Valor':
                $campo3Valor=htmlspecialchars($value);
                echo 'campo3Valor:'.$campo3Valor.'<br>';
                break;
            
            case 'campo4Nombre':
                $campo4Nombre=htmlspecialchars($value);
                echo 'campo4Nombre:'.$campo4Nombre.'<br>';
                break;

            case 'campo4Valor':
                $campo4Valor=htmlspecialchars($value);
                echo 'campo4Valor:'.$campo4Valor.'<br>';
                break;
            
            case 'campo5Nombre':
                $campo5Nombre=htmlspecialchars($value);
                echo 'campo5Nombre:'.$campo5Nombre.'<br>';
                break;
            
            case 'campo5Valor':
                $campo5Valor=htmlspecialchars($value);
                echo 'campo5Valor:'.$campo5Valor.'<br>';
                break;
            
            case 'campo6Nombre':
                $campo6Nombre=htmlspecialchars($value);
                echo 'campo6Nombre:'.$campo6Nombre.'<br>';
                break;
            
            case 'campo6Valor':
                $campo6Valor=htmlspecialchars($value);
                echo 'campo6Valor:'.$campo6Valor.'<br>';
                break;

            case 'denunciaId':
                $denunciaIdobjutil=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                echo 'denunciaId:'.$denunciaIdobjutil.'<br>';
                break;
            
        }


        if ($objetoUtilizadoId!= 0 && $denunciaIdobjutil!= 0) {


            $Table8aux = array('objetoUtilizadoId' =>$objetoUtilizadoId,
                            'objetoUtilizadoNombre' =>$objetoUtilizadoNombre,
                            'campo1Nombre' =>$campo1Nombre,
                            'campo1Valor' =>$campo1Valor,
                            'campo2Nombre' => $campo2Nombre,
                            'campo2Valor' =>$campo2Valor,
                            'campo3Nombre' =>$campo3Nombre,
                            'campo3Valor' =>$campo3Valor,
                            'campo4Nombre' =>$campo4Nombre,
                            'campo4Valor' =>$campo4Valor,
                            'campo5Nombre' =>$campo5Nombre,
                            'campo5Valor' =>$campo5Valor,
                            'campo6Nombre' =>$campo6Nombre,
                            'campo6Valor' =>$campo6Valor,
                            'denunciaId' =>$denunciaIdobjutil);

                  array_push($Table8,$Table8aux);
          }else {
            $xml_t_errormysql="Error: La ejecución de la lectura xml table8 falló debido a $objetoUtilizadoId es vacio - $denunciaIdobjutil es vacio";
          }
    }
}//cierra for each primero

?>