<?php

$id_surc_sumario = mysqli_query($conex_surc,'SELECT MAX(xml_auditoria_nroxml) as "id_xml_max" FROM xml.xml_auditoria');

if ($id_surc_sumario) {
    # code...
}else {
    # code...
}


?>