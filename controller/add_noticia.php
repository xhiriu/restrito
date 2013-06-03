<?php 
session_start();
	include '../elementos/database.php';
	
$tipo = $_POST['adicionar'];
$titulo = $_POST['titulo'];
$sub_titulo = $_POST['sub_titulo'];
$texto = $_POST['texto'];
$link = $_POST['link'];



if($titulo == "" or $texto == ""){
	$_SESSION['msg'] = 'null';
	header('Location:../add_noticia.php') ;
	exit;	
}


if(trim(strtolower($tipo)) == 'adicionar'){
	
$sql = "INSERT INTO `restrito_db`.`noticias` 
		(`id_noticia`, `titulo_noticia`, `sub_titulo_noticia`, `texto_noticia`, `link_noticia`) 
VALUES (NULL, '".$titulo."', '".$sub_titulo."', '".$texto."', '".$link."');";	

$add_user = mysql_query($sql) or die(mysql_error());
		
	$_SESSION['msg'] = 'add';
	header('Location:../noticias.php') ;
	exit;

//$_SESSION['login'] = $login_alt;	
//$_SESSION['msg'] = 'alt';
//header('Location:../meus_dados.php') ;
}




?>