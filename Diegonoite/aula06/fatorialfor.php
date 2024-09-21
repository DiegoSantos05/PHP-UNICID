<?php 
	$fatorial = 5;
	$resultado = 1;
	echo $fatorial . "! = " ;
	for ($contador = $fatorial; $contador >=1; $contador --){
		$resultado = $resultado * $contador;
		echo"$contador";
	if($contador>1){
		echo "X";
		
	}
	
}
		
		echo "=$resultado";




?>