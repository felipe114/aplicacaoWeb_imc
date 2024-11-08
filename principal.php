<?php 
    session_start();
    include_once('conexao.php');

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){ /* se não existir as variáveis email e senha, redireciona para a página de inicio.php */
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: inicio.php');
    }
    $logado = $_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
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
        .box {
            background-color: #333;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        input[type="submit"],
        input[type="reset"] {
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
            padding: 15px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="box">
        <form action="calculo.php" method="post">
            <label for="peso">Peso (kg):</label>
            <input type="number" step="0.1" name="peso" id="peso" required>
            <br><br>
            <label for="altura">Altura (m):</label>
            <input type="number" step="0.01" name="altura" id="altura" required>
            <br><br>
            <input type="submit" value="Calcular IMC">
            <input type="reset" value="Reiniciar">
            <br><br>
            <!-- Botão 'Sair' que finaliza a sessão do usuário -->
            <button class="submit" name="submit" id="submit"><a href="sair.php" style="text-decoration: none; color:white;">Sair</a></button>
        </form>
    </div>
</body>
</html>