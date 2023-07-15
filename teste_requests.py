import requests

url = 'https://cnpj-webservice-spring.dev.mcom.gov.br/ws'
headers = {'Content-Type': 'text/xml; charset=utf-8'}

data = """<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:cnpj="https://servicos.mcom.gov.br/ws/cnpj/">
   <soapenv:Header/>
   <soapenv:Body>
      <cnpj:CNPJRequest>
         <cnpj:CNPJ>34028316000707</cnpj:CNPJ>
      </cnpj:CNPJRequest>
   </soapenv:Body>
</soapenv:Envelope>"""

response = requests.post(url, data=data, headers=headers)

print(response.content)