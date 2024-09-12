<html>
	<head>
		<title> </title>
	</head>
	<body>
		<h1>Mês</h1>
		<form action="exemplocase.php" method="POST">
			<label>Digite um mês</label>
			<select name="mes">
			<option value=" ">Escolha um mês</option>
			<option value="1"> Mês 01</option>
			<option value="2"> Mês 02</option>
			<option value="3"> Mês 03</option>
			<option value="4"> Mês 04</option>
			<option value="5" selected> Mês 05</option>
			<option value="6"> Mês 06</option>
			<option value="7"> Mês 07</option>
			<option value="8"> Mês 08</option>
			<option value="9"> Mês 09</option>
			<option value="10"> Mês 10</option>
			<option value="11"> Mês 11</option>
			<option value="12"> Mês 12</option>
			</select>
			
			<input type="submit" value="Enviar"/>
		</form>
		
		<?php 
			if (isset($_POST["mes"])){
				$mes = $_POST["mes"];
				switch ($mes){
					case 1:
						echo "Janeiro";
					break;
					case 2:
						echo "Fevereiro";
					break;
					case 3: 
						echo"Março";
					break;
					case 4:
						echo "Abril";
					break;
					case 5: 
						echo "Maio";
					break;
					case 6: 
						echo "Junho";
					break; 
					case 7:
					case 8:
					case 9:
						echo "Terceiro Trimestre";
					break;
					case 10:
					case 11:
					case 12:
						echo "Quarto Trimestre";
					break;
						
					
				}
			}
		?> 
	</body>
</html>
