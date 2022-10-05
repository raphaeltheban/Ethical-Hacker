#!/bin/bash
if [ "$1" == "" ]
then
	echo "Ygor Security"
	echo "Modo de uso $0 192.168.0.1 80"
else
echo "Varrendo o host: $1 na porta: $2"
fi
