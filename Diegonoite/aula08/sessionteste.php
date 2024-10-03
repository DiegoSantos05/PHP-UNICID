<?php
	session_start();
	//print_r($_SESSION);
	if(isset($_SESSION["teste"])){
		echo $_SESSION["teste"];
		echo "<br/>" . $_SESSION["valor"];
	}
	else{
		echo "Favor entrar no arquivo de gravar a sessão";
		
	}
	
	
?>