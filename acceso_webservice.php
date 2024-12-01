<?php

require_once ('connections/connxml.php');

$xml_t_errormysql='';
$ultimoid='';

//********************************************************************/
	// Busqueda de ultimo id denuncia o xml ingresado********************/

	$id_xml_sumario = mysqli_query($conex_xml,'SELECT MAX(xml_auditoria_nroxml) as "id_xml_max" FROM xml.xml_auditoria');
	//$id_xml_sumario=3239642;
	if ($id_xml_sumario) {
		
		$row = mysqli_fetch_array($id_xml_sumario);
		$ultimoid=trim($row[0]);
		$ultimoid=3616168;
		
		echo 'ultimo id= '.$ultimoid.'<br>';

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

		//$json_consumido = json_decode(json_encode($denuncias),true);

		// *********************************************************************************************************/
			// Verificacion de json si es exitosa

			/*foreach ( $json_consumido as $nombre => $hexa ) {
					
			}*/
			
		//**********************************************************************************************************/
		
		
		//1. Podés realizar la lectura haciendo referencia directamente a los elementos
		
		// echo json_decode($denuncias->ObtenerDenunciasAMigrarResult)->Denuncias[0]->denunciaId.'<br>';
		// echo json_decode($denuncias->ObtenerDenunciasAMigrarResult)->Denuncias[1]->denunciaId.'<br>';
		// echo json_decode($denuncias->ObtenerDenunciasAMigrarResult)->Denuncias[2]->denunciaId.'<br>';
		// echo json_decode($denuncias->ObtenerDenunciasAMigrarResult)->Denuncias[3]->denunciaId.'<br>';
		// echo json_decode($denuncias->ObtenerDenunciasAMigrarResult)->Denuncias[4]->denunciaId.'<br>';
		// echo json_decode($denuncias->ObtenerDenunciasAMigrarResult)->Denuncias[5]->denunciaId.'<br>';
		
		
		//2. También mediante foreach. Fijate que hay un var_dump($d), tenés que recorrer la variable porque son vectores
		
		foreach ($denuncias as $nombre => $hexa ) {
			
			$a = json_decode($hexa,true);
			
			foreach ($a['Denuncias'] as $aa => $b) {
				echo 'decodificada:'.$hexa.'<br>';
				foreach ($b as $c => $d) {
					
					if (is_array($d)) {
						var_dump($d);
					
					} else {
						echo $c.'= '.$d.'<br>';
					}
				}
			}
		}

	} else {
		// En caso de no poder obtener el ultimo id ingresado grabar error en auditoria xml********************
		include 'grabar_auditoria_xml.php';

		









	}







?>