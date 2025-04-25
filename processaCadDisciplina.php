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
    $disciplina = $_POST['txtDisciplina'];
    $horaria = $_POST['txtHoraria'];

    $sqlDisciplina = "INSERT INTO tbdisciplina(nomeDisciplina) VALUES ('$disciplina', '$horaria')";
    $resultadoDisciplina = mysqli_query($conn, $sqlDisciplina);

    if(mysqli_affected_rows($conn) != 0){
        echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>
            <script type=\"text/javascript\">
                alert(\"Disciplina cadastrada com Sucesso. \");
            </script>
        ";
    }
    else
    {
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadDisciplina.php'>
        <script type=\"text/javascript\">
                alert(\"A Disciplina não foi cadastrada com Sucesso \");
        </script>
        ";
    }
?>

</body>
</html>