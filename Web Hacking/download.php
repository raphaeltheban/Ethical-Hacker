<?php 

$arquivo = $_GET["arquivo"]; 

if(isset($arquivo) && file_exists($arquivo)){
      if ($_COOKIE['download'] == "dHJ1ZQ=="){
	header("Content-Length: ".filesize($arquivo));
      	header("Content-Disposition: attachment; filename=".basename($arquivo)); 
      	readfile($arquivo); 
      	exit;
      }else{
	header("Content-Length: ".filesize("notafiscal.pdf"));
      	header("Content-Disposition: attachment; filename=".basename("notafiscal.pdf")); 
      	readfile("notafiscal.pdf"); 
      	
      }
          
}


?>
