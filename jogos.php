<?php 

$genero = "";
$nota = 0;
$nome = $_POST[""];

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $user = $_POST["user"];
    $senha = $_POST["senha"];
}

require "conexao.php";

echo "<br>meu sistema está conectado";

$sql = "CREATE TABLE IF NOT EXISTS Games (
id INT AUTO_INCREMENT PRIMARY KEY, 
nome VARCHAR (100), genero VARCHAR (50) nota INT )";

$pdo->exec($sql);

echo "<br>Tabela criada com sucesso";

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
            <input type="text" id="nome_jogo" name="nome_jogo" required>
            <p></p>
            <input type="text" id="genero" name="genero" required>
            <p></p>
            <input type="number" id="nota" name="nota" required>
            <p></p>
            <button type="submit">Cadastrar</button>
        </form>

        <?php ?>

        <h2>
            <?= $user ?> 
            <p></p>
            <?=  $senha ?>
        </h2>
        
        <?php ?> 

    </div>
</body>
</html>
