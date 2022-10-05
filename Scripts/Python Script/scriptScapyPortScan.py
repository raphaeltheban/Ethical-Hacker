#!/usr/bin/python

import sys
from scapy.all import *

porta = [22, 80, 443, 445, 135, 8080]

conf.verb = 0

pIP  = IP(dst=sys.argv[1])

pTCP = TCP(dport = porta, flags = "S")

pacote = pIP/pTCP

resp, noresp = sr(pacote)

for resposta in resp:
	porta = resposta[1][TCP].sport
	flag  = resposta[1][TCP].flags

	if (flag == 'SA'):
		print ('porta' ,porta, 'aberta')


