<html>
	<head>
		<title>Açai</title>
	</head>
	<body>
		<h1>Pedido de Açai</h1>
		<form action="acaiback " method="GET">
		<label>Nome:</label>
		<input type "text" name="nome">
		<hr>
		<label>Copo:</label>
		<br>
		Valor Base: R$10,00 
		<input type="radio" name="tm" value="p"/>
		<label>Pequeno</label><br>
		
		<input type="radio" name="tm" value="m"/> 
		<label>Médio(+50%)</label><br>
		
		<input type="radio" name="tm" value="g"/> 
		<label>Grande(+100%)</label>
		<hr>
		
		Condimentos:<br>
		<label>Leite ninho +R$3,00</label>
		<input type="checkbox" name="nin" value="s"><br>
		
		<label>Leite condensado +R$3,50</label>
		<input type="checkbox" name="cond" value="s"><br>
		
		<label>Confete +R$2,50</label>
		<input type="checkbox" name="conf" value="s"><br>
		
		<label>Paçoca +R$1,50</label> 
		<input type="checkbox" name="pac" value="s"><br><br>
		<input type="submit" value="Enviar"/>
		
		</form>
	
		
		
		
	
	</body>
</html>

