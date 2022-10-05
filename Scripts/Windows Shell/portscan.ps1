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