<?php

require_once ('connections/connxml.php');
require_once ('connections/conndbgral.php');
require_once ('connections/connsurc.php');
require_once ('connections/connextrapers.php');
require_once ('connections/conndbseg.php');

$xml_t_errormysql='';
$ultimoid='';
$lectura_array=0;
$Error='';
$Tipo_Error='';

$Table=array();
$Table1=array();
$Table1aux=array();
$Table2=array();
$Table2aux=array();
$Table3=array();
$Table3aux=array();
$Table4=array();
$Table4aux=array();
$Table5aux=array();
$Table5=array();
$Table6=array();
$Table6aux=array();
$Table7aux=array();
$Table7=array();
$Table8aux=array();
$Table8=array();
$Table9aux=array();
$Table9=array();
$Table12aux=array();
$Table12=array();
$Table13aux=array();
$Table13=array();
$Table14=array();
$Table14aux=array();
$Table10aux=array();
$Table10=array();
$denunciaID_MP='';
$json=array();

//********************************************************************/
	// Busqueda de ultimo id denuncia o xml ingresado********************/

	$id_xml_sumario = mysqli_query($conex_xml,'SELECT MAX(xml_auditoria_nroxml) as "id_xml_max" FROM xml.xml_auditoria');

	if ($id_xml_sumario) {
		
		$row = mysqli_fetch_array($id_xml_sumario);
		$ultimoid=trim($row[0]);
		
		echo 'ultimo id= '.$ultimoid.'<br>';

		$ultimoid=3626535;

		// *****************************************************************************************************
		//acceso webservice credenciales

		$endpoints = "https://denuncias.mpfsalta.gob.ar/PublicWebServices/WSDenunciasMigrar.asmx?wsdl";
		$UsuarioNombre = 'denunciasWsPolicia';
		$UsuarioClave = '2z20Cv9%nuhjzz#ORX';

		//SOAP

		$opts = array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false));

		$params = array ('encoding' => 'UTF-8', 'verifypeer' => false, 'verifyhost' => false, 'soap_version' => SOAP_1_2, 'trace' => 1, 'exceptions' => 1, "connection_timeout" => 180, 'stream_context' => stream_context_create($opts));

		$soap = new SoapClient($endpoints, $params);

		$auth = array(
    	        'UsuarioNombre'=>$UsuarioNombre,
     		    'UsuarioClave'=>$UsuarioClave
        );

		$header = new SoapHeader("http://tempuri.org/", 'Authentication', $auth, false);
		$soap->__setSoapHeaders($header);

		$parameters = array('JSONEntrada' => json_encode(array('denunciaId' => $ultimoid)));

		$denuncias = $soap->ObtenerDenunciasAMigrar($parameters);
		/* echo('<pre>');
		var_dump($denuncias);
		echo('</pre>'); */
		
		//2. También mediante foreach. Fijate que hay un var_dump($d), tenés que recorrer la variable porque son vectores
		
		foreach ($denuncias as $nombre => $arrayws ) {
			

			$jsonconsumido = json_decode($arrayws,true);
			
			//echo $lectura_array.'<br>';
			
			foreach ($jsonconsumido as $elemento => $valorarray) {
				
				//echo $elemento.'= '.$valorarray.'<br>';
				switch ($elemento) {
					case 'Error':
							echo 'ingreso a error'.'<br>';
							$Error=htmlspecialchars($valorarray);

							if ($valorarray=='') {
								break;
							}else {
								break 2;
							}
							

					case 'Denuncias':

						echo 'ingreso a panear toda las denuncias <br>';
						// comenzamos a leer el json de denuncias
						foreach ($valorarray as $elearray => $arrayvalor) {
						
							/* $json_data = json_encode($arrayvalor); */
							
							//echo 'json:'.$json_data.'<br>';
							// 'json encode:'.$elearray;
							
							//mysqli_query($conex_surc,"SET NAMES 'utf8'");
							
							/* $insert_surc_sumario="INSERT INTO prueba_json(
								prueba_json_descrip)
	   
								VALUES ('$json_data')";

							if (mysqli_query($conex_surc,$insert_surc_sumario)) {
								echo 'alta positiva';
							} */

							foreach ($arrayvalor as $key => $valor) {
								//echo $key.'= '.$valor.'<br>';
								include 'datos_denuncia.php';
								
								if (empty($xml_t_errormysql)) {
								 	//primero verificamos si existe en nuestra base de datos
								  	include 'yaexistedenunciamp.php';

								 	if (empty($xml_t_errormysql)) { 
								  		if ($row_yaexistedenunciamp['valor']==0) { //no existe denuncia xml

											include 'carga_sumarionuevo_surc.php';

								  		}else { // existe denuncia xml
											
											include ('cargar_sumarioexiste_surc.php');
										}

								  	}else{

										$Tipo_Error= 0;
								 		include 'grabar_auditoria_xml.php';

									}
								
								}else {
								 	// grabamos en auditoria el error de la lectura del nodo
									$Tipo_Error=0;
								 	include 'grabar_auditoria_xml.php';
								}
								
							} //cierra segundo foreach

							//include 'armar_json.php';
							//break 2;
														
						}//cierra primer foreach

						
						
						break;	
						
					
				}


				
				
			}

			$Tipo_Error='';
			$xml_t_errormysql='';

		}//termina de recorrer todo el webservicie

		if (empty($Error)) {
			echo "ingreso a grabar auditoria";
			$Tipo_Error=1;
			include 'grabar_auditoria_xml.php';
		}

	} else {

		// En caso de no poder obtener el ultimo id ingresado grabar error en auditoria xml********************
		echo "ingreso a grabar auditoria";
		$Tipo_Error=5;
		include 'grabar_auditoria_xml.php';


}

?>