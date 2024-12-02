<?php
$NroPers='';
$SURC_PersonaSumario_IdTipoPers='';
$PersonaSumario_DescripTipoPers='';
$SURC_PersonaSumario_DescripTipoPers='';
$SURC_Persona_Documento='';
$SURC_Persona_Sexo='';
$Persona_Apellido='';
$SURC_Persona_Apellido='';
$Persona_Nombre='';
$SURC_Persona_Nombre='';
$Persona_Domicilio='';
$SURC_Persona_Domicilio='';
$Persona_DomicilioLab='';
$SURC_Persona_DomicilioLab='';
$Personas_EmailContacto='';
$SURC_Personas_EmailContacto='';
$SURC_Persona_DescripProfesion='';
$SURC_Persona_FechNacim='';
$SURC_Persona_DescripLocalidadNac='';
$SURC_Persona_DescripLocalidad='';
$SURC_Persona_DescripNacionalidad='';
$Persona_Telefono='';
$SURC_Persona_Telefono='';
$SURC_Persona_Edad='';
$SURC_Persona_DatosPadres='';
$Persona_Alias='';
$SURC_Persona_Alias='';
$SURC_Persona_IdEstadoCivil='';
$SURC_Persona_DescripEstadoCivil='';
$SURC_PersonaSumario_Obs='';


        foreach ($Table2 as $nodotable => $valor) {


          foreach ($valor as $key => $value) {

            // echo "estes es el array".$nodotable."y su elemento es".$key."=$value"."<br>";
            switch ($key) {
                  case 'parteId':
                        $NroPers=intval($value);

                    break;

                  case 'rolId':
                          $SURC_PersonaSumario_IdTipoPers=intval($value);

                    break;

                  case 'rolNombre':
                          $PersonaSumario_DescripTipoPers=trim($value);
                          $SURC_PersonaSumario_DescripTipoPers=utf8_decode(mysqli_real_escape_string($conex_surc,$PersonaSumario_DescripTipoPers));


                      break;


                  case 'dni_nro':
                              $SURC_Persona_Documento=intval($value);

                      break;

                  case 'sexo':
                              $SURC_Persona_Sexo=mb_strtoupper(Trim($value));

                      break;

                  case 'apellido':

                              $Persona_Apellido=mb_strtoupper(utf8_encode(utf8_decode(mysqli_real_escape_string($conex_surc,$value))));
                              $SURC_Persona_Apellido=str_replace('"'," ",$Persona_Apellido);
                              $SURC_Persona_Apellido=substr($SURC_Persona_Apellido,0,39);

                      break;

                  case 'nombre':
                                  $Persona_Nombre=mb_strtoupper(utf8_encode(utf8_decode(mysqli_real_escape_string($conex_surc,$value))));
                                  $SURC_Persona_Nombre=str_replace('"'," ",$Persona_Nombre);
                                  $SURC_Persona_Nombre=substr($SURC_Persona_Nombre,0,39);

                      break;

                  case 'domicilio':
                                  $Persona_Domicilio=mb_strtoupper(utf8_encode(utf8_decode(mysqli_real_escape_string($conex_surc,$value))));
                                  $SURC_Persona_Domicilio=str_replace('"'," ",$Persona_Domicilio);

                        break;

                  case 'domicilioLaboral':
                                  $Persona_DomicilioLab=mb_strtoupper(utf8_encode(utf8_decode(mysqli_real_escape_string($conex_surc,$value))));
                                  $SURC_Persona_DomicilioLab=str_replace('"'," ",$Persona_DomicilioLab);

                        break;

                  case 'email':
                                  $Personas_EmailContacto=mb_strtoupper(utf8_encode(utf8_decode(mysqli_real_escape_string($conex_surc,$value))));
                                  $SURC_Personas_EmailContacto=str_replace('"'," ",$Personas_EmailContacto);

                        break;

                  case 'profesion':
                                  $SURC_Persona_DescripProfesion=mb_strtoupper(utf8_encode(utf8_decode(mysqli_real_escape_string($conex_surc,$value))));


                       break;

                  case 'FchNacimiento':

                              if (!empty($value)) {
                                   $SURC_Persona_FechNacim=date("Y-m-d",strtotime($value));
                              }else {
                                $SURC_Persona_FechNacim='';
                              }


                        break;

                  case 'LugarNacimiento':

                                   $SURC_Persona_DescripLocalidadNac=mb_strtoupper(utf8_encode(utf8_decode(mysqli_real_escape_string($conex_surc,$value))));

                        break;

                  case 'ciudad':

                                   $SURC_Persona_DescripLocalidad=mb_strtoupper(utf8_encode(utf8_decode(mysqli_real_escape_string($conex_surc,$value))));

                        break;

                  case 'nacionalidad':

                               $SURC_Persona_DescripNacionalidad=mb_strtoupper(utf8_encode(utf8_decode(mysqli_real_escape_string($conex_surc,$value))));

                        break;

                  case 'telefono':

                               $Persona_Telefono=mb_strtoupper(utf8_encode(utf8_decode(mysqli_real_escape_string($conex_surc,$value))));
                               $SURC_Persona_Telefono=substr($Persona_Telefono,0,20);
                        break;

                  case 'edad':

                               $SURC_Persona_Edad=intval($value);

                               if (!empty($SURC_Persona_Edad)) {
                                     if ($SURC_Persona_Edad<18) {
                                       $SURC_PersonaSumario_EsMenor='S';
                                     }else {
                                       $SURC_PersonaSumario_EsMenor='N';
                                     }
                               }else {
                                 $SURC_PersonaSumario_EsMenor='';
                               }

                        break;

                  case 'nombrePadres':

                               $SURC_Persona_DatosPadres=mb_strtoupper(utf8_encode(utf8_decode(mysqli_real_escape_string($conex_surc,$value))));

                        break;

                  case 'alias':
                              $Persona_Alias=mb_strtoupper(utf8_encode(utf8_decode(mysqli_real_escape_string($conex_surc,$value))));
                              $SURC_Persona_Alias=str_replace('"'," ",$Persona_Alias);

                        break;

                  case 'EstadoCivilId':

                            $SURC_Persona_IdEstadoCivil=intval($value);

                        break;

                  case 'EstadoCivilNombre':

                             $SURC_Persona_DescripEstadoCivil=mb_strtoupper(utf8_encode(utf8_decode(mysqli_real_escape_string($conex_surc,$value))));

                        break;

                  case 'observaciones':
                            $SURC_PersonaSumario_Obs=mb_strtoupper(utf8_encode(utf8_decode(mysqli_real_escape_string($conex_surc,$value))));
                      break;


            }//vierra switch


          }//cierra segundo for each


          include ('sumario_grabaPersonaMP_xml.php');

          if (empty($xml_t_errormysql)) {
                  if ($SURC_PersonaSumario_IdTipoPers==9) { // persona extraviada
                    include ('datos_alta_extraviado.php');

                  }
          }


        }//cierra primer for each





 ?>
