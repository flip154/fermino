<?php 

require "conexao.php";

echo "DEBUG1 ";

$jogo = $_POST[""];
$genero = $_POST[""];
$ano_lancamento = $_POST[""];
$nota = $_POST[""];

echo "DEBUG2 ";

$sql = "CREATE TABLE IF NOT EXISTS games (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    jogo VARCHAR (100), genero VARCHAR, (50) ano_lancamento INT, nota INT)";
    
    $pdo->exec($sql);
    
    echo "<br>Tabela criada com sucesso";

    echo "DEBUG3 ";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $jogo = $_POST["jogo"];
    $genero = $_POST["genero"];
    $ano_lancamento = $_POST["ano_lancamento"];
    $nota = $_POST["nota"];
   

    $sql = "INSERT INTO games (jogo, genero, ano_lançamento, nota);
    VALUES ($jogo, $genero, $nota, $ano_lancamento)";

    $pdo->exec($sql);

    echo "DEBUG4 ";

    echo "<br>Jogo cadastrado com sucesso";

    echo "DEBUG5 ";
}

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
