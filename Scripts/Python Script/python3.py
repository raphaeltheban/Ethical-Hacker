#/usr/bin/python
import os
import sys

if len(sys.argv) <= 2: #o dois é a quantidade de argumentos
	print ("Informe os dois argumento, IP e Porta")
else:
	print ("Varrendo o host: ",sys.argv[1], "Na porta: ",sys.argv[2])

	host = input("Informe o HOST: ")
	for ip in range(1,10):
		print ("Varrendo os IPs:",host,ip)
