<!-- arquivo usuario_consulta.php -->
<?php
require("config.php");
//require -> requisita uma página e da erro
	//caso a página não carregue
	//require_once -> Mesmo que o require mas só executa
	//uma vez
	//include -> Requisita a página porém não dá erro
	//include_once
?>


<html>
	<head>
		<style>
			td{
				padding:5px;
			}
		</style>
	</head>
	<body>
	
	
	<?php
	$consulta = "select * from usuarios";
	$obj_consulta = mysqli_query($con,$consulta) or die(mysqli_error($con)); //vai no banco de dados e executa o comando, se tiver erro de sintaxe ele morre
	?>
			
<table border="1" cellspacing="0"  >
	<tr>
		<th>Id Usuário</th>
		<th>Nome</th>
		<th>Usuário</th>
		<th>Senha</th>
		<th>E-mail</th>
		<th>cpf</th>
		<th>Data de Nascimento</th>
		<th>Tipo usuario</th>
		<th>Ações</th>
	</tr>
				
<?php
while($reg_consulta = mysqli_fetch_array($obj_consulta)){ //coração da consulta
echo "<tr>";
echo "<td>". $reg_consulta["id_usuario"] . "</td>";
echo "<td>". $reg_consulta["nome_usuario"] . "</td>";
echo "<td>". $reg_consulta["usuario"] . "</td>";
echo "<td>". str_repeat("*",strlen($reg_consulta["senha"]) ) . "</td>";
echo "<td>". $reg_consulta["email"] . "</td>";
echo "<td>";
	$data = new DateTime($reg_consulta["dt_nascimento"]);
	echo $data->format('d/m/Y');
echo "</td>";
echo "<td>". $reg_consulta['cpf']."</td>";
echo "<td>".$reg_consulta['tipo_usuario']."</td>";




echo "<td>
						<a href='inserir_form.php' target='_self'>
							Incluir Usuário
						</a>
						<br/>
						<a href='alterar_form.php?id_usuario="
						. $reg_consulta["id_usuario"] . "' target='_self'>
							Alterar Usuário
						</a>
						<br>
						<a href='apagar_proc.php?id_usuario="
						. $reg_consulta["id_usuario"] . "' target='_self'>
							Excluir Usuário
						</a>
						</td>";

}									
				
						
	
						
					
				
				?>
			</table>
	</body>
</html>
