<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php

            require_once('conn.php');
        	
        	$sql=mysqli_query($conn,"SELECT * FROM tbdisciplinas");
        	
        
        	while($linha=mysqli_fetch_array($sql))
        	{
        		$id=$linha['idDisciplina'];
        		$nome=$linha['nomeDisciplina'];
        		$ch=$linha['cargaHoraria'];
        	
        		echo"<p>";
        	
        		echo "<table><tr><td> RA do Aluno: </td><td>$id</td><tr>";
        		echo "<tr><td> Nome do Aluno: </td><td>$nome</td><tr> <br>";
        		echo "<tr><td> Carga Horaria: </td><td>$ch</td><tr> <br>";
			}
            
			
?>
</body>
</html>