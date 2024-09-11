<?php
	$aula	= "";
	$aula	= "AULA 02";
	//barra de endreço: ....php?v1=5&=6
	$Num1 = $_GET["v1"];
	$Num2 = $_GET["v2"];
	$resultado = 0; 
	
?>
<html>
	<head>
		<title>Testando o php</title>
	</head>
	<body>
		<?php
			echo"<center><h1>Aula
			PHP - $aula </h1></center>";
		?>
		<hr/>
		<?php
			echo"<p> Site da Unicid - <a href='
			https://unicid.edu.br'
			target='_blank'>CLIQUE AQUI 
			</a>".$aula."</p>";
			
			echo 'Estamos na aula: '.$aula ;
			echo"<br>";
			
			/* Operadores Aritméticos
			+  -> Soma 1+1= 2
			- -> Subtração 1-1= 0
			* -> Multiplicação 2*2 = 4
			/ -> Divisão 3/2 = 1,5 
			** -> Exponenciação 3**= 9
			% -> resto da divisão 3%2 = 1 
			
			Concatenação -> 
				"Paulo" . 3 = "Paulo3"
			*/
			$resultado = $Num1+$Num2;
			
			echo"O Resultado de $Num1 + $Num2 é igual a: ".$resultado;
			
			echo"O Resultado de $Num1 - $Num2 é igual a: ".($Num1-$Num2);
			
			$resultado = $Num1*$Num1;
			echo"O Resultado de $Num1 * $Num2 é igual a: ".$resultado;
			
			$resultado = $Num1%$Num1;
			echo"O Resultado de $Num1 % $Num2 é igual a: ".$resultado;
			
			
		?>
	</body>
</html>