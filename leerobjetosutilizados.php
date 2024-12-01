<?php
//Table8 ----xml_t8
$objetoUtilizadoId=0; $objetoUtilizadoNombre=''; $campo1Nombre=''; $campo1Valor=''; $campo2Nombre='';
$campo2Valor=''; $campo3Nombre=''; $campo3Valor=''; $campo4Nombre=''; $campo4Valor=''; $campo5Nombre='';
$campo5Valor=''; $campo6Nombre=''; $campo6Valor=''; $denunciaIdobjutil=0;

foreach ($valor as $keyobjutil => $valueobjutil) {
    
    foreach ($valueobjutil as $key => $value) {
        
        switch ($key) {
            case 'objetoUtilizadoId':
                $objetoUtilizadoId=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                $Table8aux['objetoUtilizadoId']=$objetoUtilizadoId;
                break;

            case 'objetoUtilizadoNombre':
                $objetoUtilizadoNombre=htmlspecialchars($value);
                $Table8aux['objetoUtilizadoNombre']=$objetoUtilizadoNombre;
                echo 'objetoUtilizadoNombre:'.$objetoUtilizadoNombre.'<br>';
                break;
            
            case 'campo1Nombre':
                $campo1Nombre=htmlspecialchars($value);
                $Table8aux['campo1Nombre']=$campo1Nombre;
                echo 'campo1Nombre:'.$campo1Nombre.'<br>';
                break;

            case 'campo1Valor':
                $campo1Valor=htmlspecialchars($value);
                $Table8aux['campo1Valor']=$campo1Valor;
                echo 'campo1Valor:'.$campo1Valor.'<br>';
                break;
            
            case 'campo2Nombre':
                $campo2Nombre=htmlspecialchars($value);
                $Table8aux['campo2Nombre']=$campo2Nombre;
                echo 'campo2Nombre:'.$campo2Nombre.'<br>';
                break;
            
            case 'campo2Valor':
                $campo2Valor=htmlspecialchars($value);
                $Table8aux['campo2Nombre']=$campo2Nombre;
                echo 'campo2Valor:'.$campo2Valor.'<br>';
                break;
            
            case 'campo3Nombre':
                $campo3Nombre=htmlspecialchars($value);
                $Table8aux['campo3Nombre']=$campo3Nombre;
                echo 'campo3Nombre:'.$campo3Nombre.'<br>';
                break;

            case 'campo3Valor':
                $campo3Valor=htmlspecialchars($value);
                $Table8aux['campo3Valor']=$campo3Valor;
                echo 'campo3Valor:'.$campo3Valor.'<br>';
                break;
            
            case 'campo4Nombre':
                $campo4Nombre=htmlspecialchars($value);
                $Table8aux['campo4Nombre']=$campo4Nombre;
                echo 'campo4Nombre:'.$campo4Nombre.'<br>';
                break;

            case 'campo4Valor':
                $campo4Valor=htmlspecialchars($value);
                $Table8aux['campo4Valor']=$campo4Valor;
                echo 'campo4Valor:'.$campo4Valor.'<br>';
                break;
            
            case 'campo5Nombre':
                $campo5Nombre=htmlspecialchars($value);
                $Table8aux['campo5Nombre']=$campo5Nombre;
                echo 'campo5Nombre:'.$campo5Nombre.'<br>';
                break;
            
            case 'campo5Valor':
                $campo5Valor=htmlspecialchars($value);
                $Table8aux['campo5Valor']=$campo5Valor;
                echo 'campo5Valor:'.$campo5Valor.'<br>';
                break;
            
            case 'campo6Nombre':
                $campo6Nombre=htmlspecialchars($value);
                $Table8aux['campo6Nombre']=$campo6Nombre;
                echo 'campo6Nombre:'.$campo6Nombre.'<br>';
                break;
            
            case 'campo6Valor':
                $campo6Valor=htmlspecialchars($value);
                $Table8aux['campo6Valor']=$campo6Valor;
                echo 'campo6Valor:'.$campo6Valor.'<br>';
                break;

            case 'denunciaId':
                $denunciaIdobjutil=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                $Table8aux['denunciaId']=$denunciaIdobjutil;
                echo 'denunciaId:'.$denunciaIdobjutil.'<br>';
                break;
            
        } /* fin switch */
        
    } /* fin for each segundo */

    if ($objetoUtilizadoId!= 0 && $denunciaIdobjutil!= 0) {


        array_push($Table8,$Table8aux);
        $Table8aux=[];
        $objetoUtilizadoId=0; $objetoUtilizadoNombre=''; $campo1Nombre=''; $campo1Valor=''; $campo2Nombre='';
        $campo2Valor=''; $campo3Nombre=''; $campo3Valor=''; $campo4Nombre=''; $campo4Valor=''; $campo5Nombre='';
        $campo5Valor=''; $campo6Nombre=''; $campo6Valor=''; $denunciaIdobjutil=0;
   }else {
     $xml_t_errormysql="Error: La ejecución de la lectura xml table8 falló debido a $objetoUtilizadoId es vacio - $denunciaIdobjutil es vacio";
   }

}//cierra for each primero

?>