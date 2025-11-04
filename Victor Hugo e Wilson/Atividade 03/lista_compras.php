<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras Dinâmica</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Alinha no topo para a lista crescer para baixo */
            min-height: 100vh;
            margin: 20px; /* Adiciona margem para não ficar colado nas bordas */
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8 JsonResult;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }
        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 25px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: bold;
        }
        input[type="text"] {
            width: calc(100% - 22px); /* Ajuste para padding e border */
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .lista-exibicao {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }
        .lista-exibicao h3 {
            color: #333;
            margin-bottom: 15px;
        }
        .lista-exibicao ul {
            list-style-type: disc; /* Bolinhas padrão */
            padding-left: 25px;
        }
        .lista-exibicao li {
            background-color: #f9f9f9;
            border: 1px solid #eee;
            padding: 10px;
            margin-bottom: 8px;
            border-radius: 4px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Minha Lista de Compras</h2>
        <form action="processa_lista.php" method="POST">
            <div class="form-group">
                <label for="item_compra">Adicionar Novo Item:</label>
                <input type="text" id="item_compra" name="item_compra" placeholder="Ex: Leite, Pão, Ovos" required>
            </div>
            <input type="submit" value="Adicionar à Lista">
        </form>

        <div class="lista-exibicao">
            <h3>Itens na Lista:</h3>
            <?php
                // Este bloco PHP é apenas um placeholder para o aluno ver onde a lista será exibida.
                // O aluno deverá criar o arquivo processa_lista.php e fazer a lógica lá.
                // A lógica PHP para esta questão deverá iniciar com uma array pré-definida.
            ?>
        </div>
    </div>
</body>
</html>