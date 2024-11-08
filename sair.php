<?php 
    session_start();
    /* finaliza a sessão e remove a página principal onde o usuario estava cadastrado, até ser acessada novamente */
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: inicio.php');//ao botão 'sair' ser clicado, redireciona para a página inicial
?>