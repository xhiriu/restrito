<?php 
session_start();
	include '../elementos/database.php';
	
// pegando parametro da Url para DELETAR
if(isset($_GET['del_id'])){
$sql = "DELETE FROM `restrito_db`.`usuario` WHERE `usuario`.`id_user` = ".$_GET['del_id'];
			
$result = mysql_query($sql) or die(mysql_error());

$_SESSION['msg'] = 'del';
header('Location:../usuarios.php') ;
}

?>