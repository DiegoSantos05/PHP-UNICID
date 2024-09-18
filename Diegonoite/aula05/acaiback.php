<html>
	<head>
	
	</head>
	<body>
		<?php
error_reporting(0);
			$nome = "";
			$tm = "";
			$preco = 0;
			$nin = "";//leite ninho
			$cond = ""; //leite condensado
			$conf = ""; //confete
			$pac = ""; //paçoca
			
			$nome = $_GET ['nome'];
			$tm = $_GET ['tm'];
			$nin = $_GET ['nin'];
			$cond = $_GET ['cond'];
			$conf = $_GET ['conf'];
			$pac = $_GET ['pac'];
			$nome = strtoupper($nome);
			
			echo"O açai de $nome é do tamanho: ";
			switch($tm){
				case"p":
					echo "Pequeno";
					$preco = 10;
				break;
				case"m":
					echo"Medio";
					$preco = 15;
				break;
				case "g":
					echo "Grande";
					$preco = 20;
				break;
			}
			echo "<br> Contém:<br>";
			if ($nin =="s"){
				echo"-Leite Ninho <br>";
				$preco = $preco + 3;
			}
			if($cond =="s"){
				echo "-Leite Condensado <br>";
				$preco = $preco +3.5;
			}
			if($conf == "s"){
				echo"-Confete <br>";
				$preco = $preco + 2.5;
			}
			if($pac == "s"){
				echo"-Pacoca <br>";
				$preco=$preco +1.5;
			}
			echo"<br> E custou R$ $preco";
		?>
	
	</body>
</html>
