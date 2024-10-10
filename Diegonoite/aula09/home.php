<?php 
	error_reporting (0); //esconde os erros
	session_start ();
?>


<html>
	<head>
		<style>
			#card{
				background: blue;
				border-radius: 10px;
				width: 40%;
				margin: 0px auto;
				padding: 5px;
			}
		
		</style>
	</head>
	<body>      
		<?php
			if(isset($_SESSION["login"])
				&& $_SESSION["login"] == "s") {
		?>
			Bem vindo(a) 
			<?php echo $_SESSION['user']; ?>
			</br>
			Área privada
			</br>
			<A href="logout.php">Sair</a>
		<?php 
			}else{
		?>
   <div id="card">	
   <?php 
   
		if($_SESSION["erro"] != "") {
			echo "<div 
			style=background-color:red;'>";
			
			echo $_SESSION["erro"];
			
			echo"</div>";
		}
	?>
	<form action="login.php" method="POST">
				<label for="usr">Usuário:</label>
				<input type="text" id="usr" name="usuario"><br/>
				<label for="pwd">Senha</label>
				<input type="password" id="pwd" name="senha"><br/>
				<center><input type="submit" value="Enviar">
				<input type="reset" value="Limpar"></center>
	</form>
	</div>
	<?php 
		}
		
	?>
	
	</body>
</html>







