<?php
//Table3 ---xml_t3
$parteId=0; $Peso=0; $PadecimientosMentales=''; $Vestimenta=''; $RasgosParticulares=''; $AutorizaPublicidad='';
$Altura=0; $iIdContextura=0; $Contextura=''; $iIdCabello=0; $Cabello=''; $iIdTez=0; $Tez=''; $iIdColorOjos=0;
$ColorOjos=''; $denunciaIdextr=0;


foreach ($valor as $keyextraper => $valueextraper) {
    
    foreach ($valueextraper as $key => $value) {
        
        switch ($key) {
            case 'parteId':
                $parteId=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                $Table3aux['parteId']=$parteId;
                echo 'parteId:'.$parteId.'<br>';
                break;

            case 'peso':
                $Peso=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                $Table3aux['Peso']=$Peso;
                echo 'Peso:'.$Peso.'<br>';
                break;
            
            case 'padecimientosMentales':
                $PadecimientosMentales=htmlspecialchars($value);
                $Table3aux['PadecimientosMentales']=$PadecimientosMentales;
                echo 'PadecimientosMentales:'.$PadecimientosMentales.'<br>';
                break;

            case 'vestimenta':
                $Vestimenta=htmlspecialchars($value);
                $Table3aux['Vestimenta']=$Vestimenta;
                echo 'vestimenta:'.$Vestimenta.'<br>';
                break;
            
            case 'rasgosParticulares':
                $RasgosParticulares=htmlspecialchars($value);
                $Table3aux['RasgosParticulares']=$RasgosParticulares;
                echo 'rasgosParticulares:'.$RasgosParticulares.'<br>';
                break;
            
            case 'autorizaPublicidad':
                $AutorizaPublicidad=htmlspecialchars($value);
                $Table3aux['AutorizaPublicidad']=$AutorizaPublicidad;
                echo 'autorizaPublicidad:'.$AutorizaPublicidad.'<br>';
                break;
            
            case 'altura':
                $Altura=filter_var($value, FILTER_SANITIZE_NUMBER_FLOAT);
                $Table3aux['Altura']=$Altura;
                echo 'altura:'.$Altura.'<br>';
                break;

            case 'iIdContextura':
                $iIdContextura=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                $Table3aux['iIdContextura']=$iIdContextura;
                echo 'iIdContextura:'.$iIdContextura.'<br>';
                break;
            
            case 'contextura':
                $Contextura=htmlspecialchars($value);
                $Table3aux['Contextura']=$Contextura;
                echo 'contextura:'.$Contextura.'<br>';
                break;

            case 'iIdCabello':
                $iIdCabello=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                $Table3aux['iIdCabello']=$iIdCabello;
                echo 'iIdCabello:'.$iIdCabello.'<br>';
                break;
            
            case 'cabello':
                $Cabello=htmlspecialchars($value);
                $Table3aux['Cabello']=$Cabello;
                echo 'cabello:'.$Cabello.'<br>';
                break;
            
            case 'iIdTez':
                $iIdTez=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                $Table3aux['iIdTez']=$iIdTez;
                echo 'iIdTez:'.$iIdTez.'<br>';
                break;
            
            case 'tez':
                $Tez=htmlspecialchars($value);
                $Table3aux['Tez']=$Tez;
                echo 'tez:'.$Tez.'<br>';
                break;
            
            case 'iIdColorOjos':
                $iIdColorOjos=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                $Table3aux['iIdColorOjos']=$iIdColorOjos;
                echo 'iIdColorOjos:'.$iIdColorOjos.'<br>';
                break;

            case 'colorOjos':
                $ColorOjos=htmlspecialchars($value);
                $Table3aux['ColorOjos']=$ColorOjos;
                echo 'colorOjos:'.$ColorOjos.'<br>';
                break;
            
            case 'denunciaId':
                $denunciaIdextr=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                $Table3aux['denunciaId']=$denunciaIdextr;
                echo 'denunciaId:'.$denunciaIdextr.'<br>';
                break;
            
        }


        if ($parteId!= 0 && $denunciaIdextr!= 0) {
            
            array_push($Table3,$Table3aux);
            $Table3aux=[];
            $parteId=0; $Peso=0; $PadecimientosMentales=''; $Vestimenta=''; $RasgosParticulares=''; $AutorizaPublicidad='';
            $Altura=0; $iIdContextura=0; $Contextura=''; $iIdCabello=0; $Cabello=''; $iIdTez=0; $Tez=''; $iIdColorOjos=0;
            $ColorOjos=''; $denunciaIdextr=0;

        }else {
            $xml_t_errormysql="Error: La ejecución de la lectura xml table3 falló debido a $parteId es vacio y $denunciaIdextr es vacio";
        }
    }
}//cierra for each primero

?>