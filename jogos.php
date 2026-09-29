<?php 

$jogo = $_POST[""];
$genero = $_POST[""];
$ano_lancamento = $_POST[""];
$nota = $_POST[""];

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $jogo = $_POST["jogo"];
    $nota = $_POST["genero"];
    $nota = $_POST["nota"];
    $nota = $_POST["ano_lancamento"];
}

require "conexao.php";

echo "<br>meu sistema está conectado";

$sql = "CREATE TABLE IF NOT EXISTS games (
id INT AUTO_INCREMENT PRIMARY KEY, 
jogo VARCHAR (100), genero VARCHAR, (50) ano_lancamento INT, nota INT)";

$pdo->exec($sql);

echo "<br>Tabela criada com sucesso";

$sql = "INSERT INTO games (jogo, genero, nota);
VALUES ($jogo, $genero, $nota, $ano_lancamento)";

$pdo->exec($sql);

echo "<br>Jogo cadastrado com sucesso";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <div class="container" >
        <form method="POST">
            <input type="text" id="jogo" name="jogo" required>
            <p></p>
            <input type="text" id="genero" name="genero" required>
            <p></p>
            <input type="number" id="ano_lancamento" name="ano_lancamento" required>
            <p></p>
            <input type="number" id="nota" name="nota" required>
            <p></p>
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>
