
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo do IMC</title>
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
        .box-calculo {
            background-color: #333;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 400px;
            text-align: center;
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
    <div class="box-calculo">
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $peso = $_POST['peso'];
                $altura = $_POST['altura'];

                if ($altura > 0) {
                    $imc = $peso / ($altura * $altura);
                    echo "<h1>Seu IMC é: " . round($imc, 2) . "</h1>";

                    if ($imc < 18.5) {
                        echo "<h2>Você está abaixo do peso.</h2>";
                    } elseif ($imc >= 18.5 && $imc < 24.9) {
                        echo "<h2>Seu peso está normal.</h2>";
                    } elseif ($imc >= 25 && $imc < 29.9) {
                        echo "<h2>Você está com sobrepeso.</h2>";
                    } else {
                        echo "<h2>Você está obeso.</h2>";
                    }
                } else {
                    echo "<h2>Altura deve ser maior que zero.</h2>";
                }
            } else {
                echo "<h2>Por favor, reenvie o formulário.</h2>";
            }
            ?>
        <button class="submit" id="submit" type="submit"><a href="principal.php" style="text-decoration: none; color:white;">Voltar</a></button>
    </div>
</body>
</html>