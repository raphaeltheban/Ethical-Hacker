#!/usr/bin/python

import sys
from scapy.all import *

conf.verb = 0

print ("HOSTS ATIVOS")

for ip in range (100, 115):
	iprange = "192.168.2.%s" %ip
	pIP = IP(dst = iprange)
	pacote = pIP/ICMP()
	resp, noresp = sr(pacote, timeout=1)
	for resposta in resp:
		result = resposta[1][IP].src
		print (result)


