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

