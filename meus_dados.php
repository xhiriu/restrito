<? include'elementos/topo.php';

$sql= "SELECT * FROM usuario WHERE user_name = '".$_SESSION["login"]."'";

$result = mysql_query($sql) or die(mysql_error());
while ($row = mysql_fetch_array($result)) {
    $user = $row['user_name'];
    $pw   = $row['user_pw'];
	$emal = $row['user_email'];
}
?>


<div id="geral">
    <div id="conteudo" style="text-align:center;">
    	<br />
    		<h2>Meus Dados</h2>
        <br />
        
        <form action="controller/ctr_meus_dados.php" method="post">        
        <table style="margin:0 auto;">
          <tr>
            <td align="right">login: </td>
            <td align="left"><input type="text" id="login" name="login" value="<?=$user?>"/></td>
          </tr>
          <tr>
            <td align="right">Senha: </td>
            <td align="left"><input type="password" id="senha" name="senha" value="<?=$pw?>"/></td>
          </tr>
          <tr>
            <td align="right">Repita a Senha: </td>
            <td align="left"><input type="password" id="re-senha" name="re-senha"/></td>
          </tr> 
          <tr>
            <td align="right">Email: </td>
            <td align="left"><input type="email" id="email" name="email" value="<?=$emal?>"/></td>
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
<? include'elementos/foot.php'?>

