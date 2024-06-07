<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h2>Calculadora Simples</h2>
    <form action="" method="post">
        <input type="number" name="numero1" placeholder="Digite o primeiro número" required><br>
        <input type="number" name="numero2" placeholder="Digite o segundo número" required><br>
        <select name="operacao">
            <option value="soma">Soma</option>
            <option value="subtracao">Subtração</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="divisao">Divisão</option>
        </select>
        <input type="submit" value="Calcular">
    </form>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $operacao = $_POST["operacao"];

        // Realiza a operação selecionada usando switch case
        switch ($operacao) {
            case "soma":
                $resultado = $numero1 + $numero2;
                echo "O resultado da soma é: $resultado";
                break;
            case "subtracao":
                $resultado = $numero1 - $numero2;
                echo "O resultado da subtração é: $resultado";
                break;
            case "multiplicacao":
                $resultado = $numero1 * $numero2;
                echo "O resultado da multiplicação é: $resultado";
                break;
            case "divisao":
                if ($numero2 == 0) {
                    echo "Não é possível dividir por zero";
                } else {
                    $resultado = $numero1 / $numero2;
                    echo "O resultado da divisão é: $resultado";
                }
                break;
            default:
                echo "Operação inválida";
                break;
        }
    }
    ?>
</body>
</html>
