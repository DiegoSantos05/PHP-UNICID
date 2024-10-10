<?php
	session_start ();
	$usuario= $_POST["usuario"];
	$senha = $_POST ["senha"];
	if($usuario === "Diego"
	&& $senha ==="Aula08"){
		$_SESSION ["login"] = "s";
		$_SESSION ["user"] = $usuario;
		$_SESSION ["erro"] = "";
		//echo "usuario correto!";
		
	}else{ 
		$_SESSION ["erro"] = "Usuário ou senha
		incorretos!";
		//echo "usuario incorreto";
	}
	header ("Location: home.php");
?>



