<? include'elementos/topo.php'?>   

<div id="geral">
    <div id="conteudo" style="text-align:center;">
    	<br />
    		<h2>Adicionar Usuário</h2>
        <br />
<? if($_SESSION["tp_user"] == 1){ ?>         
        <form action="controller/add_user.php" method="post">        
        <table style="margin:0 auto;font-weight:bold;">
          <tr>
            <td align="right">login: </td>
            <td align="left"><input type="text" id="login" name="login"/></td>
          </tr> 
     
          <tr>
            <td align="right">Tipo do usuario: </td>
            <td align="left">
            	<select>
						<option name="tp_user_add" value="1">Admin</option>
						<option name="tp_user_add" value="0">Usuário</option>
						
            	</select>
            </td>
          </tr>
          
          <tr>
            <td align="right">Senha: </td>
            <td align="left"><input type="password" id="senha" name="senha"/></td>
          </tr>
          <tr>
            <td align="right">Repita a Senha: </td>
            <td align="left"><input type="password" id="re-senha" name="re-senha"/></td>
          </tr> 
          <tr>
            <td align="right">Email: </td>
            <td align="left"><input type="email" id="email" name="email" /></td>
          </tr>
          <tr>
            <td align="right">Telefone: </td>
            <td align="left"><input type="text" id="telefone" name="telefone" /></td>
          </tr>
          <tr>
            <td align="right">Celular: </td>
            <td align="left"><input type="text" id="celular" name="celular" /></td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
            </tr>
          <tr>
            <td colspan="2" align="center">
                <input type="submit" id="btn_add" name="adicionar" Value="   Adicionar"/>
                <input type="reset" id="btn_edit" Value="Limpar"/>
            </td>
          </tr>
        </table>
      </form>
<? } else {
	echo '<h1> Voçe não tem permissão para adicionar usuário!</h1>';	
}?>        
	</div><!--Fim CONTEUDO-->
 
</div>
<? include'elementos/foot.php'?>

