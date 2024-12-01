<?php
$array=explode(" ",$Sumario_HoraDel);

foreach ($array as $value) {

  $pattern="/^([0-1][0-9]|[2][0-3])[\:]([0-5][0-9])[\:]([0-5][0-9])$/";

     if(preg_match($pattern,$value)){
        // $SURC_Sumario_HoraDel=$value;
        $SURC_Sumario_HoraDel='1000-01-01'.' '.date('H:i:s',strtotime("$value + 3 hours"));
        break;
     }else {

       $pattern_sin_segundo="/^([0-1][0-9]|[2][0-3])[\:]([0-5][0-9])$/";

       if (preg_match($pattern_sin_segundo,$value)) {
          $SURC_Sumario_HoraDeleditar=$value.':00';
          $SURC_Sumario_HoraDel='1000-01-01'.' '.date('H:i:s',strtotime("$SURC_Sumario_HoraDeleditar + 3 hours"));
          break;
       }else {
          $SURC_Sumario_HoraDel='1000-01-01'.' '.'00:00:00';
       }

     }


}






 ?>
