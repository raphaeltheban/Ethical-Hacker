#!/user/bin/python

import requests
import urllib.request

site = requests.get("http://businesscorp.com.br")
status = site.status_code
content = site.content
header = site.headers
server = header['server']

if (status == 200):
	print ("\n Pagina existe")
	print ("\n O header do site é: ",header)
	print ("\n O SERVIDOR do site é: ",server)
	print ("\n O Conteudo do site é: ",content)

else:
	print ("Pagina não existe")

sites = urllib.request.urlopen("http://businesscorp.com.br")
conteudo = sites.read
code = sites.getcode()
info = sites.info()
server2 = info['server']

print ("\n\n\nInformações do site pela URL-LIB")

print ("\n\n URLLIB O Codigo do status do Site: \n", code)
print ("\n\n URLLIB AS Informações do site é: \n", info)
print ("\n\n URLLIB O SERVIDOR do site é: \n", server2)
print ("\n\n URLLIB O CONTEUDO do site é: \n", conteudo)
