<?php

$options = [
    'trace' => true,
    'exceptions' => true,
    'cache_wsdl' => WSDL_CACHE_NONE,
    'stream_context' => stream_context_create([
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false
        ]
    ])
];

$client = new SoapClient('https://gitlab.mcom.gov.br/-/snippets/1/raw/main/receita.wsdl', $options);

$request = new stdClass();
$request->CNPJ = '34028316000707';

$response = $client->__soapCall('CNPJ', [$request]);

var_dump($response);