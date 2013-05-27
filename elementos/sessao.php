<?php
session_start(); //iniciamos a sessão
include 'database.php';

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql= "SELECT * FROM usuario WHERE user_name = '".$login."'";

$result = mysql_query($sql) or die(mysql_error());
while ($row = mysql_fetch_array($result)) {
	$id_user = $row['id_user'];
    $user = $row['user_name'];
    $pw = $row['user_pw'];
}
if($user != $login or $pw != $senha){
	$_SESSION['erro_log'] = 'erro_logar';
	header('Location:../restrita.php') ;
exit;	
}
$_SESSION["login"] = $user;
$_SESSION["id_user"] = $id_user;

header('Location:../index.php') ;
?>