<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operacao = $_POST["operacao"];
    $resultado = "";

    switch ($operacao) {
        case "somar":
            $resultado = $num1 + $num2;
            break;

        case "subtrair":
            $resultado = $num1 - $num2;
            break;

        case "multiplicar":
            $resultado = $num1 * $num2;
            break;

        case "dividir":
            if ($num2 == 0) {
                $resultado = "❌ Não é possível dividir por zero!";
            } else {
                $resultado = $num1 / $num2;
            }
            break;

        default:
            $resultado = "Operação inválida!";
            break;
    }

    echo "<h2>Resultado:</h2>";
    echo "<p><strong>$resultado</strong></p>";
    echo "<br><a href='calculadora.html'>Voltar</a>";
}
?>
