<?php

$liga = mysqli_connect("localhost","desec","desec","desec");

$login = $_GET['login'];
$senha = $_GET['senha'];

$sql = "SELECT * FROM users WHERE login='$login' AND pass='$senha'";

$query = mysqli_query($liga, $sql);

if (mysqli_num_rows($query) == 1){
    header("Location: admin.php");
}
else
{
	echo "<body style='background-color:#1a1a1a'>";
	echo"<span style='color:red;'><center><br><br><hr><br><h3>LOGIN OU SENHA INCORRETOS!! :(  </h3></br><hr></center></span>";
}
?>
