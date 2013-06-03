<?php
	include 'elementos/topo.php';
	include 'elementos/database.php';

?>

<div id="geral">
    <div id="conteudo" style="text-align:center;">
    		<div id="banner_pags">Notícias</div>

			<a href="add_noticia.php"><img src="imgs/icon/add_noticias.png" alt="" title="Adicionar Notícia"/></a>

       <form action="crt_users" method="post">        
		
        <table align="center" id="tabela_usuarios" cellpadding="0" cellspacing="0"  >
        	<tr id="tabela_usuario_topo"> 
        		<td align="center">Titulo</td>
            	<td align="center">Sub Titulo</td>
                <td align="center">Texto</td>
                <td align="center">Link</td>
                <td align="center">Açao</td>
            </tr>

		<?	$sql= "SELECT * FROM noticias";
			$j = 0;
            $result = mysql_query($sql) or die(mysql_error());
                while ($row = mysql_fetch_array($result)) {
					$id = $row['id_noticia'];
                    $titulo = $row['titulo_noticia'];$sub_titulo = $row['sub_titulo_noticia'];
					$texto = $row['texto_noticia'];$link = $row['link_noticia'];
					 if($j % 2 == 0){
						$class_css =  'linha_1';
					 }else{
						 $class_css = 'linha_2';
					 }
				echo '
				<tr class="'.$class_css.'">
					<td align="center">'.$titulo.'</td>
					<td align="center">'.$sub_titulo.'</td>
					<td align="center">'.$texto.'</td>
					<td align="center">'.$link.'</td>
					<td align="center">
						<a href="edt_noticia.php?alt_id='.$id.'">
							<img src="imgs/icon/application_edit.png" alt="" title="Alterar"/>
						</a>
					
						<a href="controller/crt_noticia.php?del_id='.$id.'&noticia='.$titulo.'">
							<img src="imgs/icon/application_delete.png" alt="" title="Deletar"/>
						</a>
					</td>
            		</tr>
				';
				$j++;
                }
?>
			
			<tr id="tabela_usuario_foot">
        		<td align="center">Titulo</td>
            	<td align="center">Sub Titulo</td>
                <td align="center">Texto</td>
                <td align="center">Link</td>
                <td align="center">Açao</td>
            </tr>
		</table>
      	</form>
        <br />
	</div><!--Fim CONTEUDO-->
 
</div>


<? include 'elementos/foot.php';?>