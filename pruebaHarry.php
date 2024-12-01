<?php
require_once ('connections/connxml.php');

$ultimoid = 2847480;
		
$endpoints = "https://denuncias.mpfsalta.gob.ar/PublicWebServices/WSDenunciasMigrar.asmx?wsdl";

$UsuarioNombre = 'denunciasWsPolicia';
$UsuarioClave = '2z20Cv9%nuhjzz#ORX';

$context = stream_context_create(array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
    ),
));

try {
	$client = new SoapClient($endpoints, array('trace' => 1, 'stream_context' => $context));
	
	$authentication = array(
		'UsuarioNombre' => $UsuarioNombre,
		'UsuarioClave' => $UsuarioClave
	);
	
	$header = new SoapHeader('http://tempuri.org/', 'Authentication', $authentication);
	
	$jsonEntrada = json_encode(array(
		'denunciaId' => 2847480
	));
	
	$params = array(
		'JSONEntrada' => $jsonEntrada
	);
	
	$response = $client->__soapCall('ObtenerDenunciasAMigrar', array($params), null, $header);
	
	var_dump($response);

} catch (SoapFault $fault) {
   
    echo "Error: {$fault->faultcode}, Mensaje: {$fault->faultstring}";
}
?>