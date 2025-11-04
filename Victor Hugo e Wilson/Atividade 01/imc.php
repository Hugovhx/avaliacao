<?php
// calcula_imc.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = isset($_POST['peso']) ? (float) $_POST['peso'] : 0;
    $altura = isset($_POST['altura']) ? (float) $_POST['altura'] : 0;
    $genero = isset($_POST['genero']) ? $_POST['genero'] : '';

    if ($peso > 0 && $altura > 0) {
        $imc = $peso / ($altura * $altura);

        // Classificação diferenciada por gênero
        if ($genero == "masculino") {
            if ($imc < 20.7) {
                $classificacao = "Abaixo do peso";
            } elseif ($imc < 26.4) {
                $classificacao = "Peso ideal";
            } elseif ($imc < 27.8) {
                $classificacao = "Pouco acima do peso";
            } elseif ($imc < 31.1) {
                $classificacao = "Acima do peso";
            } else {
                $classificacao = "Obesidade";
            }
        } elseif ($genero == "feminino") {
            if ($imc < 19.1) {
                $classificacao = "Abaixo do peso";
            } elseif ($imc < 25.8) {
                $classificacao = "Peso ideal";
            } elseif ($imc < 27.3) {
                $classificacao = "Pouco acima do peso";
            } elseif ($imc < 32.3) {
                $classificacao = "Acima do peso";
            } else {
                $classificacao = "Obesidade";
            }
        } else {
            $classificacao = "Gênero não informado.";
        }
    } else {
        $imc = null;
        $classificacao = "Valores inválidos para peso ou altura.";
    }
} else {
    header("Location: IMC_form.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do IMC</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            color: #555;
            margin: 10px 0;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
        }
        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Resultado do IMC</h2>

        <?php if ($imc): ?>
            <p><strong>Gênero:</strong> <?= htmlspecialchars($genero) ?></p>
            <p><strong>Seu IMC é:</strong> <?= number_format($imc, 2, ',', '.') ?></p>
            <p><strong>Classificação:</strong> <?= $classificacao ?></p>
        <?php else: ?>
            <p><?= $classificacao ?></p>
        <?php endif; ?>

        <a href="IMC_form.html">Voltar</a>

         -S localhost:8000
        st
    </div>
</body>
</html>
