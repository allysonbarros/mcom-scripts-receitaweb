<?php

require 'lib/nusoap/nusoap.php';

$client = new nusoap_client('https://gitlab.mcom.gov.br/-/snippets/1/raw/main/receita.wsdl', true);

$request = new stdClass();
$request->CNPJ = '34028316000707';

$response = $client->call('CNPJ', [$request]);

var_dump($response);