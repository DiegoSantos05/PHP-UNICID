<html> 
	<head>
		<style>
			.quadro{
				background-color: #ADD8E6; /*Cor Azul clara */
				border: 2px dashed #61867D;
				border-radius: 20px;
				width: 350px;
				height: 350px;
				margin: auto;
				margin-top: 40px;
				padding: 20px;		
			}
			.formatado{ 
				font-size: 15px;
				text-align: justify;
				font-family: calibri;
				font-weight: bold;
				color: #493900;
			}
			#diferente{ /*ID*/
				background-color:#BCF3B4;
			}
		
		</style>
		
	</head>
	<body> 
		<div	class="quadro formatado"> 
		<?php 
		if (!isset($_GET['op']) || !isset ($_GET['valor']) ){
		?>
			<form action = "while.php" method="GET">
				<h1>Configurações</h1>
				<h2>Operação:</h2>
				<input type="radio" name="op" value="tab" id="tab">
				<label for="tab">Tabuada</label><br/>
				<input type="radio" name="op" value="fat" id="fat">
				<label for="fat">Fatorial</label><br/>
				<label for="val">Valor:</label> 
				<input type="number" min="1" max="100" name="valor" id="val"/>
				<input type="submit" value="enviar"/>
			</form>
			<?php
			
		}else{
			$tabuada = 0;
			$inicio = 0;
			$fim = 10;
			$resultado = 0;
			$op = $_GET['op'];
			while ($contador = $inicio ($contador,=$fim);
			if($op=="tab"){
				echo "tabuada";
			}
			if ($op=="fat"){
				echo "fatorial";
			}
		}
		
		
			?>
		</div>
		
	</body>
</html>