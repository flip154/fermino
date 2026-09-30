<?php 

require "conexao.php";

$id = $_POST[""];
$jogo = $_POST[""];
$genero = $_POST[""];
$nota = $_POST[""];

$sql = "CREATE TABLE IF NOT EXISTS games (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    id INT, jogo VARCHAR(100), genero VARCHAR(50), nota INT)";
    
    $pdo->exec($sql);
    
    echo "<br>Tabela criada com sucesso";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id = $_POST["id"];
    $jogo = $_POST["jogo"];
    $genero = $_POST["genero"];
    $nota = $_POST["nota"];
   

    $sql1 = "INSERT INTO games (id, jogo, genero, nota)
    VALUES ($id, '$jogo','$genero',$ano_lancamento,$nota)";

    $pdo->exec($sql1);

    echo "<br>Jogo cadastrado com sucesso";
}

//busca todos os registros no banco de dados
$buscar = "SELECT*FROM games";

//exec() = executa algo quando você não precisa receber registros de volta
//query() = executa uma consulta quando você quer receber dados de volta
$stmt = $pdo->query($buscar);

$jogo = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Jogos</title>
</head>
<body>
    <div class="container" >
        <form method="POST">
            <input type="number" id="id" name="id" required>
            <p></p>
            <input type="text" id="jogo" name="jogo" required>
            <p></p>
            <input type="text" id="genero" name="genero" required>
            <p></p>
            <!-- <input type="number" id="ano_lancamento" name="ano_lancamento" required>
            <p></p> -->
            <input type="number" id="nota" name="nota" required>
            <p></p>
            <button type="submit">Cadastrar</button>
        </form>

        <h2>Jogos cadastrados</h2>

        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Genêro</th>
                <th>Nota</th>
            </tr>

            <!-- foreach() -> Para cada item  nessa lista, faça alguma coisa com X variavel  -->
            <?php foreach($jogo as $jogo){?>

                <td><?= $jogo["id"] ?></td>
                <td><?= $jogo["nome"] ?></td>
                <td><?= $jogo["genero"] ?></td>
                <td><?= $jogo["nota"] ?></td>

            <?php } ?> 
        </table>
    </div>
</body>
</html>
