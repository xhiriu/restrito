<?php 
session_start();
	include '../elementos/database.php';
$tipo = $_POST['alterar'];
$login_alt = $_POST['login'];
$senha_alt = $_POST['senha'];
$email_alt = $_POST['email'];
$tel_alt = $_POST['telefone'];
$cel_alt = $_POST['celular'];
$tp_alt = $_POST['tp_user'];

$alt_id = $_GET['alt_id'];



if(strtolower($tipo) == 'alterar'){
	$sql = "UPDATE `restrito_db`.`usuario` SET 
			`user_name` = '".$login_alt."',
			`tp_user` = '".$tp_alt."',
			`user_pw` = '".$senha_alt."',
			`user_email` = '".$email_alt."',
			 `tel_user` = '".$tel_alt."',
			 `cel_user` = '".$cel_alt."'
			WHERE `usuario`.`id_user` = ".$alt_id.";";
			
	$result = mysql_query($sql) or die(mysql_error());

$_SESSION['msg'] = 'alt';
header('Location:../usuarios.php');
}




?>