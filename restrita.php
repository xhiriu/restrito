<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/backend.css" />
<link href="imgs/icon/restrito.png" rel="shortcut icon">
<title>Área Restrita</title>
</head>
<link rel="stylesheet" href="lightbox/css/lightbox.css" type="text/css" media="screen" />

<?php
session_start();

if(isset($_SESSION['erro_log'])and $_SESSION['erro_log'] == 'erro_logar'){
	echo '<script type="text/javascript">
		alert("Login/Senha errado!");
	</script>';
}
if(isset($_SESSION['erro_log'])and $_SESSION['erro_log'] == 'erro_naologado'){
	echo '<script type="text/javascript">
		alert("Por favor faça o login!");
	</script>';
}
if(isset($_SESSION['erro_log'])and $_SESSION['erro_log'] == 'deslogou'){
	echo '<script type="text/javascript">
		alert("Deslogado com sucesso!");
	</script>';
}
$_SESSION['erro_log']="";
?>

<body>

<div id="geral">
    <div id="conteudo" style="width:;height:;">
    <center>
    		<div id="title_index">Área Restrita</div>
        <form action="elementos/sessao.php" method="post">
        	Login: <input type="text" id="login" name="login" /><br /><br />
            Senha: <input type="password" id="senha" name="senha" />
            <br /><br />
            <input type="submit" id="btn_logar" Value="Logar"/>
            <input type="reset" id="btn_limpar" Value="Limpar"/>
        </form>
    </center>
	</div><!--Fim CONTEUDO-->
 
</div>
	<? include'elementos/foot.php'?>

