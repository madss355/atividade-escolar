<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro das Notas</title>
</head>
<body>

	<form method="POST" action="processaCadNotas.php">
        RA do Aluno: <input type="text" name="txtRA" id="txtRA"><br><br>
        Professor:  <input type="text" name="txtProf" id="txtProf"><br><br>
        Disciplina:  <input type="text" name="txtDisc" id="txtDisc"><br><br>
        Nota:  <input type="text" name="txtNota" id="txtNota"><br><br>
        Faltas:  <input type="text" name="txtFalta" id="txtFalta"><br><br>
        <input type="submit" value="Cadastar">
    </form>

</body>
</html>