<?
session_start();
//sesion_unset();
session_destroy();

header('Location:../restrita.php') ;
exit;
?>