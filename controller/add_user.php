<?php 
session_start();
	include '../elementos/database.php';
	
$tipo = $_POST['adicionar'];
$login_alt = $_POST['login'];
$senha_alt = $_POST['senha'];
$senha_re_alt = $_POST['re_senha'];
$email_alt = $_POST['email'];
$tel_alt = $_POST['telefone'];
$cel_alt = $_POST['celular'];
$tp_alt = $_POST['tp_user_add'];



if($login_alt == "" or $senha_alt == "" or $senha_re_alt == ""){
	$_SESSION['msg'] = 'null';
	header('Location:../add_usuario.php') ;
	exit;	
}
if($senha_alt != $senha_re_alt){
	$_SESSION['msg'] = 'pw_diferente';
	header('Location:../add_usuario.php') ;
	exit;
}

if(trim(strtolower($tipo)) == 'adicionar'){
	
$sql = "INSERT INTO `restrito_db`.`usuario` 
		(`id_user`, `tp_user`, `user_name`, `user_pw`, `user_email`, `cel_user`, `tel_user`) 
VALUES (NULL, '".$tp_alt."', '".$login_alt."', '".$senha_alt."', '".$email_alt."', '".$cel_alt."', '".$tel_alt."');";	

$add_user = mysql_query($sql) or die(mysql_error());
		
	$_SESSION['msg'] = 'add';
	header('Location:../usuarios.php') ;
	exit;

//$_SESSION['login'] = $login_alt;	
//$_SESSION['msg'] = 'alt';
//header('Location:../meus_dados.php') ;
}




?>