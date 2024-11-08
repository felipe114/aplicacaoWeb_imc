<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #141414;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0 20px;
        }
        .inicio-container {
            background-color: #333;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
        }
        button{
            background-color: #e50914;
            border: none;
            padding: 20px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            font-size: large;
        }
    </style>
</head>
<body>
    <div class="inicio-container">
        <form action="" method="post">
            <h2>Bem-vindo ao cálculo de IMC!
            </h2>
            <h2>Para começar, entre com seu login ou faça seu cadastro.</h2>
            <br><br>
            <button class="submit" id="submit" name="submit"><a href="login.php" style="text-decoration: none; color:white;">Entrar</a></button><!-- redireciona para a página de login -->
            <button class="submit" id="submit" name="submit"><a href="cadastro.php" style="text-decoration: none; color:white;">Criar Conta</a></button><!-- redireciona para a página de cadastro -->
        </form>
    </div>
</body>
</html>