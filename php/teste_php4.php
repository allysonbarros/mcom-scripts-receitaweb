<?php

require 'lib/nusoap/nusoap.php';

$client = new nusoap_client('https://gitlab.mcom.gov.br/-/snippets/1/raw/main/receita.wsdl', true);

$request = new stdClass();
$request->cnpj = '34028316000707';
$request->cpfUsuario = '09565995403';
$request->origem = "script_allyson";

$response = $client->call('CNPJ', [$request]);

var_dump($response);