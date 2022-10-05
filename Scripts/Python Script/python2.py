#!/usr/bin/python
import os
import sys

print ("Varendo o host: ", sys.argv[1], "na porta: ", sys.argv[2])
print ("Verificando se o Roteador está Ligado")
os.system ("sudo ping -c 4 192.168.2.1")
