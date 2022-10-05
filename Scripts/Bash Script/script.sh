#!/bin/bash/

echo "Autorizado"
echo "1 - Sim"
echo "2 - Não"

read resp
case $resp in
"1")
	echo "Pode fazer pentest"
;;
"2")
	echo "Aguarde"
;;
esac

echo "======================"


echo "Qual a cor do semaforo: "
read sema

if [ "$sema" == "verde" ]
then
	echo "Pode passar"
elif [ "$sema" == "amarelo" ]
then
	echo "Cuidado"
else
	echo "Pare"
fi

echo "======================="

echo "Qual sua idade? "
read idade

if [ "$idade" -ge "18" ]
then
	echo "pode dirigir"
else
	echo "Não pode dirigir"
fi
