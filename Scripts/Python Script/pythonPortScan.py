#!/usr/bin/python

import sys
import socket

#ip = input("Informe o IP para varredura: ")
#porta = int(input("Informe a porta para ferificação: "))
ip = sys.argv[1]
#porta = int(sys.argv[2])

print ("\n Varrendo portas do Host: ",ip, "...AGUARDE...")

for porta in range(1,65523):
	meusocket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
	if (meusocket.connect_ex((ip,porta)) == 0):
		print ("Porta",porta,"Aberta")
		meusocket.close()
#if (res == 0):
#	print ("Porta",porta, "Aberta")
#	meusocket.close()
#else:
#	print ("Porta",porta, "Fechada")
