<?php 

require "conexao.php";

$id_jogo = $_POST[""];
$jogo = $_POST[""];
$genero = $_POST[""];
$nota = $_POST[""];

echo "DEBUG0";

$sql = "CREATE TABLE IF NOT EXISTS games (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    id_jogo INT, jogo VARCHAR(100), genero VARCHAR(50), nota INT)";
    
    $pdo->exec($sql);
    
    echo "<br>Tabela criada com sucesso";

    echo "DEBUG1";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id = $_POST["id_jogo"];
    $jogo = $_POST["jogo"];
    $genero = $_POST["genero"];
    $nota = $_POST["nota"];
   
    echo "DEBUG2";

    $sql1 = "INSERT INTO games (id_jogo, jogo, genero, nota)
    VALUES ($id_jogo, '$jogo','$genero',$nota)";

echo "DEBUG3";


    $pdo->exec($sql1);

    echo "DEBUG4";


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
            <input type="text" id="jogo" name="jogo" required>
            <p></p>
            <input type="text" id="genero" name="genero" required>
            <p></p>
            <input type="number" id="nota" name="nota" required>
            <p></p>
            <button type="submit">Cadastrar</button>
        </form>
    </div>
    <div>
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

                <td><?= $jogo["id_jogo"] ?></td>
                <td><?= $jogo["nome"] ?></td>
                <td><?= $jogo["genero"] ?></td>
                <td><?= $jogo["nota"] ?></td>

            <?php } ?> 
        </table>
    </div>
</body>
</html>
