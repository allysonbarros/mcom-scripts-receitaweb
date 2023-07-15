from zeep import Client

client = Client('https://gitlab.mcom.gov.br/-/snippets/1/raw/main/receita.wsdl')

result = client.service.CNPJ(CNPJ='34028316000707')

print(result)