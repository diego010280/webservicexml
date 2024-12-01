<?php
   $Table=array();
   if(sizeof($Table) == 0)
    echo "El array está vacío".'<br>';
    if(!$Table)
    echo "El array está vacío".'<br>';

    if(count($Table) == 0):
        echo "El array está vacío".'<br>';
    else:
        echo "No está vacío";
    endif;
?>