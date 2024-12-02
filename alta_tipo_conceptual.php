<?php
$ref_alta_tipo_conceptual='';

mysqli_query($conex_surc,"SET NAMES 'utf8'");

/* Tabla surc_mov_tipact se encuentra la tipologia de la denuncia */

$verificar_existe="SELECT COUNT(*) as 'valor' FROM surc.surc_mov_tipact
                    where surc_mov_tipact_idmpf='$denunciaID_MP';";

if ($yaexiste_sum=mysqli_query($conex_surc,$verificar_existe)) {

    $row_yaexiste_sum=mysqli_fetch_array($yaexiste_sum);

    if (($row_yaexiste_sum['valor']==0) and (!empty($denunciaID_MP))) {

          $insert_mov_concepto="INSERT INTO surc_mov_tipact(surc_mov_tipact_idmpf, surc_mov_tipact_idtiprpj, surc_mov_tipact_iditpconc,surc_mov_tipact_esta) VALUES ('$denunciaID_MP','$surc_mov_tipact_idtiprpj','$surc_mov_tipact_iditpconc',1)";

            if (mysqli_query($conex_surc,$insert_mov_concepto)) {
                $ref_alta_tipo_conceptual='***Se dio alta tipo conceptual y juvenil***';
            }else {
                $xml_t_errormysql="Error: La ejecución de la ALTA DE TIPO CONCEPTUAL - JUVENIL de sumarios surc debido a:".mysqli_error($conex_surc);
            }

    }

}else {
   $xml_t_errormysql="Error: La ejecución de la consulta buscando si existe el sum en tabla MOVIMIENTO TIPO CONCEPTUAL - JUVENIL:".mysqli_error($conex_surc);
}

?>