
echo "Informe a sequencia ex:{1..10} "
read seq
echo "informe a rede"
read rede

for host in $seq;
do
ping -c 1 $rede.$host | grep "64 bytes" | cut -d " " -f 4;
done
