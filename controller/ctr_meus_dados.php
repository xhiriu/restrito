<?php 
session_start();
	include '../elementos/database.php';
$tipo = $_POST['alterar'];
$login_alt = $_POST['login'];
$senha_alt = $_POST['senha'];
$senha_re_alt = $_POST['re-senha'];
$email_alt = $_POST['email'];
$tel_alt = $_POST['telefone'];
$cel_alt = $_POST['celular'];
$tp_alt = $_POST['tp_user'];

if($senha_alt != $senha_re_alt){
	$_SESSION['msg'] = 'pw_diferente';
	header('Location:../meus_dados.php') ;
//	header("location:javascript://history.go(-1)");
	exit;
}

if(strtolower($tipo) == 'alterar'){
	$sql = "UPDATE `restrito_db`.`usuario` SET 
			`user_name` = '".$login_alt."',
			`tp_user` = '".$tp_alt."',
			`user_pw` = '".$senha_alt."',
			`user_email` = '".$email_alt."',
			 `tel_user` = '".$tel_alt."',
			 `cel_user` = '".$cel_alt."'
			WHERE `usuario`.`id_user` = ".$_SESSION["id_user"].";";
			
	$result = mysql_query($sql) or die(mysql_error());


$_SESSION['login'] = $login_alt;	
$_SESSION['msg'] = 'alt';
header('Location:../meus_dados.php') ;
}




?>