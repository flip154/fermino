<?php

    require "conexao.php";

    echo "<br>meu sistema está conectado";

    $sql = "CREATE TABLE IF NOT EXISTS teste (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    nome VARCHAR (100), idade INT )";

    $pdo->exec($sql);

    echo "<br>Tabela criada com sucesso";

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <p></p>
    <a href="idade.php"> Identificador de idade </a>
    <p></p>
    <a href="notas.php"> Notas </a>
    <p></p>
    <a href="login-basico.php"> LOGIN </a>
    <p></p>
    <a href="notas_get.php"> Notas </a>
</body>
</html>