<?php

require "lib/nusoap/nusoap.php";

$client = new nusoap_client("https://gitlab.mcom.gov.br/-/snippets/1/raw/main/receita.wsdl", true);

$strMetodoWebservice = "CNPJ";

$parametro = array(
    [
        "cnpj" => "34028316000707",
        "cpfUsuario" => "09565995403",
        "origem" => "script_allyson"
    ]
);

$response = $client->call($strMetodoWebservice, $parametro);

var_dump($response);