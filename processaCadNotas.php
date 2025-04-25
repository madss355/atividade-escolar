<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php
    require_once("conn.php");

    $ra = $_POST['selectAluno'];
    $idprof = $_POST['selectProf'];
    $iddisc = $_POST['selectDisc'];
    $nota = $_POST['txtNota'];
    $faltas = $_POST['txtFalta'];

    $sqlNotas = "INSERT INTO tbnotas(ra,idProfessor,idDisciplina,nota,faltas) VALUES ('$ra', '$idprof', '$iddisc', '$nota', '$faltas')";
    $resultadoNotas = mysqli_query($conn, $sqlNotas);

    if(mysqli_affected_rows($conn) != 0)
    {
        echo"<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>
        <script type=\"text/javascript\">
        alert(\"Nota cadastrada com Sucesso. \");
        </script>";
    }
    else
    {
        echo"<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadDisciplina.php'>
        <script type=\"text/javascript\">
        alert(\"A Nota não foi cadastrada. \");
        </script>";
    }
?>
</body>
</html>