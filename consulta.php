<?php
// Conectando ao banco de dados: 
include_once("conexao.php");


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
      <a href="/cadastrar-usuario/urna">Urna Eletronica</a><br>
		<h1>Listar Candidatos na Tabela</h1>
		<?php

// Criando tabela e cabeçalho de dados:
 echo "<table border=1>";
 echo "<tr>";
 echo "<th>NOME</th>";
 echo "<th>NUMERO</th>";
 echo "<th>PARTIDO</th>";
 echo "<th>FOTO</th>";
 echo "</tr>";
  
 $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
 $sql = "SELECT * FROM usuarios";
 $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
 // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {
    $nome = $registro['nome'];
    $numero = $registro['numero'];
    $partido = $registro['partido'];
    $foto = $registro['foto'];
    echo "<tr>";
    echo "<td>".$nome."</td>";
    echo "<td>".$numero."</td>";
    echo "<td>".$partido."</td>";
    echo "<td>".$foto."</td>";
    echo "</tr>";
 }
 mysqli_close($conn);
 echo "</table>";
 ?>