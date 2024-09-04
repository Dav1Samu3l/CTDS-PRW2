<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<?php

$idade = $_POST["idade"];

function verificarIdade($idade) {
    $valorTestado = filter_var($idade, FILTER_VALIDATE_INT);
    if ($valorTestado === false OR $valorTestado < 0) {
        exit("<form><p>Idade inválida</p>
        <div class='bolinhaVermelha'></div>
        </form>");
    }
}

function aptoAVotar($idade) {
    if ($idade >= 16) {
        echo "<form><p>Apto a votar</p>
        <div class='bolinhaVerde'></div>
        </form>";
    } else {
        echo "<form><p>Não apto a votar</p>
        <div class='bolinhaVermelha'></div>
        </form>";
    }
}
verificarIdade($idade);
aptoAVotar($idade);
?>

</body>
</html>