#!/bin/bash
#Meu primeiro Script

echo "Imprime alguma coisa" # commando para impimir uma saida
echo "tempo em que o PC está ligado: " $(uptime -p)
echo "diretório: " $(pwd)
echo "User: " $(whoami)

echo "Infome o IP"
read ip

porta=80

echo "varrendo o host: " $ip "Na porta: " $porta

echo "====================================="

echo "digite o serviço a ser iniciado"
read var1
service $var1 restart
echo "--------Serviços ativos------"
ps aux | grep $var1

echo "--------Portas abertas: -----------"
netstat -nlpt
 
