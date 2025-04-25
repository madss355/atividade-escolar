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
    $aluno = $_POST['txtAluno'];

    $sqlAluno = "INSERT INTO tbaluno(nomeAluno) VALUES ('$aluno')";
    $resultadoAluno = mysqli_query($conn, $sqlAluno);

    if(mysqli_affected_rows($conn) != 0){
        echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>
            <script type=\"text/javascript\">
                alert(\"Aluno cadastrado com Sucesso. \");
            </script>
        ";
    }
    else
    {
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadAluno.php'>
        <script type=\"text/javascript\">
                alert(\"O Aluno não foi cadastrado com Sucesso \");
        </script>
        ";
    }
?>

</body>
</html>