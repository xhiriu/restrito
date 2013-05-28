<?php 
session_start();
	include '../elementos/database.php';
	
$tipo = $_POST['adicionar'];
$login_alt = $_POST['login'];
$senha_alt = $_POST['senha'];
$senha_re_alt = $_POST['re-senha'];
$email_alt = $_POST['email'];
$tel_alt = $_POST['telefone'];
$cel_alt = $_POST['celular'];
die($_POST['tp_user_add']);
$tp_alt = $_POST['tp_user_add'];


if($senha_alt != $senha_re_alt){
	$_SESSION['msg'] = 'pw_diferente';
	header('Location:../meus_dados.php') ;
	exit;
}

if(trim(strtolower($tipo)) == 'adicionar'){
	die('foi de bobs');

$_SESSION['login'] = $login_alt;	
$_SESSION['msg'] = 'alt';
header('Location:../meus_dados.php') ;
}
die('foi nao');




?>