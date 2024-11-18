<?php

//Table14 ------xml_t14
$bConFilmacion=''; //Indica si cuenta con filmación.
$LugarFirmaActa=''; //Lugar de firma del acta.
$FechaFirmaActa=''; //fechaFirmaActa
$FechaFirmaActa_str='';//Fecha de firma del acta, en formato string (dd/MM/yyyy HH:mm:ss)
$HoraFirmaActa=''; //: Hora de firma del acta.
$bAdvertenciaCeseAccion='';//bAdvertenciaCeseAccion
$bMedidasPrecautorias='';//bMedidasPrecautorias
$denunciaIdcontra=0;// Identificador de la denuncia asociada

foreach ($valor as $keycontrav => $value) {
        
    // foreach ($valuecontrav as $key => $value) {
        
        switch ($keycontrav) {
            case 'bConFilmacion':
                $bConFilmacion=htmlspecialchars($value);
                echo 'bConFilmacion:'.$bConFilmacion.'<br>';
                break;

            case 'lugarFirmaActa':
                $LugarFirmaActa=htmlspecialchars($value);
                echo 'lugarFirmaActa:'.$LugarFirmaActa.'<br>';
                break;
            
            case 'fechaFirmaActa':
                $FechaFirmaActa=htmlspecialchars($value);
                echo 'fechaFirmaActa:'.$FechaFirmaActa.'<br>';
                break;
            
            case 'fechaFirmaActa_str':
                # code...
                $FechaFirmaActa_str=htmlspecialchars($value);
                echo 'fechaFirmaActa_str:'.$FechaFirmaActa_str.'<br>';
                break;
            
            case 'horaFirmaActa':
                $HoraFirmaActa=htmlspecialchars($value);
                echo 'horaFirmaActa:'.$HoraFirmaActa.'<br>';
                break;
            
            case 'bAdvertenciaCeseAccion':
                $bAdvertenciaCeseAccion=htmlspecialchars($value);
                echo 'bAdvertenciaCeseAccion:'.$bAdvertenciaCeseAccion.'<br>';
                break;

            case 'bMedidasPrecautorias':
                $bMedidasPrecautorias=htmlspecialchars($value);
                echo 'bMedidasPrecautorias:'.$bMedidasPrecautorias.'<br>';
                break;
            
            case 'denunciaId':
                $denunciaIdcontra=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
                echo 'denunciaId:'.$denunciaIdcontra.'<br>';
                break;
                                             
        }

        $bMedidasPrecautorias = str_replace("'","\'",$bMedidasPrecautorias);

        if ($denunciaIdcontra!=0){
                              $Table14aux = array('bConFilmacion' =>$bConFilmacion,
                                                 'LugarFirmaActa' =>$LugarFirmaActa,
                                                 'FechaFirmaActa' =>$FechaFirmaActa,
                                                 'FechaFirmaActa' =>$FechaFirmaActa,
                                                 'HoraFirmaActa' =>$HoraFirmaActa,
                                                 'bAdvertenciaCeseAccion' =>$bAdvertenciaCeseAccion,
                                                 'bMedidasPrecautorias' =>$bMedidasPrecautorias,
                                                 'denunciaId' =>$denunciaIdcontra);

                                  array_push($Table14,$Table14aux);

                            }else {
                              $xml_t_errormysql="Error: La ejecución de la lectura xml table14 falló debido a $denunciaIdcontra es vacio";
                            }
    
}//cierra for each primero
?>