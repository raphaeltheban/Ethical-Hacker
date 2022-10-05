param($p1)

foreach ($ip in 1..254){
ping -n 1 $p1.$ip | Select-String "bytes-32"
}