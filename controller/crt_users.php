<?php 
session_start();
	include '../elementos/database.php';
$tl;
echo '
<script type="text/javascript">	
var i = confirm("Deseja excluir o usuario: '.$_GET["nome_user"].' ?");
var tl = "";
if(i == true){
		window.location.assign("del_user.php?del_id='.$_GET["del_id"].'");
	}else{
		location:javascript:history.go(-1);
	}
</script>
';

//location:javascript:history.go(-1);
?>
<script>

</