<?php
	include 'elementos/topo.php';
	include 'elementos/database.php';

?>

<div id="geral">
    <div id="conteudo" style="text-align:center;">
    	<br />
    		<h2>Usuários</h2>
        <br />

<? if($_SESSION["tp_user"] == 1){
		echo '<a href="add_usuario.php"><img src="imgs/icon/add_user.png" alt="" title="Adicionar Usuario"/></a>';
	}
?>  
       <form action="crt_users" method="post">        
		
        <table align="center" id="tabela_usuarios" cellpadding="0" cellspacing="0"  >
        	<tr id="tabela_usuario_topo"> 
        		<td>Nome</td>
            	<td>Email</td>
                <td>Telefone</td>
                <td>Celular</td>
                <td>Ação</td>
            </tr>

		<?	$sql= "SELECT * FROM usuario";
			$j = 0;
            $result = mysql_query($sql) or die(mysql_error());
                while ($row = mysql_fetch_array($result)) {
                    $id = $row['id_user'];$user = $row['user_name'];
					$emal = $row['user_email'];$tel = $row['tel_user'];$cel = $row['cel_user'];
					 if($j % 2 == 0){
						$class_css =  'linha_1';
					 }else{
						 $class_css = 'linha_2';
					 }
				echo '
				<tr class="'.$class_css.'">
					<td>'.$user.'</td>
					<td>'.$emal.'</td>
					<td>'.$tel.'</td>
					<td>'.$cel.'</td>
					<td>
						<a href="edt_usuario.php?alt_id='.$id.'">
							<img src="imgs/icon/application_edit.png" alt="" title="Alterar"/>
						</a>
					
						<a href="controller/crt_users.php?del_id='.$id.'">
							<img src="imgs/icon/application_delete.png" alt="" title="Deletar"/>
						</a>
					</td>
            	</tr>
				
				
				';
				$j++;
                }
?>
			
			<tr id="tabela_usuario_foot">
        		<td>Nome</td>
            	<td>Email</td>
                <td>Telefone</td>
                <td>Celular</td>
                <td>Ação</td>
            </tr>
		</table>
      	</form>
        
	</div><!--Fim CONTEUDO-->
 
</div>




<? include 'elementos/foot.php';?>