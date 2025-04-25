<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Georgia', serif;
            background: url('https://www.transparenttextures.com/patterns/wood-pattern.png');
            background-color: #a67c52; /* cor de madeira clara */
            color: #2c1b10;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.85);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            text-align: center;
            border: 1px solid #8b5e3c;
        }

        h1 {
            font-size: 28px;
            margin-bottom: 30px;
            color: #4b2e1b;
        }

        .link-container {
            display: flex;
            flex-direction: column;
            gap: 12px;
            align-items: center;
        }

        a {
            text-decoration: none;
            font-size: 16px;
            padding: 10px 20px;
            color: #3b2716;
            background-color: #f3e5ab; /* cor tipo pergaminho */
            border: 2px solid #8b5e3c;
            border-radius: 8px;
            transition: all 0.3s ease-in-out;
            width: 240px;
            text-align: center;
        }

        a:hover {
            background-color: #d7c098;
            border-color: #6f4628;
            color: #2a1a0f;
        }

        @media (max-width: 500px) {
            a {
                width: 90%;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Menu Principal</h1>
        <h2>"A vingança nunca é plena, mata a alma e a envenena.";</h2><br/>
        <div class="link-container">
            <a href="conProfessor.php">Consultar Professor</a>
            <a href="conAluno.php">Consultar Aluno</a>
            <a href="conDisciplina.php">Consultar Disciplina</a>
            <a href="conFormatado.php">Ver Dados Formatados</a>
            <a href="cadAluno.php">Cadastrar Aluno</a>
            <a href="cadProfessor.php">Cadastrar Professor</a>
            <a href="cadDisciplina.php">Cadastrar Disciplina</a>
            <a href="cadNotas.php">Cadastrar Notas</a>
        </div>
    </div>

</body>
</html>
