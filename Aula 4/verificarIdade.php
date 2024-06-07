<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de idade</title>
</head>
<body>
    <form action="" method="post">
        Digite a sua idade: <input type="text" name="idade"><br>
        <input type="submit" value="Verificar">
    </form>

<?php
// Mensagem de verificação
echo "--------------------------------------------- </br>";
echo "Para entrar, precisamos verificar a sua idade! </br>";
echo "--------------------------------------------- </br>";

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém a idade do formulário
    $idade = intval($_POST["idade"]);

    // Verifica a idade e exibe a mensagem apropriada
    if ($idade < 18) {
        echo "Você é menor de idade";
    } else {
        echo "Pode passar!";
    }
}
?>
</body>
</html>
