<?php
// lanchonete.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // --- TABELA DE PREÇOS ---
    $precos = [
        "coxinha" => 6.00,
        "risole" => 5.50,
        "esfiha" => 7.00,
        "hamburguer_simples" => 15.00,
        "x_bacon" => 18.00,
        "x_tudo" => 22.00,
        "pizza_calabresa" => 10.00,
        "pizza_frango" => 11.00,
        "pizza_portuguesa" => 12.00,
        "refrigerante" => 8.00,
        "suco" => 7.50,
        "agua" => 4.00
    ];

    // --- CATEGORIAS ---
    $categorias = [
        "Salgados" => ["coxinha", "risole", "esfiha"],
        "Hambúrgueres" => ["hamburguer_simples", "x_bacon", "x_tudo"],
        "Pizzas" => ["pizza_calabresa", "pizza_frango", "pizza_portuguesa"],
        "Bebidas" => ["refrigerante", "suco", "agua"]
    ];

    $subtotais = [];
    $totalGeral = 0;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resumo do Pedido</title>
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
            max-width: 600px;
        }
        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 25px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        .subtotal {
            font-weight: bold;
            background-color: #f0f8ff;
        }
        .total {
            font-size: 18px;
            font-weight: bold;
            text-align: right;
        }
        a {
            display: block;
            text-align: center;
            background-color: #28a745;
            color: white;
            padding: 10px;
            text-decoration: none;
            border-radius: 4px;
        }
        a:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Resumo do Pedido</h2>
        <?php
        foreach ($categorias as $nomeCategoria => $itens) {
            $subtotal = 0;
            echo "<h3>$nomeCategoria</h3>";
            echo "<table>";
            echo "<tr><th>Item</th><th>Qtd</th><th>Preço Unitário</th><th>Total</th></tr>";

            foreach ($itens as $item) {
                $qtd = isset($_POST[$item]) ? (int) $_POST[$item] : 0;
                if ($qtd > 0) {
                    $preco = $precos[$item];
                    $totalItem = $qtd * $preco;
                    $subtotal += $totalItem;

                    echo "<tr>
                            <td>" . ucfirst(str_replace('_', ' ', $item)) . "</td>
                            <td>$qtd</td>
                            <td>R$ " . number_format($preco, 2, ',', '.') . "</td>
                            <td>R$ " . number_format($totalItem, 2, ',', '.') . "</td>
                        </tr>";
                }
            }

            echo "<tr class='subtotal'><td colspan='3'>Subtotal $nomeCategoria</td><td>R$ " . number_format($subtotal, 2, ',', '.') . "</td></tr>";
            echo "</table>";

            $totalGeral += $subtotal;
        }

        echo "<p class='total'>Valor Total da Compra: <strong>R$ " . number_format($totalGeral, 2, ',', '.') . "</strong></p>";
        ?>
        <a href="Lanchonete.html">Voltar ao Pedido</a>
    </div>
</body>
</html>
<?php
} else {
    header("Location: Lanchonete.html");
    exit;
}
?>
