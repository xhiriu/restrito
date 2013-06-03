<?php 
	include 'elementos/database.php';

// pegando parametro da Url para Alterar
if(isset($_GET['alt_id'])){

$id_alt = $_GET['alt_id'];

include'elementos/topo.php';

$sql= "SELECT * FROM usuario WHERE id_user = ".$id_alt;

$result = mysql_query($sql) or die(mysql_error());
while ($row = mysql_fetch_array($result)) {
	$tp_user = $row['tp_user'];
    $user = $row['user_name'];
    $pw   = $row['user_pw'];
	$emal = $row['user_email'];
	$tel = $row['tel_user'];
	$cel = $row['cel_user'];
}
?>


<div id="geral">
    <div id="conteudo" style="text-align:center;">
    	<br />
    		<h2>Editar usuário: <?=$user?></h2>
        <br />
        
        <form action="controller/edt_user.php?alt_id=<?=$id_alt?>" method="post">        
        <table style="margin:0 auto;font-weight:bold;">
          <tr>
            <td align="right">login: </td>
            <td align="left"><input type="text" id="login" name="login" value="<?=$user?>"/></td>
          </tr>
     <? if($_SESSION["tp_user"] == 1){ ?>     
          
          <tr>
            <td align="right">Tipo do usuario: </td>
            <td align="left">
            	<select name="tp_user">
                	
            		<? $txt_select = '';
						if($_SESSION["tp_user"] == 1){
							$name_tp = "";
							if($tp_user == 0){$name_tp = "Usuário";}else{$name_tp = "Admin";}
							
							echo '<option value="'.$tp_user.'">'.$name_tp.'</option>';
							echo '<option value="1">Admin</option>';
							echo '<option value="0">Usuário</option>';
						}else{
							echo '<option value="0">Usuário</option>';
						}
						?>
            	</select>
            </td>
          </tr>
          
          
          <tr>
            <td align="right">Senha: </td>
            <td align="left"><input type="password" id="senha" name="senha" value="<?=$pw?>"/></td>
          </tr>
          <tr>
            <td align="right">Email: </td>
            <td align="left"><input type="email" id="email" name="email" value="<?=$emal?>"/></td>
          </tr>
          <tr>
            <td align="right">Telefone: </td>
            <td align="left"><input type="text" id="telefone" name="telefone" value="<?=$tel?>"/></td>
          </tr>
          <tr>
            <td align="right">Celular: </td>
            <td align="left"><input type="text" id="celular" name="celular" value="<?=$cel?>"/></td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
            </tr>
          <tr>
            <td colspan="2" align="center">
                <input type="submit" id="btn_save" name="alterar" Value="Alterar"/>
                <input type="reset" id="btn_edit" Value="Limpar"/>
            </td>
          </tr>
        </table>
      </form>
        
	</div><!--Fim CONTEUDO-->
 
</div>
<? include'elementos/foot.php';
/*

	







$_SESSION['msg'] = 'alt';
header('Location:../usuarios.php') ;
}


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



*/

}}
?>