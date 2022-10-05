<html>

<title>Web Hacker</title>


<body>
<center>
<hr>
<h1>Web Hacker Page</h1>
<h3>This is the HOME page of a hacking BLOG </h3>
<hr>
<?php
$usuario = $_POST["usuario"];
?>

<form name="meuform" action="" method="POST">
USERNAME: <input type="text" name="usuario"><br>
<input type="hidden" name=token >
<input type="submit" name="botao" value="SHOW">
</center>
</form>

Welcome <?php print $usuario; ?>

</body>

</html>

