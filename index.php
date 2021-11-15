<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Listar Politicagem</title>		
	</head>
	<body>
		<a href="index.php">Cadastrar Candidato</a><br>
		<a href="listar.php">Listar candidatos na pagina</a><br>
		<a href="consulta.php">Listar candidatos na Tabela</a><br>
		<a href="https://growingwidesystems.lindomardsantos.repl.co/cadastrar-usuario/urna">Urna Eletronica</a><br>
		<h1>Cadastrar Candidatos</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processa.php">
			<label>Número do candidato: </label>
			<input type="text" name="numero" placeholder="Digite o número do candidato"><br><br>
			<label>Nome Politico: </label>
			<input type="text" name="nome" placeholder="Digite o nome Politico"><br><br>
			<label>Partido: </label>
			<input type="text" name="partido" placeholder="Digite o Partido"><br><br>
			<label>Foto: </label>
			<input type="text" name="foto" placeholder="Foto do candidato"><br><br>
			<input type="submit" value="Cadastrar candidato">
		</form>
	</body>
</html>