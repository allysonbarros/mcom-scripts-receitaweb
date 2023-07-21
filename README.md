# Scripts de Validação - ReceitaWeb

O presente repositório tem por objetivo registrar os testes realizados para a validação do funcionamento do serviço web do MCom que consulta os dados da Receita Federal.

Para a validação foram desenvolvidos scripts em Python (usando as bibliotecas Zeep e Requests) e em PHP (usando as bibliotecas GuzzleHttp, SoapClient e Nusoap) e em todos eles, os dados foram retornados corretamente conforme captura de telas abaixo:

## Script 1 - Python usando a biblioteca Zeep

![Script 1 - Python usando a biblioteca Zeep](/.github/assets/resultado-zeep.png "Script 1 - Python usando a biblioteca Zeep")

## Script 2 - Python usando a biblioteca Requests

![Script 2 - Python usando a biblioteca Requests](/.github/assets/resultado-requests.png "Script 2 - Python usando a biblioteca Requests")

## Script 3 - PHP usando a biblioteca GuzzleHttp

![Script 3 - PHP usando a biblioteca GuzzleHttp](/.github/assets/resultado-guzzlehttp.png "Script 3 - PHP usando a biblioteca GuzzleHttp")

## Script 4 - PHP usando a biblioteca SoapClient

![Script 4 - PHP usando a biblioteca SoapClient](/.github/assets/resultado-soapclient.png "Script 4 - PHP usando a biblioteca SoapClient")

## Script 5 - PHP usando a biblioteca NuSoap (mesma utilizada no módulo de peticionamento)

### 5.1 - Usando a biblioteca NuSoap via Composer
![Script 5 - PHP usando a biblioteca NuSoap (mesma utilizada no módulo de peticionamento)](/.github/assets/resultado-nusoap-01.png "Script 5 - PHP usando a biblioteca NuSoap (mesma utilizada no módulo de peticionamento)")

### 5.2 - Usando a biblioteca NuSoap incorporada no módulo de peticionamento
![Script 5 - PHP usando a biblioteca NuSoap (mesma utilizada no módulo de peticionamento)](/.github/assets/resultado-nusoap-02.png "Script 5 - PHP usando a biblioteca NuSoap (mesma utilizada no módulo de peticionamento)")

![Script 5 - PHP usando a biblioteca NuSoap (mesma utilizada no módulo de peticionamento)](/.github/assets/resultado-nusoap-03.png "Script 5 - PHP usando a biblioteca NuSoap (mesma utilizada no módulo de peticionamento)")
