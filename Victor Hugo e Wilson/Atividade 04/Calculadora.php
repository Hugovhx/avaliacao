<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora com Switch</title>
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
            margin-bottom: 25px;
        }
        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: bold;
        }
        input[type="number"],
        select {
            width: calc(100% - 22px);
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
            margin-bottom: 10px;
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
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Calculadora Simples</h2>
        <form action="calcula_operacao.php" method="POST">
            <div class="form-group">
                <label for="numero1">Primeiro Número:</label>
                <input type="number" id="numero1" name="num1" step="any" required placeholder="Ex: 10">
            </div>

            <div class="form-group">
                <label for="numero2">Segundo Número:</label>
                <input type="number" id="numero2" name="num2" step="any" required placeholder="Ex: 5">
            </div>

            <div class="form-group">
                <label for="operacao">Operação:</label>
                <select id="operacao" name="operacao" required>
                    <option value="">Selecione a Operação</option>
                    <option value="somar">Somar (+)</option>
                    <option value="subtrair">Subtrair (-)</option>
                    <option value="multiplicar">Multiplicar (*)</option>
                    <option value="dividir">Dividir (/)</option>
                </select>
            </div>

            <input type="submit" value="Calcular">
        </form>
    </div>
</body>
</html>
