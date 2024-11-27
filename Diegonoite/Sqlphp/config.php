<?php
	//arquivo config.php
	$host = "localhost"; //endereço do servidor de Banco de Dados
	$usuario = "root"; //usuário do Banco de Dados
	$senha = ""; //senha do Banco de Dados
	$bd = "aulaphpquarta"; //Banco de dados para conectar. Equivale ao: use XXXXX;
	$con = mysqli_connect($host,$usuario,$senha,$bd);
	if (mysqli_connect_errno()== true) {
	  echo "Falha ao conectar-se ao MySQL: " . mysqli_connect_error();
	  exit();
	}	
?>