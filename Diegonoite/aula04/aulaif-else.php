<?php
/*
		Definir um código em php que decida se o usuaário poderá ou não votar na eleição de 2024.
		Condições
			- Menores de 16 anos não podem votar
			- Quem tem entre 16 e 18 anos ou maiores que 70 anos não é obrigado a votar
			- Todos os maiores de 18 anos que não se enquadram no voto opcional é obrigado a votar
	*/
	$idade = $_GET["idade"];
	if($idade<16){
		//condição verdadeira, idade menor que 16 anos
		echo "Não pode votar";
	}else{
		//caso a idade seja maior ou igual a 16
		if($idade >= 18 && $idade <70){
			//caso a idade esteja entre 18 e 70 anos. O voto obrigatório.
			echo "Voto obrigatório";
		}else{	
			echo "Voto Opcional";
		}
	}

	
	
?>