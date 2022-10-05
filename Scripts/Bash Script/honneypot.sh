#!/bin/bash

echo "...Abrindo portas..."

nc -vnlp 21&

nc -vnlp 22&

echo "Portas Abertas"

netstat -lntp
