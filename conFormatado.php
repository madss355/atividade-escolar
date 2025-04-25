<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dados de Professores, Alunos e Disciplinas</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #ADD8E6; /* Azul claro */
			color: #333; /* Preto para o texto */
			text-align: center;
			margin: 0;
			padding: 0;
		}

		h1 {
			color: #333; /* Preto para os títulos */
			font-size: 28px;
			margin-top: 30px;
		}

		table {
			margin: 20px auto;
			border-collapse: collapse;
			width: 80%;
			background-color: white;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
		}

		th, td {
			padding: 12px;
			border: 1px solid #333; /* Preto para bordas */
			text-align: left;
		}

		th {
			background-color: #ADD8E6; /* Azul claro */
			color: black;
			font-size: 18px;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2; /* Fundo alternado nas linhas */
		}

		tr:hover {
			background-color: #d6e9f8; /* Azul mais claro no hover */
		}

		.container {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			padding-top: 30px;
		}
	</style>
</head>
<body>

<div class="container">
	<h1>Lista de Professores</h1>
	<?php
		require_once('conn.php');
		$sql = mysqli_query($conn, "SELECT * FROM tbprofessor");
		while ($linha = mysqli_fetch_array($sql)) {
			$id = $linha['idProfessor'];
			$nome = $linha['nomeProfessor'];
			echo "<table>";
			echo "<tr><th>ID do Professor</th><td>$id</td></tr>";
			echo "<tr><th>Nome do Professor</th><td>$nome</td></tr>";
			echo "</table><br>";
		}
	?>

	<h1>Lista de Alunos</h1>
	<?php
		$sql = mysqli_query($conn, "SELECT * FROM tbaluno");
		while ($linha = mysqli_fetch_array($sql)) {
			$id = $linha['ra'];
			$nome = $linha['nomeAluno'];
			echo "<table>";
			echo "<tr><th>RA do Aluno</th><td>$id</td></tr>";
			echo "<tr><th>Nome do Aluno</th><td>$nome</td></tr>";
			echo "</table><br>";
		}
	?>

	<h1>Lista de Disciplinas</h1>
	<?php
		$sql = mysqli_query($conn, "SELECT * FROM tbdisciplinas");
		while ($linha = mysqli_fetch_array($sql)) {
			$id = $linha['idDisciplina'];
			$nome = $linha['nomeDisciplina'];
			$ch = $linha['cargaHoraria'];
			echo "<table>";
			echo "<tr><th>ID da Disciplina</th><td>$id</td></tr>";
			echo "<tr><th>Nome da Disciplina</th><td>$nome</td></tr>";
			echo "<tr><th>Carga Horária</th><td>$ch</td></tr>";
			echo "</table><br>";
		}
	?>
</div>

</body>
</html>
