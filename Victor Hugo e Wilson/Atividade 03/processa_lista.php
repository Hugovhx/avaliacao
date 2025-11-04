<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras Atualizada</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            margin: 20px;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }
        h2, h3 {
            color: #333;
            text-align: center;
        }
        ul {
            list-style-type: disc;
            padding-left: 25px;
        }
        li {
            background-color: #f9f9f9;
            border: 1px solid #eee;
            padding: 10px;
            margin-bottom: 8px;
            border-radius: 4px;
            color: #333;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
        a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Lista de Compras Atualizada</h2>

        <?php
            // 1️⃣ Receber o item enviado via POST
            $novoItem = $_POST['item_compra'];

            // 2️⃣ Criar uma array com alguns itens pré-definidos
            $lista = ["Pão", "Leite", "Café"];

            // 3️⃣ Adicionar o novo item ao array
            $lista[] = $novoItem;

            // 4️⃣ Exibir todos os itens da lista
            echo "<div class='lista-exibicao'>";
            echo "<h3>Itens na Lista:</h3>";
            echo "<ul>";
            foreach ($lista as $item) {
                echo "<li>$item</li>";
            }
            echo "</ul>";
            echo "</div>";
        ?>

        <!-- <a href="Lista_Compras.html">Voltar</a> -->
    </div>
</body>
</html>
