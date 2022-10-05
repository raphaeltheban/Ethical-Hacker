<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DECSTORE</title>

<script type="text/javascript" src="js/jquery.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>

<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/stylenuvem.css" />
<link rel="stylesheet" type="text/css" href="css/cad.css" />
<link rel="stylesheet" type="text/css" href="css/contato.css" />


<style type="text/css">
#camadaefeitos {
	color:000;
	padding-left:0px;
	display:none;
	z-index: 2000;
	width:930px;
	height:750px;
	left:50%;
	margin-left:-465px;
	position: absolute;


}

@font-face {
    font-family: 'Swiss721Light';
    src: url('fonts/swz721l-Swiss.eot');
    src: url('fonts/swz721l-Swiss.eot?#iefix') format('embedded-opentype'),
         url('fonts/swz721l-Swiss.woff') format('woff'),
         url('fonts/swz721l-Swiss.ttf') format('truetype'),
         url('fonts/swz721l-Swiss.svgz#Swiss721Light') format('svg'),
         url('fonts/swz721l-Swiss.svg#Swiss721Light') format('svg');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'VAGRoundedBTRegular';
    src: url('fonts/vagron-vagron.eot');
    src: url('fonts/vagron-vagron.eot?#iefix') format('embedded-opentype'),
         url('fonts/vagron-vagron.woff') format('woff'),
         url('fonts/vagron-vagron.ttf') format('truetype'),
         url('fonts/vagron-vagron.svgz#VAGRoundedBTRegular') format('svg'),
         url('fonts/vagron-vagron.svg#VAGRoundedBTRegular') format('svg');
    font-weight: normal;
    font-style: normal;

}

.textos{
	font-family:Swiss721Light;
	font-size:18px;
	color:#979797;
	letter-spacing:-0.9px;
	margin-left:5px;
	margin-top:20px;
}
.textoazul{
	font-family:Swiss721Light;
	font-size:29px;
	color:#0064ab;
	line-height:42px;
	letter-spacing:-0.9px;
	margin-left:5px;
	margin-top:55px;
}
.textoazul_g{
	font-family:Swiss721Light;
	font-size:44px;
	color:#0064ab;
	line-height:42px;
	letter-spacing:-0.9px;
	word-spacing:-2px;
	margin-left:5px;
	margin-top:55px;
}

.textocad_g{
	font-family:VAGRoundedBTRegular;
	font-size:18px;
	color:#ffffff;
	width:310px;
	height:50px;
	margin-left:20px;
	padding-top:20px;
}
.textocad_p{
	font-family:VAGRoundedBTRegular;
	font-size:12px;
	color:#ffffff;
	width:310px;
	height:50px;
	padding-top:5px;
}

</style>

<script type="text/javascript" >
function foco(elemento){
	if(elemento.value == elemento.title){
		elemento.value = "";
	}
	return false;
}

function perdeFoco(el){
	if(el.value == ""){
		el.value = el.title;
	}
}


$(document).ready(function(){
   $("#ocultar").mouseout(function(event){
    event.preventDefault();
    $("#camadaefeitos").slideUp("slow");
   });

   $("#mostrar").mouseover(function(event){
    event.preventDefault();
    $("#camadaefeitos").slideDown("slow");
   });
});
</script>


</head>

<body>
﻿<?php
#include('connecta.php');
setcookie("download", "ZmFsc2UK", time() + (86400 * 30), "/");
?>
<div class="geral">
	<div class="line"></div>
    	<div class="fmenu">
        	<div class="menu">
            	<div class="bts"><?php include("menu.php");?></div>
            </div>
        </div>

    <div class="line"></div>
    
           

    
    <div class="box">   
        <div class="left">
        	<div class="logo"><a href="index.php"><img src="imagens/logo.jpg" alt="Logomarca DECSTORE" border="0" /></a></div>
            <div class="textoazul">Confira sua nota fiscal<br/></div>
            <div class="cadastro">
            	<div style="margin-top:25px;" class="textocad_g">
                	Cadastre-se<br />
                    <div class="textocad_p">Receba sua nota fiscal, cadastre seu e-mail.</div>
                </div>
                <div class="formcad">
                    <form action="cad.php" onsubmit="return validar()" enctype="multipart/form-data" method="post" name="cad" id="cad">
            			<div class="inputs">
                			<input border="0" type="text" name="email" id="email" title="E-MAIL" value="E-MAIL" onfocus="foco(this)" onblur="perdeFoco(this)" class="input"/>
                        </div>
                        <div class="bt-enviar" style="padding-top:9px;">
                			<input type="submit" value="" class="enviar" />
                	 </div>
                   </form>
<script language="JavaScript1.2">
  var valido;
  function validar(){
    var str = document.cad.email.value;
    var filter = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    if(filter.test(str))
      valido = true;
    else{
      alert("Por favor veja se seu e-mail está correto, obrigado.");
      document.cad.email.focus();
      valido = false;
    }
    return valido;
  }
</script>
                </div>
            </div>
            <div class="textos">
                    <p>Olá, <span style="font-size:20px">agradecemos</span> sua presença e aproveitamos<br />
                    para dizer que em pouco tempo você e <span style="font-size:20px">sua empresa</span>
                    poderão desfrutar de toda nossa estrutura.<br /><br />
                    
                    Produtos de alta qualidade e rentabilidade com preços<br />
                    e prazos jamais vistos em <span style="font-size:20px">vendas por atacado</span>.</p>
                    
                    <p><span style="letter-spacing:1px; font-size:20px; color:#0064ab;">Começe desde já, cadastre seu e-mail.</span></p>
            </div>
        </div>
        
        <div class="center"></div>
        
        <div id="cont" class="right">
        <?php
 			foreach ($_REQUEST as $___opt => $___val) {$$___opt = $___val;}
 			if(empty($pag)) {
 			include("promocional.php");} 
 			elseif(substr($pag, 0, 4)=='http' or substr($pag,0, 1)=="/" or substr($pag, 0, 1)==".")
 			{echo '<br><font face=arial size=11px><br><b>A página não existe.</b><br>Por favor selecione uma página a partir do Menu 				Principal.</font>';}
 			else { include("$pag.php");}
 			?>
        </div>
</div>

<div class="nv">
<div align="center" class="nuvem"><br /><br /><div class="line"><br /><div class="direitos">DECSTORE - Todos os direitos reservados</div></div></div>
</div>

</div>

</body>
</html>
