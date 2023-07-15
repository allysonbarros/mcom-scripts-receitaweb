<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

$client = new Client();
$url = 'https://cnpj-webservice-spring.dev.mcom.gov.br/ws';
$headers = [
    'Content-Type' => 'text/xml'
];
$data = <<<XML
<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:cnpj="https://servicos.mcom.gov.br/ws/cnpj/">
   <soapenv:Header/>
   <soapenv:Body>
      <cnpj:CNPJRequest>
         <cnpj:CNPJ>34028316000707</cnpj:CNPJ>
      </cnpj:CNPJRequest>
   </soapenv:Body>
</soapenv:Envelope>
XML;

$response = $client->post($url, [
    RequestOptions::HEADERS => $headers,
    RequestOptions::BODY => $data
]);

echo $response->getBody()->getContents();