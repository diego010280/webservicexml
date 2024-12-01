<?php

$denunciaId=0; //int : Identificador de la denuncia
$tipoDenuncia=0; //int : Identificador del tipo de denuncia
$tipoDenunciaNombre=''; //string: Descripción del tipo de denuncia
$actaNro=0; //int: Número de Acta
$Anio=0; // int: Año de la denuncia
$actaNroActual=0; //int: Número de Acta derivada
$AnioActual=0; // int: Año de la denuncia derivada
$dependenciaCargaId=0; // int: Identificador de la dependencia de carga
$dependenciaCargaSigla=''; // string: Sigla de la dependencia de carga
$dependenciaActualId=0;
$dependenciaActualSigla='';
$dependenciaActualNombre='';
$dependenciaCargaNombre=''; // string: Nombre de la dependencia de carga
$fchRegistro=''; //DateTime nulleable: Fecha de carga de la denuncia
$fchRegistro_str=''; // string: Fecha de carga de la denuncia, en formato string dd/MM/yyyy HH:mm:ss.
$fchConfirmacion=''; // DateTime nulleable: Fecha de confirmación de la denuncia
$fchConfirmacion_str='';// string: Fecha de confirmación de la denuncia, en formato string dd/MM/yyyy HH:mm:ss
$hrExacta='';//string: Especificación de la hora exacta
$fchHrHecho=''; //DateTime nulleable: Fecha y hora del hecho
$fchHrHecho_str='';//string: Fecha y hora del hecho, en formato string dd/MM/yyyy HH:mm:ss
$hrHechoLibre=''; //string: Hora del hecho
$lugarDelHecho=''; //string: Lugar del hecho
$DepartamentoId=0; //int: Identificador del departamento
$Relato='';
$DepartamentoNombre='';//string: Nombre del departamento
$LocalidadId=0; //int: Identificador de la localidad
$LocalidadNombre='';//string: Nombre de la localidad
$BarrioId=0;//int: Identificador del barrio
$barrioNombre=''; //string: Nombre del barrio
$CalleId=0; // int: Identificador de calle.
$CalleNombre=''; //string: Nombre de la calle
$LugarNro=''; // string: Número /block, torre, manzana, medidor, etc/
$latitud=0.0; //float: Latitud de la coordenada.
$longitud=0.0; //float: Longitud de la coordenada
$esViolenciaFamiliar='';//bool: Si se trata de violencia familiar aparentemente es desuso desde 2018
$esViolenciaDeGenero='';//bool: Si se trata de violencia de género
$alertadosPorSistemaVideoVigilancia=''; //bool: Si ha sido alertado por sistema de videovigilancia
$FiscaliaIntervinienteId=0; //int: Identificador de la Fiscalía interviniente
$FiscaliaIntervinienteNombre=''; //string: Nombre de la Fiscalía interviniente
$codigo=''; //string: Código de la denuncia


//recorremos el array de las denuncias y preguntamos por sus datos si son array o nulos

switch ($key) {

    case 'denunciaId':
        $denunciaId = filter_var($valor, FILTER_SANITIZE_NUMBER_INT);
        $Table['denunciaId'] = $denunciaId; 
        echo 'denunciaId:'.$denunciaId.'<br>'; 
    break;

    case 'tipoDenuncia':
        $tipoDenuncia= filter_var($valor, FILTER_SANITIZE_NUMBER_INT);
        $Table['tipoDenuncia'] = $tipoDenuncia;
        echo 'tipoDenuncia:'.$tipoDenuncia.'<br>'; 
        break;

    case 'tipoDenunciaNombre':
        $tipoDenunciaNombre= htmlspecialchars($valor);
        $Table['tipoDenunciaNombre'] = $tipoDenunciaNombre;
        echo 'tipoDenunciaNombre:'.$tipoDenunciaNombre.'<br>'; 
        break;
        
    case 'actaNro':
        $actaNro=filter_var($valor, FILTER_SANITIZE_NUMBER_INT);
        $Table['actaNro'] = $actaNro;
        echo 'actaNro:'.$actaNro.'<br>'; 
        break;
    
    case 'actaNroActual':
        $actaNroActual=filter_var($valor, FILTER_SANITIZE_NUMBER_INT);
        $Table['actaNroActual'] = $actaNroActual;
        echo 'actaNroActual:'.$actaNroActual.'<br>';
        break;
    
    case 'anio':
        $Anio=filter_var($valor, FILTER_SANITIZE_NUMBER_INT);
        $Table['anio'] = $Anio;
        echo 'Anio:'.$Anio.'<br>';
        break;
    
    case 'AnioActual':
        $AnioActual=filter_var($valor, FILTER_SANITIZE_NUMBER_INT);
        $Table['AnioActual'] = $AnioActual;
        echo 'AnioActual:'.$AnioActual.'<br>';
        break;
    
    case 'dependenciaCargaId':
        $dependenciaCargaId=filter_var($valor, FILTER_SANITIZE_NUMBER_INT);
        $Table['dependenciaCargaId'] = $dependenciaCargaId;
        echo 'dependenciaCargaId:'.$dependenciaCargaId.'<br>';
        break;
        
    case 'dependenciaCargaSigla':
        $dependenciaCargaSigla=htmlspecialchars($valor);
        $Table['dependenciaCargaSigla'] = $dependenciaCargaSigla;
        echo 'dependenciaCargaSigla:'.$dependenciaCargaSigla.'<br>';
        break;
    
    case 'dependenciaCargaNombre':
        $dependenciaCargaNombre=htmlspecialchars($valor);
        $Table['dependenciaCargaNombre'] = $dependenciaCargaNombre;
        echo 'dependenciaCargaNombre:'.$dependenciaCargaNombre.'<br>';
        break;
    
    case 'dependenciaActualId':
        $dependenciaActualId=filter_var($valor, FILTER_SANITIZE_NUMBER_INT);
        $Table['dependenciaActualId'] = $dependenciaActualId;
        echo 'dependenciaActualId:'.$dependenciaActualId.'<br>';
        break;

    case 'dependenciaActualSigla':
        $dependenciaActualSigla=htmlspecialchars($valor);
        $Table['dependenciaActualSigla'] = $dependenciaActualSigla;
        echo 'dependenciaActualSigla:'.$dependenciaActualSigla.'<br>';
        break;
    
    case 'dependenciaActualNombre':
        $dependenciaActualNombre=htmlspecialchars($valor);
        $Table['dependenciaActualNombre'] = $dependenciaActualNombre;
        echo 'dependenciaActualNombre:'.$dependenciaActualNombre.'<br>';
        break;
       
        
    case 'fchRegistro':
        $fchRegistro=htmlspecialchars($valor);
        $Table['fchRegistro'] = $fchRegistro;
        echo 'fchRegistro:'.$fchRegistro.'<br>';
        break;
       
    case 'fchRegistro_str':
        $fchRegistro_str=htmlspecialchars($valor);
        $Table['fchRegistro_str'] = $fchRegistro_str;
        echo 'fchRegistro_str:'.$fchRegistro_str.'<br>';
        break;
    
    case 'fchConfirmacion':
        $fchConfirmacion=htmlspecialchars($valor);
        $Table['fchConfirmacion'] = $fchConfirmacion;
        echo 'fchConfirmacion:'.$fchConfirmacion.'<br>';
        break;
    
    case 'fchConfirmacion_str':
        $fchConfirmacion_str=htmlspecialchars($valor);
        $Table['fchConfirmacion_str'] = $fchConfirmacion_str;
        echo 'fchConfirmacion_str:'.$fchConfirmacion_str.'<br>';
        break; 
    
    case 'hrExacta':
        $hrExacta=htmlspecialchars($valor);
        $Table['hrExacta'] = $hrExacta;
        echo 'hrExacta:'.$hrExacta.'<br>';
        break;
    
    case 'fchHrHecho':
        $fchHrHecho=htmlspecialchars($valor);
        $Table['fchHrHecho'] = $fchHrHecho;
        echo 'fchHrHecho:'.$fchHrHecho.'<br>';
        break;

    case 'fchHrHecho_str':
        $fchHrHecho_str=htmlspecialchars($valor);
        $Table['fchHrHecho_str'] = $fchHrHecho_str;
        echo 'fchHrHecho_str:'.$fchHrHecho_str.'<br>';
        break;

    case 'hrHechoLibre':
        $hrHechoLibre=htmlspecialchars($valor);
        $Table['hrHechoLibre'] = $hrHechoLibre;
        echo 'hrHechoLibre:'.$hrHechoLibre.'<br>';
        break;

    case 'lugarDelHecho':
        $lugarDelHecho=htmlspecialchars($valor);
        $Table['lugarDelHecho'] = $lugarDelHecho;
        echo 'lugarDelHecho:'.$lugarDelHecho.'<br>';
        break;
    
    case 'Relato':
        $Relato=htmlspecialchars($valor);
        $Relato=str_replace("'","\'",$Relato);
        $Table['Relato'] = $Relato;
        echo 'Relato:'.$Relato.'<br>';
        break;
        
    case 'departamentoId':
        $DepartamentoId=filter_var($valor, FILTER_SANITIZE_NUMBER_INT);
        $Table['departamentoId'] = $DepartamentoId;
        echo 'DepartamentoId:'.$DepartamentoId.'<br>';
        break;
    
    case 'departamentoNombre':
        $DepartamentoNombre=htmlspecialchars($valor);
        $Table['departamentoNombre'] = $DepartamentoNombre;
        echo 'DepartamentoNombre:'.$DepartamentoNombre.'<br>';
        break;
    
    case 'localidadId':
        $LocalidadId=filter_var($valor, FILTER_SANITIZE_NUMBER_INT);
        $Table['localidadId'] = $LocalidadId;
        echo 'LocalidadId:'.$LocalidadId.'<br>';
        break;

    case 'localidadNombre':
        $LocalidadNombre=htmlspecialchars($valor);
        $Table['localidadNombre'] = $LocalidadNombre;
        echo 'LocalidadNombre:'.$LocalidadNombre.'<br>';
        break;
    
    case 'barrioId':
        $BarrioId=filter_var($valor, FILTER_SANITIZE_NUMBER_INT);
        $Table['barrioId'] = $BarrioId;
        echo 'BarrioId:'.$BarrioId.'<br>';
        break;
    
    case 'barrioNombre':
        $barrioNombre=htmlspecialchars($valor);
        $Table['barrioNombre'] = $barrioNombre;
        echo 'barrioNombre:'.$barrioNombre.'<br>';
        break;
    
    case 'calleId':
        $CalleId=filter_var($valor, FILTER_SANITIZE_NUMBER_INT);
        $Table['calleId'] = $CalleId;
        echo 'CalleId:'.$CalleId.'<br>';
        break;
    
    case 'calleNombre':
        $CalleNombre=htmlspecialchars($valor);
        $Table['calleNombre'] = $CalleNombre;
        echo 'CalleNombre:'.$CalleNombre.'<br>';
        break;
    
    case 'lugarNro':
        $LugarNro=htmlspecialchars($valor);
        $Table['lugarNro'] = $LugarNro;
        echo 'LugarNro:'.$LugarNro.'<br>';
        break;
    
    case 'latitud':
        $latitud=filter_var($valor, FILTER_SANITIZE_NUMBER_FLOAT);
        $Table['latitud'] = $latitud;
        echo 'latitud:'.$latitud.'<br>';
        break;
    
    case 'longitud':
        $longitud=filter_var($valor, FILTER_SANITIZE_NUMBER_FLOAT);
        $Table['longitud'] = $longitud;
        echo 'longitud:'.$longitud.'<br>';
        break;
    
    case 'esViolenciaFamiliar':
        $esViolenciaFamiliar=htmlspecialchars($valor);
        $Table['esViolenciaFamiliar'] = $esViolenciaFamiliar;
        echo 'esViolenciaFamiliar:'.$esViolenciaFamiliar.'<br>';
        break;
    
    case 'esViolenciaDeGenero':
        $esViolenciaDeGenero=htmlspecialchars($valor);
        $Table['esViolenciaDeGenero'] = $esViolenciaDeGenero;
        echo 'esViolenciaDeGenero:'.$esViolenciaDeGenero.'<br>';
        break;
    
    case 'alertadosPorSistemaVideoVigilancia':
        $v=htmlspecialchars($valor);
        $Table['alertadosPorSistemaVideoVigilancia'] = $alertadosPorSistemaVideoVigilancia;
        echo 'alertadosPorSistemaVideoVigilancia:'.$alertadosPorSistemaVideoVigilancia.'<br>';
        break;

    case 'fiscaliaIntervinienteId':
        $FiscaliaIntervinienteId=filter_var($valor, FILTER_SANITIZE_NUMBER_INT);
        $Table['fiscaliaIntervinienteId'] = $FiscaliaIntervinienteId;
        echo 'FiscaliaIntervinienteId:'.$FiscaliaIntervinienteId.'<br>';
        break;
    
    case 'fiscaliaIntervinienteNombre':
        $FiscaliaIntervinienteNombre=htmlspecialchars($valor);
        $Table['fiscaliaIntervinienteNombre'] = $FiscaliaIntervinienteNombre;
        echo 'FiscaliaIntervinienteNombre:'.$FiscaliaIntervinienteNombre.'<br>';
        break;

    case 'codigo':
        $codigo=htmlspecialchars($valor);
        $Table['codigo'] = $codigo;
        echo 'codigo:'.$codigo.'<br>';
        break;

    case 'tipoConceptual':
        $tipoConceptual=filter_var($valor, FILTER_SANITIZE_NUMBER_INT);
        $Table['tipoConceptual'] = $tipoConceptual;
        echo 'tipoConceptual:'.$tipoConceptual.'<br>';
        break;

    case 'tipoConceptualDescripcion':
        $tipoConceptualDescripcion=htmlspecialchars($valor);
        $Table['tipoConceptualDescripcion'] = $tipoConceptualDescripcion;
        echo 'tipoConceptualDescripcion:'.$tipoConceptualDescripcion.'<br>';
        break;

    case 'tipoRPJ':
        $tipoRPJ=filter_var($valor, FILTER_SANITIZE_NUMBER_INT);
        $Table['tipoRPJ'] = $tipoRPJ;
        echo 'tipoRPJ:'.$tipoRPJ.'<br>';
        break;
    
    case 'delitos':
        if (is_array($valor)) {
            if (count($valor) > 0){
                echo 'ingreso a delito <br>';
                include 'leerdelito.php';
               
            }else {
                echo 'delitos esta vacio <br>';
            }
            
            
        }
        break;
    
    case 'partes':
        if (is_array($valor)) {

            if (count($valor)> 0) {
                echo 'ingreso a partes <br>';
                include 'leerpartes.php';
            }else {
                echo 'ingreso a partes array vacio <br>';
            }
            
        }
        break;
    
    case 'extraviados':
        if (is_array($valor)) {

            if (count($valor)> 0) {
                echo 'ingreso a extraviados <br>';
                include 'leerextraviados.php';
            }else {
                echo 'ingreso a extraviados vacio <br>';
            }
            
        }
        break;
    
    case 'institucionExtravio':
        if (is_array($valor)) {

            if (count($valor)> 0) {
                echo 'institucionExtravio <br>';
                include 'leerinstitucionextraviados.php';
            }else {
                echo 'es nulo institucionExtravio <br>';
            }
            
        }else {
            echo 'no es array institucionExtravio <br>';
        }
        break;

    case 'lugarModalidad':
        if (is_array($valor)) {
            if (count($valor)> 0) {
                echo 'lugarModalidad <br>';
                include 'leerlugarmodalidad.php';
            }else {
                echo 'es nulo lugar modalidad <br>';
            }
           
        }else {
            echo 'es nulo el array lugarModalidad <br>';
        }
        break;
    
    case 'objetosSustraidos':
        if (is_array($valor)) {

            if (count($valor)> 0) {
                echo 'ingreso objetosSustraidos <br>';
                include 'leerobjetosustraido.php';
            }else {
                echo 'es nulo el array objetosSustraidos <br>';
            }
            
        }else {
            echo 'no es array objetosSustraidos <br>';
        }
        break;
    
    case 'objetosSecuestrados':
        if (is_array($valor)) {

            if (count($valor)> 0) {
                echo 'ingreso objetosSecuestrados <br>';
                include 'leerobjetosecuestrado.php';
            }else {
                echo 'es nulo objetosSecuestrados <br>';
            }
           
        }else {
            echo 'no es array objetosSecuestrados <br>';
        }
        break;
    
    case 'objetosUtilizados':
        if (is_array($valor)) {
            if (count($valor)> 0) {
                echo 'ingreso objetosUtilizados <br>';
                include 'leerobjetosutilizados.php';
            }else {
                echo 'es nulo objetosUtilizados <br>';
            }
            
        }else {
            echo 'no es array objetosUtilizados <br>';
        }
        break;
    
    case 'ampliaciones':
        if (is_array($valor)) {
            if (count($valor)> 0) {
                echo 'ingreso ampliaciones <br>';
                include 'leerampliaciones.php';
            }else {
                echo 'es nulo ampliaciones <br>';
            }
            
        }else {
            echo 'no es array ampliaciones <br>';
        }
        break;
    
    case 'diligenciasExtraviado':
        if (is_array($valor)) {
            if (count($valor)> 0) {
                echo 'ingreso diligenciasExtraviado <br>';
                include 'leerdiligenciaextraviado.php';
            }else {
                echo 'es nulo diligenciasExtraviado <br>';
            }
            
        }else {
            echo 'no es array diligenciasExtraviado <br>';
        }
        break;
    
    case 'vinculados':
        if (is_array($valor)) {
            if (count($valor)> 0) {
                echo 'ingreso vinculados <br>';
                include 'leervinculados.php';
            }else {
                echo 'es nulo vinculados <br>';
            }
            
        }else {
            echo 'es nulo array vinculados <br>';
        }

        break;
    
    case 'estados':

        if (is_array($valor)) {

            if (count($valor)> 0) {
                echo 'ingreso estados <br>';
                include 'leerestados.php';
            }else {
                echo 'es nulo estados <br>';
            }
            
        }else {
            echo 'es nulo array estados <br>';
        }

        break;

    case 'contravencional':
        if (is_array($valor)) {

            if (count($valor)> 0) {
                echo 'ingreso contravencional <br>';
                include 'leercontravencional.php';
            }else {
                echo 'es nulo contravencional <br>';
            }
            
        }else {
            echo 'no es array contravencional <br>';
        }

        break;
    
}



        // var_dump($valor);
        // echo '<pre>';
        // print_r($valor);
        // echo '</pre>';
        
          // include 'tabla.php';
        //  echo $key.'= '.$valor.'<br>';

?>