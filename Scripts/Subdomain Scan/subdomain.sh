#!/bin/bash

wget $1 2> /dev/null
cp index.html $1.index.html
rm index.html

echo "\n\n##################>  FAZENDO VARREDURDA NO HOST: "$1

grep "href" $1.index.html | cut -d "/" -f 3 | grep "\." | cut -d '"' -f 1 | grep -v "<li" > parsinglist

echo "\n\n#################>  LISTA DE HOSTS\n\n "
cat parsinglist

echo "\n\n#################>  LISTA DE IP\n"
 for url in $(cat parsinglist);do host $url | grep -v "NX" | cut -d " " -f 4;done
