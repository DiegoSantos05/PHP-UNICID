<html>	
	<head> 
		<title></title>
	<?php
		$cor = $_POST["cor"];
	?> 
	<style>
		body{
			background-color: <?php echo $cor; ?> ;
		}
	</style>
	</head>
	<body>
		<h1> Apresentação dinamica!</h1>
		<hr/>
		<?php
			$slide = $_POST["n"];
			$idade = $_POST["idade"];
			echo "<p> Meu Nome é $slide!<br/>
			<hr style='border: 1px dashed red;'/>
			Tenho $idade anos!</p>";
		?>
	</body>
</html>