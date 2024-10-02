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
				background-color:#FF0000;
			}

		</style>
		
	</head>
	<body> 
		<div	class="quadro formatado"> 
			<?php
				$c=0;
				while($c <=10){
					if($c%2==0){
						echo "<div id='diferente'>$c</div>";
					}else{
						echo"<div>$c</div>";
					}
					
					$c++;
				}
				
			?>
		</div>
		
	</body>
</html>