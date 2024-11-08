<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        .login-container {
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
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #e50914;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }
        button{
            background-color: #e50914;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }
        .footer {
            margin-top: 20px;
            font-size: 0.8em;
            color: #aaa;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <form action="script.php" method="POST">
            <h1>Login</h1>
                <input type="text" name="email" placeholder="Email" required>
                <input type="password" name="senha" placeholder="Senha" required>
                <br><br>
                <input class="submit" type="submit" name="submit" id="submit" value="Enviar">
                <button class="submit" id="submit" type="submit"><a href="inicio.php" style="text-decoration: none; color:white;">Voltar</a></button>
            <div class="footer">
                <p>Necessita de ajuda?</p>
                <p>Não tem uma conta? <a href="cadastro.php" style="color: #e50914;">Inscreva-se agora.</a></p>
            </div>
        </form>
    </div>
</body>
</html>
