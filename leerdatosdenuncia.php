<?php
//Tabla ----xml_t

$denunciaId=0; //int : Identificador de la denuncia
$tipoDenuncia=0; //int : Identificador del tipo de denuncia
$tipoDenunciaNombre=''; //string: Descripción del tipo de denuncia
$actaNro=0; //int: Número de Acta
$Anio=0; // int: Año de la denuncia
$dependenciaCargaId=0; // int: Identificador de la dependencia de carga
$dependenciaCargaSigla=''; // string: Sigla de la dependencia de carga
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
$DepartamentoNombre='';//string: Nombre del departamento
$LocalidadId=0; //int: Identificador de la localidad
$LocalidadNombre='';//string: Nombre de la localidad
$BarrioId=0;//int: Identificador del barrio
$barrioNombre=''; //string: Nombre del barrio
$CalleId=0; // int: Identificador de calle.
$CalleNombre=''; //string: Nombre de la calle
$LugarNro=''; // string: Número /block, torre, manzana, medidor, etc/
$latitud=''; //float: Latitud de la coordenada.
$longitud=''; //float: Longitud de la coordenada
$esViolenciaFamiliar='';//bool: Si se trata de violencia familiar aparentemente es desuso desde 2018
$esViolenciaDeGenero='';//bool: Si se trata de violencia de género
$alertadosPorSistemaVideoVigilancia=''; //bool: Si ha sido alertado por sistema de videovigilancia
$FiscaliaIntervinienteId=0; //int: Identificador de la Fiscalía interviniente
$FiscaliaIntervinienteNombre=''; //string: Nombre de la Fiscalía interviniente
$codigo=''; //string: Código de la denuncia
$institucionExtravio='';
$lugarModalidad='';

//Table4 ----xml_t4
$iIdInstitucion=0; $denunciaId=0; $Institucion=''; $NombreContacto=''; 
$DomicilioContacto=''; $TelefonoContacto=''; $EmailContacto='';

//Table5 ----xml_t5
$viaPublica=''; $tipoLugarId=0; $TipoLugarNombre=''; 
$modalidadId=0; $ModalidadNombre='';

// $actaNroActual=0; // 
// $AnioActual=0;
// $dependenciaActualId=0;
// $dependenciaActualSigla='';
// $dependenciaActualNombre='';
// $Relato='';$aportaPruebas='';$aportaPruebaDescripcion='';$medidasSolicVictima='';
// $juzgadoFamiliaInterviniente='';$ASjuzgadoFamiliaInterviniente='';$asesorMenoresInterviniente='';$antecedentes='';
// $conSecuestro='';$conSecuestroDescripcion='';$conDetenidos='';$conDetenidosDescripcion='';$informacionAdicional='';
// $testigoActo1=''; $testigoActo2=''; $menoresInvolucrados='';  

switch ($key) {
        case 'denunciaId':
            $denunciaId = filter_var($valor, FILTER_SANITIZE_NUMBER_INT);
                
        break;

        case 'tipoDenuncia':
            $tipoDenuncia= filter_var($valor, FILTER_SANITIZE_NUMBER_INT);
            break;
        
        case 'actaNro':
            $actaNro=filter_var($valor, FILTER_SANITIZE_NUMBER_INT);
            break;
        
        case 'anio':
            $Anio=filter_var($valor, FILTER_SANITIZE_NUMBER_INT);
            break;
        
        case 'dependenciaCargaId':
            $dependenciaCargaId=filter_var($valor, FILTER_SANITIZE_NUMBER_INT);
            break;
            
        case 'dependenciaCargaSigla':
            $dependenciaCargaSigla=htmlspecialchars($valor);

            break;
            
        case 'fchRegistro':
            $fchRegistro=htmlspecialchars($valor);
            break;
           
        case 'fchRegistro_str':
            $fchRegistro_str=htmlspecialchars($valor);
            break;
        
        case 'fchConfirmacion':
            $fchConfirmacion=htmlspecialchars($valor);
            break;
        
        case 'fchConfirmacion_str':
            $fchConfirmacion_str=htmlspecialchars($valor);
            break; 
        
        case 'hrExacta':
            $hrExacta=htmlspecialchars($valor);
            break;
        
        case 'fchHrHecho':
            $fchHrHecho=htmlspecialchars($valor);
            break;

        case 'fchHrHecho_str':
            $fchHrHecho_str=htmlspecialchars($valor);
            break;

        case 'hrHechoLibre':
            $hrHechoLibre=htmlspecialchars($valor);
            break;

        case 'lugarDelHecho':
            $lugarDelHecho=htmlspecialchars($valor);
            break;
        
        case 'departamentoId':
            $DepartamentoId=filter_var($valor, FILTER_SANITIZE_NUMBER_INT);
            break;
        
        case 'departamentoNombre':
            $DepartamentoNombre=htmlspecialchars($valor);
            break;
        
        case 'localidadId':
            $LocalidadId=filter_var($valor, FILTER_SANITIZE_NUMBER_INT);
            break;

        case 'localidadNombre':
            $LocalidadNombre=htmlspecialchars($valor);
            break;
        
        case 'barrioId':
            $BarrioId=filter_var($valor, FILTER_SANITIZE_NUMBER_INT);
            break;
        
        case 'barrioNombre':
            $barrioNombre=htmlspecialchars($valor);
            break;
        
        case 'calleId':
            $CalleId=filter_var($valor, FILTER_SANITIZE_NUMBER_INT);
            break;
        
        case 'calleNombre':
            $CalleNombre=htmlspecialchars($valor);
            break;
        
        case 'lugarNro':
            $LugarNro=htmlspecialchars($valor);
            break;
        
        case 'latitud':
            $latitud=filter_var($valor, FILTER_SANITIZE_NUMBER_FLOAT);
            break;
        
        case 'longitud':
            $longitud=filter_var($valor, FILTER_SANITIZE_NUMBER_FLOAT);
            break;
        
        case 'esViolenciaFamiliar':
            $esViolenciaFamiliar=htmlspecialchars($valor);
            break;
        
        case 'esViolenciaDeGenero':
            $esViolenciaDeGenero=htmlspecialchars($valor);
            break;
        
        case 'alertadosPorSistemaVideoVigilancia':
            $alertadosPorSistemaVideoVigilancia=htmlspecialchars($valor);
            break;

        case 'fiscaliaIntervinienteId':
            $FiscaliaIntervinienteId=filter_var($valor, FILTER_SANITIZE_NUMBER_INT);
            break;
        
        case 'fiscaliaIntervinienteNombre':
            $FiscaliaIntervinienteNombre=htmlspecialchars($valor);
            break;

        case 'codigo':
            $codigo=htmlspecialchars($valor);
            break;
        
        // INSTITUCION EXTRAVIADO*****************************************************

        case 'iIdInstitucion':
            $iIdInstitucion=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
            break;

        case 'institucion':
            $Institucion=htmlspecialchars($value);
            break;
            
        case 'nombreContacto':
            $NombreContacto=htmlspecialchars($value);
            break;

        case 'domicilioContacto':
            $DomicilioContacto=htmlspecialchars($value);
            break;
            
        case 'telefonoContacto':
            $TelefonoContacto=htmlspecialchars($value);
            break;
            
        case 'emailContacto':
            $EmailContacto=htmlspecialchars($value);
            break;
        // ******************************************************************************

        // LUGAR MODALIDAD****************************************************************
        
        case 'viaPublica':
            $viaPublica=htmlspecialchars($value);
            break;

        case 'tipoLugarId':
            $tipoLugarId=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
            break;
        
        case 'tipoLugarNombre':
            $TipoLugarNombre=htmlspecialchars($value);
            break;

        case 'modalidadId':
            $modalidadId=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
            break;
        
        case 'modalidadNombre':
            $ModalidadNombre=htmlspecialchars($value);
            break;

        // *******************************************************************************
        
        } //fin switch


       

?>