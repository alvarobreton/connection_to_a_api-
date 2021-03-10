<?php
$url 		= "[URL]";
		
$data = [
  'name' 		=> 	'ANDRES MANUEL',
  'paternal' 		=>	'LOPEZ',
  'maternal' 		=> 	'OBRADOR',
  'birthdate'		=> 	'1940-05-05',
  'curp' 		=> 	'LOAP400505MH3',
  'rfc'			=>	'LOAP400505MH3',
  'person_type'		=>	1
];

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER 	=> 	true,
  CURLOPT_ENCODING 		=> 	"",
  CURLOPT_MAXREDIRS 		=> 	10,
  CURLOPT_TIMEOUT 		=> 	500,
  CURLOPT_SSL_VERIFYPEER	=>	FALSE,
  CURLOPT_HTTP_VERSION 	=> 	CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST 	=> 	"POST",
  CURLOPT_POSTFIELDS 		=> 	http_build_query($data),
  CURLOPT_HTTPHEADER 		=> 	array(
    "Cache-Control: no-cache",
    "Content-Type: application/x-www-form-urlencoded",
    "X-API-KEY: [KEY]"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

?>
