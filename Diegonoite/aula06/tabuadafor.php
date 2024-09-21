<?php 
	$tabuada = 8;
	$inicio =  0;
	$fim = 10; 
	$resultado = 0; 
	
	for($contador = $inicio; $contador <=$fim; $contador ++ ){
		$resultado = $tabuada * $contador;
		echo $tabuada. "X". $contador. "=".$resultado. "<br>";
	}
	
?>