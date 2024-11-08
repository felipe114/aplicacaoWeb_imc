<?php
    if(isset($_POST['submit'])){
        include_once('conexao.php');

        $nome_completo = $_POST['nome_completo'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $celular = $_POST['celular'];
        $data_nasc = $_POST['data_nasc'];
        /* realizando o endereçamento de cada campo com o Banco de Dados */
        
        $quant_senha = strlen($senha);
        if(str_contains($email, '@') && $quant_senha >= 7){ /* se for um email válido e uma senha de no mínimo 8 caracteres, o novo usuário é cadastrado */
            $results = mysqli_query($conexao, "INSERT INTO usuarios(nome_completo, email, senha, celular, data_nasc)
            VALUES ('$nome_completo', '$email', '$senha', '$celular', '$data_nasc')");
            
            header('Location: login.php');/* e vai para a tela de login */
        }
        else{
            echo "<h1>Email e/ou senha inválidos!</h1>"; /* caso contrário, a página "não existe" é mostrada */
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuário</title>
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
        .cadastro-container {
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
        input[type="email"],
        input[type="password"],
        input[type="text"],
        input[type="date"]{
            width: 80%;
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
    </style>
</head>
<body>
<div class="cadastro-container">
        <form action="cadastro.php" method="POST">
            <br>
                <h1>Cadastro</h1>
                <div class="insert"> <!-- div para o campo 'Nome Completo' -->  
                    <label for="nome_completo" class="insert_label"></label>
                    <input type="text" name="nome_completo" id="nome_completo" class="inputBox" placeholder="Nome Completo" required>
                </div>
                <div class="insert"> <!-- div para o campo 'Email' -->
                    <label for="email" class="insert_label"></label>
                    <input type="email" name="email" id="email" class="inputBox" placeholder="Email" required>
                </div>
                <div class="insert"> <!-- div para o campo 'Senha' -->
                    <label for="senha" class="insert_label"></label>
                    <input type="password" name="senha" id="senha" class="inputBox" placeholder="Senha" required>
                </div>
                <div class="insert"><!-- div para o campo 'Celular' -->
                    <label for="celular" class="insert_label"></label>
                    <input type="text" name="celular" id="celular" class="inputBox" placeholder="Celular" required>
                </div>
                <div class="insert"> <!-- div para o campo 'Data de Nascimento' -->
                    <label for="data_nasc" class="insert_label"></label>
                    <input type="text" name="data_nasc" id="data_nasc" class="inputBox" placeholder="Data de nascimento" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}" required>
                </div>
                <br><br>
                <!-- botão para realizar o cadastro -->
                <input type="submit" name="submit" id="submit" value="Cadastrar" class="submit">
                <!-- botão para voltar à página inicial -->
                <button class="submit" id="submit" name="submit"><a href="inicio.php" style="text-decoration: none; color:white;">Voltar</a></button>
        </form>
    </div>
</body>
</html>