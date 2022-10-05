#!/bin/bash

search = "firefox"

alvo = 'grupovoz.com.br'

echo "Varrendo o " 
echo  $alvo

echo "Procurando por senhas"
firefox "https://google.com/search?q=site:$alvo+inurl:senha" 2> /dev/null

echo "Procurando por arquivos"

$search "https://google.com/search?q=site:$alvo+ext:txt+OR+ext:docx"  2> /dev/null

echo "Procurando por arquivos não paginados"

$search "https://google.com/search?q=site:$alvo+'index of'" 2> /dev/null
