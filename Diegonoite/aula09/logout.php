<?php 
	
	/*session_start ();
	session_destroy ();
	
	header("Location:home.php"); */
	
	/*forma 02 - Mata variavel individualmente */
	session_start ();
	unset($_SESSION['login']);
	unset($_SESSION['user']);
	$_SESSION['erro'] = "Deslogado com sucesso!";
	header("Location: home.php");

?>