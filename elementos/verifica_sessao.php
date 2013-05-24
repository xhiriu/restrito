<?php
session_start();

if($_SESSION["login"] == ""){
	$_SESSION['erro_log'] = 'erro_naologado';
	header('Location:restrita.php') ;
exit;
}
?>