<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro de acesso</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #141414;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0 20px;
        }
        .erro-container {
            background-color: #333;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
        }
        button{
            background-color: #e50914;
            border: none;
            padding: 20px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="erro-container">
        <h1>E-mail ou senha incorretos!</h1>
        <h1> Tente novamente ou faça seu cadastro.</h1>
        <!-- botões 'Criar Conta' e 'Voltar' -->
        <button class="submit" id="submit" name="submit"><a href="cadastro.php" style="text-decoration: none; color:white;">Criar Conta</a></button>
        <button class="submit" id="submit" type="submit"><a href="login.php" style="text-decoration: none; color:white;">Voltar</a></button>
    </div>
</body>
</html>