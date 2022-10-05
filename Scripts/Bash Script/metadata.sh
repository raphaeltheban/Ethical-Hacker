#!/bin/bash

echo "Informe o Alvo: "

read = alvo

echo $alvo

lynx --dump "https://google.com/search?q=site:$alvo+ext:pdf" | grep "\.pdf" | cut -d "=" -f2 | sed 's/...$//' > arquivometadata

for meta in $(cat arquivometadata); do wget -q $meta ;done 

exiftool *.pdf
