<?php

require 'vendor/autoload.php';

$client = new nusoap_client('https://gitlab.mcom.gov.br/-/snippets/1/raw/main/receita.wsdl', true);

$request = new stdClass();
$request->cnpj = '34028316000707';

$response = $client->call('CNPJ', [$request]);

var_dump($response);