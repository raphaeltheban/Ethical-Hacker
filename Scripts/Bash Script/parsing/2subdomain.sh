#!/bin/bash

cont=0

while [ $cont -lt 2 ];
do
	read -p 'Qual endereço você deseja fazer a varredura: ' end
	wget $end 2> /dev/null
	cp index.html $end.index.html
	rm index.html

	echo "\n\n##################>  FAZENDO VARREDURDA NO HOST: "$end

	grep "href" $end.index.html | cut -d "/" -f 3 | grep "\." | cut -d '"' -f 1 | grep -v "<li" > parsinglist

	echo "\n\n#################>  LISTA DE HOSTS\n\n "
	cat parsinglist

	echo "\n\n#################>  LISTA DE IP\n"
	for url in $(cat parsinglist);do host $url | grep -v "NX" |sort | cut -d " " -f 4;done

	read -p 'Deseja realizar uma nova consulta?? (1=yes ou 2=no)? ' cont
done
