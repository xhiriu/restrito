<? 	include 'verifica_sessao.php';
	include 'database.php';	

$sql= "SELECT * FROM usuario WHERE user_name = '".$_SESSION["login"]."'";
$admin = "";
$result = mysql_query($sql) or die(mysql_error());
while ($row = mysql_fetch_array($result)) {
    $tp_user = $row['tp_user'];
}
if($tp_user == 1){
	$admin = " | Administrador";
}

//====================================== MSG Senha diferentes
if(isset($_SESSION['msg'])and $_SESSION['msg'] == 'pw_diferente'){
	echo '<script type="text/javascript">
		alert("Senhas informadas devem serem iguais para alterar!");
	</script>';
$_SESSION['msg'] = '';
}	
//====================================== MSG alteracao
if(isset($_SESSION['msg'])and $_SESSION['msg'] == 'alt'){
	echo '<script type="text/javascript">
		alert("Dado alterado com sucesso!");
	</script>';
$_SESSION['msg'] = '';
}	
//====================================== MSG Exclusao
if(isset($_SESSION['msg'])and $_SESSION['msg'] == 'del'){
	echo '<script type="text/javascript">
		alert("Dado Excluido com sucesso!");
	</script>';
$_SESSION['msg'] = '';
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/backend.css" />
<link href="imgs/icon/restrito.png" rel="shortcut icon">
<title>Área Restrita</title>
</head>

<link rel="stylesheet" href="lightbox/css/lightbox.css" type="text/css" media="screen" />

<body>

<div id="topo">
	<div class="center_align" id="top_align">
		<img src="imgs/icon/restrito.png" alt="" id="logo_top" />
        <div id="menu">
        	<ul>
            	<a href="usuarios.php" class="link_menu" title="Usuarios"><li style="border-radius:8px 0 0 8px;">Usuarios</li></a>
              	<a href="noticias.php" class="link_menu" title="Noticias"><li>Noticias</li></a>
              	<a href="fotos.php" class="link_menu" title="Fotos"><li>Fotos</li></a>
           	  	<a href="videos.php" class="link_menu" title="Videos"><li>Videos</li></a>
              	<a href="dados_gerais.php" class="link_menu" title="Dados gerais do Site"><li style="border-radius:0 8px 8px 0;">Dados do Site</li></a>
            </ul>            
      </div>     
      
              <div id="box_dados_log">
                <table width="280" align="center">
                    <tr>
                    	<th colspan="3" scope="col" align="center"><img src="imgs/icon/online.png" alt=""/> Online: <?=$_SESSION["login"]?><?=$admin?></th>
                    </tr>
                    <tr>
                    	<td><a href="index.php"><div class="button_dados"><img src="imgs/icon/house.png"/> Home</div></a></td>
						<td><a href="meus_dados.php"><div class="button_dados"><img src="imgs/icon/user.png"/> Meus Dados</div></a></td>
						<td><a href="elementos/sair.php"><div class="button_dados"><img src="imgs/icon/sair.png"/> Sair</div></a></td>
                    </tr>
                </table>

            </div>
      
	</div>
</div>