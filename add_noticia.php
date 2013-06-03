<? include'elementos/topo.php'?>   

<div id="geral">
    <div id="conteudo" style="text-align:center;">
    	<br />
    		<h2>Adicionar Notícia</h2>
        <br />         
        <form action="controller/add_noticia.php" method="post">        
        <table style="margin:0 auto;font-weight:bold;">
          <tr>
            <td align="right">Titulo: </td>
            <td align="left"><input type="text" id="titulo" name="titulo"/></td>
          </tr> 
     
          <tr>
            <td align="right">Sub Titulo: </td>
            <td align="left"><input type="text" id="sub_titulo" name="sub_titulo"/></td>
          </tr>
          
          <tr>
            <td align="right">Texto: </td>
            <td align="left"><input type="text" id="texto" name="texto"/></td>
          </tr>
          <tr>
            <td align="right">Link: </td>
            <td align="left"><input type="text" id="link" name="link"/></td>
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
	</div><!--Fim CONTEUDO-->
 
</div>
<? include'elementos/foot.php'?>

