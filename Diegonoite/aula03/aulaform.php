<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="aula3noite.php" method="POST">
			<h1>Formulário de identificação e apresentação</h1>
			<label for="n">Nome: </label>
			<input type="text" name="n" maxlegth="150" placeholder="Digite o seu nome"/>
			<br/>
			<label for="idade">Idade: </label>
			<input type="number" name="idade" min="0" max="120"/>
			<label>Cor></label>
			<input type="color" name="cor">
			<input type="submit" value="Enviar!"/>
		</form>
	</body>
