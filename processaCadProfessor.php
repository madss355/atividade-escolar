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
    $professor = $_POST['txtProfessor'];

    $sqlProfessor = "INSERT INTO tbprofessor(nomeProfessor) VALUES ('$professor')";
    $resultadoProfessor = mysqli_query($conn, $sqlProfessor);

    if(mysqli_affected_rows($conn) != 0){
        echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>
            <script type=\"text/javascript\">
                alert(\"Professor cadastrado com Sucesso. \");
            </script>
        ";
    }
    else
    {
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadProfessor.php'>
        <script type=\"text/javascript\">
                alert(\"O Professor não foi cadastrado com Sucesso \");
        </script>
        ";
    }
?>

</body>
</html>