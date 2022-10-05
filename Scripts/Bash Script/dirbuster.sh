#!/bin/bash

for word in $(cat wordlist.txt);
do

resposta = $(curl -s -o /dev/null -w "%{http_code}" $1/$word/)

if ($resposta == 200);
then
print "funcionou"
fi


done



