<?php
//Table3 ---xml_t3
$parteId=0; $Peso=0; $PadecimientosMentales=''; $Vestimenta=''; $RasgosParticulares=''; $AutorizaPublicidad='';
$Altura=''; $iIdContextura=0; $Contextura=''; $iIdCabello=0; $Cabello=''; $iIdTez=0; $Tez=''; $iIdColorOjos=0;
$ColorOjos=''; $denunciaIdextr=0;


foreach ($valor as $keyextraper => $valueextraper) {
    
    foreach ($valueextraper as $key => $value) {
        
        switch ($key) {
            case 'parteId':
                $parteId=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                echo 'parteId:'.$parteId.'<br>';
                break;

            case 'peso':
                $Peso=htmlspecialchars($value);
                echo 'peso:'.$Peso.'<br>';
                break;
            
            case 'padecimientosMentales':
                $PadecimientosMentales=htmlspecialchars($value);
                echo 'padecimientosMentales:'.$PadecimientosMentales.'<br>';
                break;

            case 'vestimenta':
                $Vestimenta=htmlspecialchars($value);
                echo 'vestimenta:'.$Vestimenta.'<br>';
                break;
            
            case 'rasgosParticulares':
                $RasgosParticulares=htmlspecialchars($value);
                echo 'rasgosParticulares:'.$RasgosParticulares.'<br>';
                break;
            
            case 'autorizaPublicidad':
                $AutorizaPublicidad=htmlspecialchars($value);
                echo 'autorizaPublicidad:'.$AutorizaPublicidad.'<br>';
                break;
            
            case 'altura':
                $Altura=filter_var($value, FILTER_SANITIZE_NUMBER_FLOAT);
                echo 'altura:'.$Altura.'<br>';
                break;

            case 'iIdContextura':
                $iIdContextura=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                echo 'iIdContextura:'.$iIdContextura.'<br>';
                break;
            
            case 'contextura':
                $Contextura=htmlspecialchars($value);
                echo 'contextura:'.$Contextura.'<br>';
                break;

            case 'iIdCabello':
                $iIdCabello=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                echo 'iIdCabello:'.$iIdCabello.'<br>';
                break;
            
            case 'cabello':
                $Cabello=htmlspecialchars($value);
                echo 'cabello:'.$Cabello.'<br>';
                break;
            
            case 'iIdTez':
                $iIdTez=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                echo 'iIdTez:'.$iIdTez.'<br>';
                break;
            
            case 'tez':
                $Tez=htmlspecialchars($value);
                echo 'tez:'.$Tez.'<br>';
                break;
            
            case 'iIdColorOjos':
                $iIdColorOjos=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                echo 'iIdColorOjos:'.$iIdColorOjos.'<br>';
                break;

            case 'colorOjos':
                $ColorOjos=htmlspecialchars($value);
                echo 'colorOjos:'.$ColorOjos.'<br>';
                break;
            
            case 'denunciaId':
                $denunciaIdextr=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                echo 'denunciaId:'.$denunciaIdextr.'<br>';
                break;
            
        }


        if ($parteId!= 0 && $denunciaIdextr!= 0) {
            $Table3aux= array('parteId' => $parteId,
            'Peso' =>$Peso,
            'PadecimientosMentales' => $PadecimientosMentales,
            'Vestimenta' =>$Vestimenta,
            'RasgosParticulares' => $RasgosParticulares,
            'AutorizaPublicidad' =>$AutorizaPublicidad,
            'Altura' =>$Altura,
            'iIdContextura' =>$iIdContextura,
            'Contextura' =>$Contextura,
            'iIdCabello' =>$iIdCabello,
            'Cabello' =>$Cabello,
            'iIdTez' => $iIdTez,
            'Tez' =>$Tez,
            'iIdColorOjos' => $iIdColorOjos,
            'ColorOjos' => $ColorOjos,
            'denunciaId' =>$denunciaIdextr);

      array_push($Table3,$Table3aux);
        }else {
            $xml_t_errormysql="Error: La ejecución de la lectura xml table3 falló debido a $parteId es vacio y $denunciaIdextr es vacio";
        }
    }
}//cierra for each primero

?>