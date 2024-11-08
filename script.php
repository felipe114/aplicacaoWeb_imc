<?php 
    session_start(); /* inicia a sessão */
    
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){/* se os campos email e senha não estiverem vazios, entra na condição if */
        include_once('conexao.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];
        /* dados da página de login, que utiliza somente email e senha */
        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
        $result = $conexao->query($sql);
        $results = mysqli_query($conexao, "INSERT INTO usuarios(email, senha)
        VALUES ('$email', '$senha')");

        if(mysqli_num_rows($result) < 1){ /* se o email e senha não existirem no BD, redireciona para a página "erro.php" */
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: erro.php');
        }
        else{ /* caso exista, ele acessa a conta do usuário normalmente, acessando a página principal.php */
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: principal.php');
        }
    }
    else{
        header('Location: login.php');
    }
?>